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
                              Add New Site
                            </h1>
                        </div>
                        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">
                                    <router-link :to="{ name: 'sites' }" class="link-fx">Sites</router-link>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Add
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
                <form @submit.prevent="addSite" id="add-sites-form">
                    <div class="input-group input-group-sm">
                        <label>Name</label>
                        <input type="text" class="form-control input-sm" v-model="site.name" required>
                    </div>
                    <div class="input-group input-group-sm">
                        <label>Site Type</label>
                        <select v-model="site.site_type" required>
                            <option v-for="option in options" :value="option.value">
                                {{ option.text }}
                            </option>
                        </select>
                    </div>
                    <div class="input-group input-group-sm">
                        <label>Domain</label>
                        <input type="text" class="form-control input-sm" v-model="site.domain" required>
                    </div>
                    <div class="input-group input-group-sm">
                        <label>Admin URL</label>
                        <input type="text" class="form-control input-sm" v-model="site.admin_url" required>
                    </div>
                    <div class="input-group input-group-sm">
                        <label>CMS Type</label>
                        <select v-model="site.cms_type" required>
                            <option v-for="cms in cms_options" :value="cms.value">
                                {{ cms.text }}
                            </option>
                        </select>
                    </div>
                    <div class="input-group input-group-sm">
                        <div class="action">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
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
    name: 'sites.create',
    components: {
        TheHeader,
        TheSideBar,
        TheFooter
    },
    data() {
        return {
            site_type : null,
            options : [
                { text: 'Development', value: 'development' },
                { text: 'Staging', value: 'staging' },
                { text: 'Production', value: 'production' }
            ],
            cms_type : null,
            cms_options : [
                { text: 'Wordpress', value: 'Wordpress' },
                { text: 'Magento 1', value: 'Magento 1' },
                { text: 'Magento 2', value: 'Magento 2' },
                { text: 'Shopify', value: 'Shopify' },
                { text: 'BigCommerce', value: 'BigCommerce' },
                { text: 'Other', value: 'Other' }
            ],
            site : {
                name : "",
                site_type : "",
                domain : "",
                admin_url : "",
                cms_type : ""
            }
        }
    },
    methods: {
        addSite() {
            axios.post('/api/sites', this.site)
                .then(response => (
                    this.$router.push({ name: 'sites' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }

};
</script>
<style scoped>
#add-sites-form .input-group {
    height: 35px;
    margin-bottom: 15px;
    width: 70%;
}
#add-sites-form .input-group label {
    width: 100px;
    vertical-align: middle;
}
#add-sites-form .input-group select {
    width: 50%;
    border: 1px solid #dfe3ea;
}
#add-sites-form .input-group button {
    float: right;
    border: 1px solid #006c5b;
    padding: 7px 25px;
    border-radius: 5px;
    color: #fff;
    background: #006c5b;
}
#add-sites-form .input-group .action {
    width: 100%;
}
</style>