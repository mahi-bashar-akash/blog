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
                    <router-link :to="{name: 'registration'}" class="text-decoration-none text-theme">
                        Registration
                    </router-link>
                </li>
            </ol>
        </nav>
    </section>

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">

            <!-- Registration form -->
            <form @submit.prevent="registration()" class="w-100 p-5 shadow bg-white">

                <!-- Title -->
                <div class="h4 fw-bold">
                    Adventure starts here 🚀
                </div>

                <!-- Description -->
                <div class="text-secondary mb-3">
                    Please sign-up to your account
                </div>

                <!-- Email input field -->
                <div class="form-group mb-3">
                    <label for="registration-name" class="form-label">Full name</label>
                    <input id="registration-name" type="text" name="name" class="form-control shadow-none"
                           v-model="registrationParam.name" autocomplete="off">
                    <div class="error-report" v-if="error != null && error.name !== undefined"> {{error.name[0]}} </div>
                </div>

                <!-- Email input field -->
                <div class="form-group mb-3">
                    <label for="registration-email" class="form-label">Email</label>
                    <input id="registration-email" type="email" name="email" class="form-control shadow-none"
                           v-model="registrationParam.email" autocomplete="off">
                    <div class="error-report" v-if="error != null && error.email !== undefined"> {{error.email[0]}} </div>
                </div>

                <!-- Password input field -->
                <div class="form-group mb-3">
                    <label for="registration-password" class="form-label">Password</label>
                    <div class="position-relative">
                        <input id="registration-password" :type="passwordFieldType" name="password" class="form-control shadow-none"
                               v-model="registrationParam.password" autocomplete="off">
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
                    <div class="error-report" v-if="error != null && error.password !== undefined"> {{error.password[0]}} </div>
                </div>

                <!-- Password confirmation input field -->
                <div class="form-group mb-3">
                    <label for="registration-password-confirmation" class="form-label">Confirm password</label>
                    <div class="position-relative">
                        <input id="registration-password-confirmation" :type="passwordConfirmationFieldType" name="password-confirmation" class="form-control shadow-none"
                               v-model="registrationParam.password_confirmation" autocomplete="off">
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
                    <div class="error-report" v-if="error != null && error.password_confirmation !== undefined"> {{error.password_confirmation[0]}} </div>
                </div>

                <div class="mb-3">
                    <!-- Action button -->
                    <button type="submit" class="btn btn-theme width-150">
                        Registration
                    </button>
                </div>

                <!-- Login route -->
                <div class="text-center">
                    Already have an account?
                    <router-link :to="{name: 'login'}" class="text-theme-secondary">
                        Sign in instead
                    </router-link>
                </div>

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
            registrationParam: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            },
            password: '',
            passwordFieldType: 'password',
            passwordConfirmation: '',
            passwordConfirmationFieldType: 'password',
            loading: false,
            error: null,
        }
    },
    mounted() {

    },
    methods: {

        // Function of password visibility
        passwordVisibility() {
            this.passwordFieldType = this.passwordFieldType === "password" ? "text" : "password";
        },

        // Function of password confirmation visibility
        passwordConfirmationVisibility() {
            this.passwordConfirmationFieldType = this.passwordConfirmationFieldType === "password" ? "text" : "password";
        },

        // Function of registration api callback
        registration() {
            this.loading = true;
            axios.post(apiRoutes.register, this.registrationParam, { headers: apiServices.headerContent }).then((response) => {
                if(response?.data?.status === 200) {
                    this.loading = false;
                    toaster.info(response?.message);
                    this.$router.push({name: 'login'});
                }else{
                    this.error = response?.data?.errors
                }
            }).catch(err => {
                this.loading = false;
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
