import axios from "axios";
import router from "../router";
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
    loginUser({ commit }, user) {
        return axios.post('/api/auth/login', {
            username: user.name,
            password: user.password
        }).then(res => {
            const token = res.data.token;
            const username = user.name;
            axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
            commit('setUser', { username });
            router.push({name:'dashboard'});
        }).catch(error => {
            console.log(error);
        })
    },
    async refreshTokens({ state, commit }) {
            try {
                const response = await axios.post('/api/auth/refresh', {
                    refreshToken: state.refreshToken,
                });
                const { accessToken, refreshToken } = response.data;
                axios.defaults.headers.common['Authorization'] = `Bearer ${accessToken}`;
            } catch (error) {
                router.push({name:'login'});
            }
    },
    async logout({ }) {
            const response = await axios.post('/api/auth/logout');
            axios.defaults.headers.common['Authorization'] = '';
    },
}
export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
};
