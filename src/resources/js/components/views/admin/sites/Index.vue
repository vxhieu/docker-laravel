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
            <div class="content table-list-sites">
                <!-- Dynamic Table Full -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <router-link :to="{ name: 'sites.create' }" class="text-sm font-small title-header">Add New Site</router-link>
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
                            <tr v-for="(item, key) in this.sites" :key="key">
                                <td class="d-none d-sm-table-cell fs-sm">{{ item.name }}</td>
                                <td class="d-none d-sm-table-cell fs-sm">{{ item.domain }}</td>
                                <td class="d-none d-sm-table-cell fs-sm">{{ item.cms_type }}</td>
                                <td class="d-none d-sm-table-cell fs-sm">
                                    <router-link :to="{ name: 'sites.update', params: { id: item.id } }" class="text-sm edit-action"><i class="fa fa-edit" style="font-size:20px"></i></router-link>
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
import TheHeader from "../../../layouts/TheHeader.vue";
import TheSideBar from "../../../layouts/TheSideBar.vue";
import TheFooter from "../../../layouts/TheFooter.vue";
import axios from "axios";

export default {
    name: 'sites',
    components: {
        TheHeader,
        TheSideBar,
        TheFooter
    },
    data() {
        return {
            sites: {},
        }
    },
    created() {
        this.fetchDataSites();
    },
    methods: {
        fetchDataSites() {
            axios.get('/api/sites').then((response) => {
                console.log(response);
                this.sites = response.data.sites;
            }).catch((error) => {
                console.log("error", error)
            })
        }
    }

};
</script>
<style scoped>
#main-container .table-list-sites .block-header a.title-header {
    border: 1px solid #006c5b;
    padding: 5px 10px;
    border-radius: 5px;
    color: #fff;
    background: #006c5b;
    font-size: 14px;
}
a.edit-action i {
    color: #006c5b;
}
</style>