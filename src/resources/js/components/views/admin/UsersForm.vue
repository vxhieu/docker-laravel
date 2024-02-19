<template>
    <div class="user-wrap">
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Block Form</h3>
                    <div class="block-options">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-sm btn-alt-primary">
                            Reset
                        </button>
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Close" @click="this.$emit('closeForm')">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row justify-content-center py-sm-3 py-md-5">
                        <div class="col-sm-10 col-md-8">
                            <div class="mb-4">
                                <label class="form-label" for="block-form1-username">Username</label>
                                <input type="text" class="form-control form-control-alt" id="block-form1-username"
                                       v-model="this.userEdit.username"
                                       name="block-form1-username" placeholder="Enter your username..">
                                {{this.userEdit.userRoles[0]}}
                            </div>
<!--                            <div class="mb-4">-->
<!--                                <label class="form-label" for="block-form1-password">Password</label>-->
<!--                                <input type="password" class="form-control form-control-alt"-->
<!--                                       id="block-form1-password" name="block-form1-password"-->
<!--                                       placeholder="Enter your password..">-->
<!--                            </div>-->
                            <div class="mb-4">
                                <label class="form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="val-email" name="val-email"
                                       v-model="this.userEdit.email"
                                       placeholder="Your valid email..">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" >Roles <span class="text-danger">*</span></label>
                                <select class="form-select" v-model="userEdit.userRoles[0]" name="roles">
                                    <option v-for="role in this.userData.roleList" :key="role" :value="role">{{ role }}</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                           id="block-form1-remember-me" name="block-form1-remember-me">
                                    <label class="form-check-label" for="block-form1-remember-me">Remember
                                        Me?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{this.userData}}
</template>
<script>
export default {
    props: {
        userEdit: {},
    },
    data() {
        return {
            userData: {
                userInfo: this.userEdit.user,
                roleList: this.userEdit.roles,
                userRoles: this.userEdit.userRoles
            }
        };
    },
    mounted() {
        console.log("watch", this.userEdit);
    }
};
</script>

<UsersForm
    v-if="isShow"
    @closeForm="closeForm"
    :userEdit="userEdit"
/>
<style scoped>
.user-wrap{
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
