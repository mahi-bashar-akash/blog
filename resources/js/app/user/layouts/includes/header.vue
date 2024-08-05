<template>

    <header class="header bg-body-tertiary">
        <nav class="navbar navbar-expand-lg p-3">
            <div class="container">
                <router-link :to="{name: 'home'}" class="navbar-brand">
                    <img :src="`/images/logo.png`" class="img-fluid" width="40" alt="logo">
                    <span class="text-gradient ms-1 fw-bold"> Npvider </span>
                </router-link>
                <button class="navbar-toggler" type="button" @click="collapse()">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item text-end d-inline-block d-lg-none">
                            <button type="button" class="btn btn-close border-0 p-3 icon-close" @click="collapse()"></button>
                        </li>
                        <li class="nav-item d-none d-lg-inline" v-if="this.userInfo === null">
                            <router-link :to="{name: 'login'}" class="btn btn-theme py-2 px-4" @click="collapse()">
                                Login
                            </router-link>
                        </li>
                        <li class="nav-item d-lg-none" v-if="this.userInfo === null">
                            <router-link :to="{name: 'login'}" class="nav-link" @click="collapse()">
                                Login
                            </router-link>
                        </li>
                        <li class="nav-item dropdown" v-if="this.userInfo !== null">
                            <a class="nav-link p-0" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="rounded-circle bg-theme text-white d-flex justify-content-center align-items-center" style="width:45px; height:45px;">
                                    {{nameControl(this.userInfo?.name)}}
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <router-link :to="{name: 'userDetails'}" class="dropdown-item mb-1" @click="collapse()">
                                        Profile
                                    </router-link>
                                </li>
                                <li>
                                    <router-link :to="{name: 'userBlogManagement'}" class="dropdown-item mb-1" @click="collapse()">
                                        Blog management
                                    </router-link>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item" v-if="!profileLogoutLoading" @click="profileLogout();collapse()">
                                        Logout
                                    </button>
                                    <button type="button" class="dropdown-item" disabled v-if="profileLogoutLoading">
                                        <span class="spinner-border d-inline-block width-17 height-17" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

</template>

<script>
import apiRoutes from "@/app/api/apiRoutes.js";
import apiServices from '@/app/api/apiServices.js'
import axios from "axios";

import {createToaster} from "@meforma/vue-toaster";
const toaster = createToaster({
    position: 'top-right',
});

export default {
    data(){
        return {
            tab: 'edit-profile',
            profileName: 'Mahi Bashar Akash',
            userInfo: window.core.UserInfo,
            profileLogoutLoading: false,
        }
    },
    mounted() {

        this.scrollEffect();

    },
    methods: {

        // collapse navbar
        collapse() {
            if (window.innerWidth < 991) {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                } else {
                    navbarCollapse.classList.add('show');
                }
            }
        },

        // navbar scrolling effect
        scrollEffect(){
            window.addEventListener('scroll', (e) => {
                const nav = document.querySelector('.header');
                if (window.pageYOffset > 0) {
                    nav.classList.add("animated-shadow");
                } else {
                    nav.classList.remove("animated-shadow");
                }
            });
        },

        // Function of name control
        nameControl(fullName) {
            let words = fullName.split(' ');
            let outPut = ` ${words[0][0].toUpperCase()}${ words[words.length - 1][0].toUpperCase()}`;
            return outPut;
        },

        profileLogout() {
            this.profileLogoutLoading = false;
            axios.get(apiRoutes.logout, '', { headers: apiServices.headerContent }).then((response) => {
                this.profileLogoutLoading = false;
                toaster.info(response?.data?.message);
                window.location.reload();
            }).catch(err => {
                this.profileLogoutLoading = false;
                let res = err.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.error = res?.data?.errors;
                } else {
                    toaster.error('Server error!');
                }
            });
        },

    }
}

</script>
