<template>

    <!-- Breadcrumb -->
    <section class="w-100 py-5">
        <nav
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link :to="{name: 'home'}" class="text-decoration-none text-theme">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Home
                    </router-link>
                </li>
                <li class="breadcrumb-item">
                    <router-link :to="{name: 'login'}" class="text-decoration-none text-theme">
                        Login
                    </router-link>
                </li>
                <li class="breadcrumb-item">
                    <router-link :to="{name: 'forgot'}" class="text-decoration-none text-theme">
                        Account Recovery
                    </router-link>
                </li>
            </ol>
        </nav>
    </section>

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">

            <!-- Forget password form -->
            <form @submit.prevent="forgot()" class="w-100 p-5 shadow bg-white" v-if="tab === 'forgot'">

                <!-- Title -->
                <div class="h4 fw-bold">
                    Forgot Password? 🔒
                </div>

                <!-- Description -->
                <div class="text-secondary mb-3">
                    Enter your email and we'll send you instructions to reset your password
                </div>

                <!-- Email input field -->
                <div class="form-group mb-3">
                    <label for="forgot-email" class="form-label">Email</label>
                    <input id="forgot-email" type="email" name="email" class="form-control shadow-none"
                           autocomplete="off" v-model="forgotParam.email">
                    <div class="error-report" v-if="error != null && error.email !== undefined"> {{error.email[0]}} </div>
                </div>

                <!-- Action button -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-theme width-100" v-if="!forgotLoading">
                        Forgot
                    </button>
                    <button type="button" class="btn btn-theme width-100 btn-loading d-flex justify-content-center align-items-center" v-if="forgotLoading">
                        <span class="spinner-border d-inline-block width-17 height-17" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </span>
                    </button>
                </div>

                <!-- Login route -->
                <div class="text-end">
                    <router-link :to="{name: 'login'}" class="text-decoration-none text-theme-secondary">
                        <i class="bi bi-caret-left-fill"></i> Back to login
                    </router-link>
                </div>

            </form>

            <!-- Reset password form -->
            <form @submit.prevent="reset()" class="w-100 p-5 shadow bg-white" v-if="tab === 'reset'">

                <!-- Title -->
                <div class="h4 fw-bold">
                    Reset Password 🔒
                </div>

                <!-- Description -->
                <div class="text-secondary mb-3">
                    Enter your email and we'll send you instructions to reset your password
                </div>

                <!-- Email input field -->
                <div class="form-group mb-3">
                    <label for="reset-email" class="form-label">Email</label>
                    <input id="reset-email" type="email" name="email" class="form-control shadow-none"
                           v-model="resetParam.email" autocomplete="off">
                    <div class="error-report" v-if="error != null && error.email !== undefined"> {{error.email[0]}} </div>
                </div>

                <!-- Code input field -->
                <div class="form-group mb-3">
                    <label for="reset-code" class="form-label">Code</label>
                    <input id="reset-code" type="text" name="code" class="form-control shadow-none"
                           v-model="resetParam.code" autocomplete="off">
                    <div class="error-report" v-if="error != null && error.email !== undefined"> {{error.email[0]}} </div>
                </div>

                <!-- Password input field -->
                <div class="form-group mb-3">
                    <label for="reset-password" class="form-label">Password</label>
                    <div class="position-relative">
                        <input id="reset-password" :type="passwordFieldType" name="password" class="form-control shadow-none"
                               v-model="resetParam.password" autocomplete="off">
                        <span class="position-absolute top-50 end-0 translate-middle-y pe-2">
                            <button type="button" class="shadow-none rounded-0 p-0 m-0 border-0" @click="passwordVisibility">
                                <span v-if="passwordFieldType === 'text'">
                                    <i class="bi bi-eye"></i>
                                </span>
                                <span v-if="passwordFieldType === 'password'">
                                    <i class="bi bi-eye-slash"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="error-report" v-if="error != null && error.email !== undefined"> {{error.email[0]}} </div>
                </div>

                <!-- Password confirmation input field -->
                <div class="form-group mb-3">
                    <label for="reset-password-confirmation" class="form-label">Confirm password</label>
                    <div class="position-relative">
                        <input id="reset-password-confirmation" :type="passwordConfirmationFieldType" name="password" class="form-control shadow-none"
                               v-model="resetParam.password_confirmation" autocomplete="off">
                        <span class="position-absolute top-50 end-0 translate-middle-y pe-2">
                            <button type="button" class="shadow-none rounded-0 p-0 m-0 border-0" @click="passwordConfirmationVisibility">
                                <span v-if="passwordConfirmationFieldType === 'text'">
                                    <i class="bi bi-eye"></i>
                                </span>
                                <span v-if="passwordConfirmationFieldType === 'password'">
                                    <i class="bi bi-eye-slash"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="error-report" v-if="error != null && error.email !== undefined"> {{error.email[0]}} </div>
                </div>

                <!-- Action button -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-theme width-100" v-if="!resetLoading">
                        Reset
                    </button>
                    <button type="button" class="btn btn-theme width-100 btn-loading d-flex justify-content-center align-items-center" v-if="resetLoading">
                        <span class="spinner-border d-inline-block width-17 height-17" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </span>
                    </button>
                </div>

                <!-- Login route -->
                <router-link :to="{name: 'login'}" class="text-decoration-none text-theme-secondary">
                    Back to login
                </router-link>

            </form>

        </div>
    </div>

