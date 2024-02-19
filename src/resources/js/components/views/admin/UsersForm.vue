<template>
    <div class="user-wrap">
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Block Form</h3>
                    <div class="block-options">
                        <button type="submit" class="btn btn-sm btn-primary" @click="handleUpdateUser">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-sm btn-alt-primary">
                            Reset
                        </button>
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip"
                                title="Close" @click="$emit('closeForm')">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row justify-content-center py-sm-3 py-md-5">
                        <div class="col-sm-10 col-md-8">
                            <div class="mb-4">
                                <label class="form-label" for="block-form1-username">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-alt" id="block-form1-username"
                                       v-model="userData.user.username" name="block-form1-username"
                                       placeholder="Enter your username..">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="val-email">Email <span
                                    class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="val-email" name="val-email"
                                       v-model="userData.user.email" placeholder="Your valid email..">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Roles <span class="text-danger">*</span></label>
                                <select class="form-select" v-model="userData.userRoles[0]" name="roles">
                                    <option v-for="role in userData.roles" :key="role" :value="role">{{
                                            role
                                        }}
                                    </option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                           id="block-form1-remember-me" name="block-form1-remember-me">
                                    <label class="form-check-label" for="block-form1-remember-me">Remember Me?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: {
        userEdit: {
            type: Object,
            default: () => ({}),
        },
        editing: {
            type: Boolean,
            default: false,
        },
    },
    data() {
        return {
            userData: {
                user: {
                    id: "",
                    username: "",
                    email: "",
                },
                roles: [],
                userRoles: [],
            },
        };
    },
    watch: {
        userEdit: {
            handler(newValue) {
                this.updateUserData(newValue);
            },
            immediate: true,
        },
    },
    methods: {
        /** Update data form edit */
        updateUserData(userEdit) {
            this.userData.user.id = userEdit.user?.id || "";
            this.userData.user.username = userEdit.user?.username || "";
            this.userData.user.email = userEdit.user?.email || "";
            this.userData.roles = userEdit.roles || [];
            this.userData.userRoles = userEdit.userRoles || [];
        },
        /** */
        handleUpdateUser() {
            try {
                const {id, username, email} = this.userData.user;
                const roles = [{name: this.userData.userRoles[0]}];

                axios.patch(`/api/users/${id}`, {username, email, roles}).then(() => {
                    this.$emit("closeForm");
                });
            } catch (error) {
                console.log("Error update", error);
            }
        },
    },
    mounted() {
        if (!this.editing) {
            this.userData = {
                user: {
                    id: "",
                    username: "",
                    email: "",
                },
                roles: [],
                userRoles: [],
            };
        }
    }
};
</script>

<style scoped>
.user-wrap {
    height: 100vh;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10;
    justify-content: center;
    display: flex;
    align-items: center;
}
</style>

<style scoped>
.user-wrap {
    height: 100vh;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10;
    justify-content: center;
    display: flex;
    align-items: center;
}
</style>
