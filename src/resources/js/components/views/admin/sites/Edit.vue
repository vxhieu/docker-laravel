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
                              Edit Site
                            </h1>
                        </div>
                        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">
                                    <a class="link-fx" href="javascript:void(0)">Sites</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Edit
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
                <form @submit.prevent="updateSite">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="site.name">
                    </div>
                    <div class="form-group">
                        <label>Site Type</label>
                        <select v-model="site.site_type">
                            <option v-for="option in options" :value="option.value">
                                {{ option.text }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Domain</label>
                        <input type="text" class="form-control" v-model="site.domain">
                    </div>
                    <div class="form-group">
                        <label>Admin URL</label>
                        <input type="text" class="form-control" v-model="site.admin_url">
                    </div>
                    <div class="form-group">
                        <label>CMS Type</label>
                        <select v-model="site.cms_type">
                            <option v-for="cms in cms_options" :value="cms.value">
                                {{ cms.text }}
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
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
    name: 'sites.update',
    components: {
        TheHeader,
        TheSideBar,
        TheFooter
    },
    data() {
        return {
            site_type : '',
            options : [
                { text: 'Development', value: 'development' },
                { text: 'Staging', value: 'staging' },
                { text: 'Production', value: 'production' }
            ],
            cms_type : '',
            cms_options : [
                { text: 'Wordpress', value: 'Wordpress' },
                { text: 'Magento 1', value: 'Magento 1' },
                { text: 'Magento 2', value: 'Magento 2' },
                { text: 'Shopify', value: 'Shopify' },
                { text: 'BigCommerce', value: 'BigCommerce' },
                { text: 'Other', value: 'Other' }
            ],
            site:{
                name : "",
                site_type : "",
                domain : "",
                admin_url : "",
                cms_type : "",
                _method : "patch"
            }
        }
    },
    created() {
        axios.get(`/api/sites/${this.$route.params.id}`)
            .then((response) => {
                this.site = response.data;
            });
    },
    methods: {
        updateSite() {
            axios.patch(`/api/sites/${this.$route.params.id}`, this.site)
                .then((res) => {
                    this.$router.push({ name: 'sites' });
                });
        }
    }

};
</script>
