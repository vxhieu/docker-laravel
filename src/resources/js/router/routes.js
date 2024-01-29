const Login = () => import('../components/views/login/Login.vue')
const DashBoard = () => import('../components/views/admin/Dashboard.vue')
const  Users = () => import('../components/views/admin/Users.vue')
export default [
    {
        path: '/admin',
        component: Login,
        name: 'login',

    },
    {
        path: '/admin/dashboard',
        component: DashBoard,
        name: 'dashboard',
    }, {
        path: '/admin/users',
        component: Users,
        name: 'users',
    },
];
