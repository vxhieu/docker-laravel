<template>
    <Skeleton v-if="isLoading"></Skeleton>
    <div id="page-container">
        <main id="main-container">
            <div class="hero-static d-flex align-items-center">
                <div class="content">
                    <div class="row justify-content-center push">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign In Block -->
                            <div class="block block-rounded mb-0">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Sign In</h3>
                                    <div class="block-options">
                                        <a class="btn-block-option fs-sm" href="op_auth_reminder.html">Forgot Password?</a>
                                        <a class="btn-block-option" href="op_auth_signup.html" data-bs-toggle="tooltip"
                                           data-bs-placement="left" title="New Account">
                                            <i class="fa fa-user-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
                                        <p class="fw-medium text-muted">
                                            Welcome, please login.
                                        </p>

                                        <div class="js-validation-signin">
                                            <div class="py-3">
                                                <div class="mb-4">
                                                    <input type="text" v-model="user.name" class="form-control form-control-alt form-control-lg"
                                                           id="login-username" name="login-username" placeholder="Username">
                                                </div>
                                                <div class="mb-4">
                                                    <input type="password" v-model="user.password"
                                                           class="form-control form-control-alt form-control-lg"
                                                           id="login-password" name="login-password" placeholder="Password">
                                                </div>
                                                <div class="mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="login-remember" name="login-remember">
                                                        <label class="form-check-label" for="login-remember">Remember
                                                            Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-6 col-xl-5">
                                                    <button  class="btn w-100 btn-alt-primary" id="signin-button" type="submit" @click="handleLogin">
                                                        <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign In Block -->
                        </div>
                    </div>
                    <div class="fs-sm text-muted text-center">
                        <strong>Created by FGC Techlution</strong> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
</template>
<script>
import Skeleton from "../../base/skeleton/Skeleton.vue";
export default {
    components:{
        Skeleton
    },
    data() {
        return {
            user: {
                name: "",
                password: "",
            },
            isLoading:false
        };
    },
    methods :{
        /**
         * Author:HieuVX - Created Date: 27/01/2024
         */
        handleLogin() {
            this.isLoading=true;
            setTimeout(() => {
                this.isLoading= false;
            }, 3000);
            this.$store.dispatch('auth/loginUser', this.user);
        },
    }
}
</script>
