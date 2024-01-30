import axios from "axios";
import router from "../router"
const apiBaseUrl = "/api/auth";
axios.interceptors.response.use(
    function (response) {
        return response;
    },
    function (error) {
        const originalRequest = error.config;
        if (error.response.status === 401 && !originalRequest._retry) {
            originalRequest._retry = true;
            return axios.post('/api/auth/refresh')
                .then(({ data }) => {
                    console.log("data",data);
                    axios.defaults.headers.common['Authorization'] = 'Bearer ' + data.token;
                    originalRequest.headers['Authorization'] = 'Bearer ' + data.token;
                    return axios(originalRequest);
                })
                .catch((refreshError) => {
                    router.push({name:"login"});
                });
        }

        return Promise.reject(error);
    }
);

export default axios;
