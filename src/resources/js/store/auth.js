import axios from "axios";
import router from "../router";
const apiBaseUrl = "/api/auth";
const state = {
    user: {
        username:''
    },
}
const getters = {
    user(state){
        return state.user.username
    }
}
const mutations = {
    setUser(state, { username }) {
        state.user.username = username;
    },
};
const actions = {
    async loginUser({ commit }, user) {
        try {
            const response = await axios.post(`${apiBaseUrl}/login`, {
                username: user.name,
                password: user.password,
            });

            const { token } = response.data;
            axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;

            commit('setUser', { username: user.name });
            router.push({ name: 'dashboard' });
        } catch (error) {
            console.error('Login failed:', error);
        }
    },

    async refreshTokens({ commit }) {
        try {
            const response = await axios.post(`${apiBaseUrl}/refresh`);
            const { token } = response.data;
            axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
        } catch (error) {
            console.error('Token refresh failed:', error);
            router.push({ name: 'login' });
        }
    },

    async logout() {
        try {
            await axios.post(`${apiBaseUrl}/logout`);
            axios.defaults.headers.common['Authorization'] = '';
            router.push({ name: 'login' });
        } catch (error) {
            console.error('Logout failed:', error);
            router.push({ name: 'login' });
        }
    },
}
export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
};
