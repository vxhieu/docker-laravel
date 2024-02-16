<template>
    <div id="page-container"
         class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <TheSideBar></TheSideBar>
        <TheHeader></TheHeader>
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                        <div class="flex-grow-1">
                            <h1 class="h3 fw-bold mb-1">
                              Table List Sites
                            </h1>
                        </div>
                        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">
                                    <a class="link-fx" href="javascript:void(0)">Account</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Sites
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
                        <button class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Add New Site</button>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell">Name</th>
                                <th class="d-none d-sm-table-cell">Domain</th>
                                <th class="d-none d-sm-table-cell">CMS</th>
                                <th class="d-none d-sm-table-cell"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(item, key) in this.listSites" :key="key">
                                <td class="d-none d-sm-table-cell fs-sm">{{ item.name }}</td>
                                <td class="d-none d-sm-table-cell fs-sm">{{ item.domain }}</td>
                                <td class="d-none d-sm-table-cell fs-sm">{{ item.cms_type }}</td>
                                <td class="d-none d-sm-table-cell fs-sm">
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <TheFooter></TheFooter>
    </div>
</template>
<script>
import TheHeader from "../../layouts/TheHeader.vue";
import TheSideBar from "../../layouts/TheSideBar.vue";
import TheFooter from "../../layouts/TheFooter.vue";
import axios from "axios";
export default {
    name: 'Sites',
    components: {
        TheHeader,
        TheSideBar,
        TheFooter
    },
    data() {
        return {
            listSites: {},
        }
    },
    created() {
        this.fetchDataUser();
    },
    methods: {
        fetchDataUser() {
            axios.get('/api/sites').then((response) => {
                console.log(response);
                this.listSites = response.data.listSites;
            }).catch((error) => {
                console.log("error", error)
            })
        }
    }

};
</script>
