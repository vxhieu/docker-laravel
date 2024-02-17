const Login = () => import('../components/views/login/Login.vue')
const DashBoard = () => import('../components/views/admin/Dashboard.vue')
const Users = () => import('../components/views/admin/Users.vue')

const SitesIndex = () => import('../components/views/admin/sites/Index.vue')
const SitesCreate = () => import('../components/views/admin/sites/Add.vue')
const SitesUpdate = () => import('../components/views/admin/sites/Edit.vue')

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
        component: SitesIndex,
        name: 'sites',
    }, {
        path: '/admin/sites/create',
        component: SitesCreate,
        name: 'sites.create',
    },  {
        path: '/admin/sites/update/:id',
        component: SitesUpdate,
        name: 'sites.update',
    },
];