</template>

<script>
import apiRoutes from '../../api/apiRoutes.js'
import apiServices from '../../api/apiServices.js'
import axios from "axios";

import {createToaster} from "@meforma/vue-toaster";
const toaster = createToaster({
    position: 'top-right',
});

export default {
    data() {
        return {
            // Data properties
            tab: 'forgot',
            forgotParam: {
                email: '',
            },
            resetParam: {
                email: '',
                code: '',
                password: '',
                password_confirmation: '',
            },
            password: '',
            passwordFieldType: 'password',
            passwordConfirmation: '',
            passwordConfirmationFieldType: 'password',
            forgotLoading: false,
            resetLoading: false,
            error: null,
        }
    },
    mounted() {  },
    methods: {

        // Function of password visibility
        passwordVisibility() {
            this.passwordFieldType = this.passwordFieldType === "password" ? "text" : "password";
        },

        // Function of password confirmation visibility
        passwordConfirmationVisibility() {
            this.passwordConfirmationFieldType = this.passwordConfirmationFieldType === "password" ? "text" : "password";
        },

        // Function of forgot api callback
        forgot() {
            apiServices.clearErrorHandler()
            this.forgotLoading = true;
            axios.post(apiRoutes.register, this.forgotParam, { headers: apiServices.headerContent }).then((response) => {
                if(response?.data?.status === 200) {
                    this.forgotLoading = false;
                    toaster.info(response?.message);
                    this.tab = 'reset';
                }else{
                    this.error = response?.data?.errors;
                }
            }).catch(err => {
                this.forgotLoading = false;
                let res = err.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.error = res?.data?.errors.error;
                } else {
                    toaster.error('Server error!');
                }
            });
        },

        // Function of reset api callback
        reset() {
            apiServices.clearErrorHandler()
            this.resetLoading = true;
            axios.post(apiRoutes.register, this.resetParam, { headers: apiServices.headerContent }).then((response) => {
                if(response?.data?.status === 200) {
                    this.resetLoading = false;
                    toaster.info(response?.message);
                    this.$router.push({name: 'login'});
                }else{
                    this.error = response?.data?.errors;
                }
            }).catch(err => {
                this.resetLoading = false;
                let res = err.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.error = res?.data?.errors.error;
                } else {
                    toaster.error('Server error!');
                }
            });
        },

    }
}

</script>
