import axios from "axios";

const apiBaseUrl = "/api/auth";
axios.interceptors.response.use(
    function (response) {
        return response;
    },
    function (error) {
        const originalRequest = error.config;

        if (error.response.status === 401 && !originalRequest._retry) {
            originalRequest._retry = true;

            const refreshToken = window.localStorage.getItem('refreshToken');

            if (!refreshToken) {
                // No refresh token available, handle accordingly
                // For example, clear authentication state and redirect to login
                // This depends on how your authentication flow is handled
                return Promise.reject(error);
            }

            return axios.post('/api/auth/refresh', { refreshToken })
                .then(({ data }) => {
                    axios.defaults.headers.common['Authorization'] = 'Bearer ' + data.token;
                    originalRequest.headers['Authorization'] = 'Bearer ' + data.token;
                    return axios(originalRequest);
                })
                .catch((refreshError) => {
                    // Handle the case where refresh token is invalid or expired
                    // Clear authentication state and redirect to login
                    // This depends on how your authentication flow is handled
                    return Promise.reject(refreshError);
                });
        }

        return Promise.reject(error);
    }
);

export default axios;
