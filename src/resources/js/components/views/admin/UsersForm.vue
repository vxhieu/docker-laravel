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
                                       name="block-form1-username" placeholder="Enter your username..">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="block-form1-password">Password</label>
                                <input type="password" class="form-control form-control-alt"
                                       id="block-form1-password" name="block-form1-password"
                                       placeholder="Enter your password..">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="val-select2-multiple">Select2 Multiple <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select" id="val-select2-multiple" name="val-select2-multiple" style="width: 100%;" data-placeholder="Choose at least two.." multiple>
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="react">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
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
</template>
<script setup>
</script>
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
