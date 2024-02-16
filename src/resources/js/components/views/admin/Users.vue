<template>
    <div id="page-container"
         class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <TheSideBar></TheSideBar>
        <TheHeader></TheHeader>
        <main id="main-container" class="main-wrap">
            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                        <div class="flex-grow-1">
                            <h1 class="h3 fw-bold mb-1">
                                Table List User
                            </h1>
                        </div>
                        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">
                                    <a class="link-fx" href="javascript:void(0)">Tables</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    DataTables
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Dynamic Table Full -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Dynamic Table <small>Full</small></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 80px;">ID</th>
                                <th>Name</th>
                                <th class="d-none d-sm-table-cell" style="width: 50%;">Email</th>
                                <th style="width: 15%;">Roles</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(item, key) in this.listUsers" :key="key">
                                <td class="text-center fs-sm">{{ key + 1 }}</td>
                                <td class="fw-semibold fs-sm"> {{ item.username }}</td>
                                <td class="d-none d-sm-table-cell fs-sm">
                                    <span class="text-muted">{{ item.email }}</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">{{
                                            roles[key]
                                        }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" @click="isShow=true"
                                                data-bs-toggle="tooltip" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-alt-secondary"
                                                data-bs-toggle="tooltip" title="Delete">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
            <UsersForm
                v-if="isShow"
                @closeForm="closeForm"
            />
        </main>
        <TheFooter></TheFooter>
    </div>
</template>
<script>
import TheHeader from "../../layouts/TheHeader.vue";
import TheSideBar from "../../layouts/TheSideBar.vue";
import TheFooter from "../../layouts/TheFooter.vue";
import UsersForm from "../admin/UsersForm.vue"
import axios from "axios";

export default {
    name: 'Users',
    components: {
        TheHeader,
        TheSideBar,
        TheFooter,
        UsersForm
    },
    data() {
        return {
            listUsers: {},
            roles: [],
            isShow: false,
        }
    },
    created() {
        this.fetchDataUser();
    },
    methods: {
        fetchDataUser() {
            axios.get('/api/users').then((response) => {
                const {listUser, roles} = response.data;
                this.listUsers = listUser;
                this.roles = roles;
            }).catch((error) => {
                console.log("error", error)
            })
        },
        /** Handle click button close form */
        closeForm() {
            this.isShow = false;
        },
        changeIsShow() {
            this.isShow = true;
        },
    }

};
</script>
<style scoped>
.main-wrap {
    position: relative;
    z-index: 1;
}
</style>
