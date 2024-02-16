const Login = () => import('../components/views/login/Login.vue')
const DashBoard = () => import('../components/views/admin/Dashboard.vue')
const  Users = () => import('../components/views/admin/Users.vue')
const Sites = () => import('../components/views/admin/Sites.vue')
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
    }, {
        path: '/admin/sites',
        component: Sites,
        name: 'sites',
    },
];
