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
                    <router-link :to="{name: 'userDetails'}" class="text-decoration-none text-theme">
                        User Details
                    </router-link>
                </li>
            </ol>
        </nav>
    </section>

    <!-- Card -->
    <section class="w-100 py-5">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-xl-7">
                <div class="w-100 shadow bg-white p-4 p-md-5 rounded-4">

                    <!-- Group of button -->
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">

                        <!-- button of details -->
                        <div class="p-2">
                            <button type="button" class="btn w-100"
                                    :class="{ 'btn-theme' :tab === 'details', 'btn-outline-theme' : tab !== 'details' }"
                                    @click="setTabChange('details')">
                                Details
                            </button>
                        </div>

                        <!-- button of edit profile -->
                        <div class="p-2">
                            <button type="button" class="btn w-100"
                                    :class="{ 'btn-theme' : tab === 'edit-profile', 'btn-outline-theme' : tab !== 'edit-profile' }"
                                    @click="setTabChange('edit-profile')">
                                Edit Profile
                            </button>
                        </div>

                        <!-- button of change password -->
                        <div class="p-2">
                            <button type="button" class="btn w-100"
                                    :class="{ 'btn-theme' : tab === 'change-password', 'btn-outline-theme' : tab !== 'change-password' }"
                                    @click="setTabChange('change-password')">
                                Change Password
                            </button>
                        </div>

                    </div>

                    <!-- Profile details -->
                    <div class="w-100 mt-5" v-if="tab === 'details'">
                        <div class="d-flex justify-content-center mb-3">
                            <img :src="profileData?.avatar" v-if="this.profileData?.avatar !== null"
                                 class="img-fluid rounded-circle object-fit-cover width-200 height-200" alt="avatar">
                            <div
                                class="width-200 height-200 bg-theme text-white rounded-circle d-flex justify-content-center align-items-center fs-1"
                                v-if="this.profileData?.avatar === null">
                                {{ nameControl(this.userInfo?.name) }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="fs-6 fw-bold"> Name</div>
                            <div class="fs-6 text-secondary"> {{ profileData?.name }}</div>
                        </div>
                        <div class="mb-3">
                            <div class="fs-6 fw-bold"> Email</div>
                            <div class="fs-6 text-secondary"> {{ profileData?.email }}</div>
                        </div>
                        <div>
                            <div class="fs-6 fw-bold"> Phone Number</div>
                            <div class="fs-6 text-secondary"> {{ profileData?.phone }}</div>
                        </div>
                    </div>

                    <!-- Profile edit form -->
                    <form @submit.prevent="updateProfile()" class="w-100 mt-5" v-if="tab === 'edit-profile'">
                        <div class="d-flex justify-content-center align-items-center flex-column text-start">
                            <div class="mb-3" v-if="editProfileParam.avatar !== null">
                                <div class="position-relative overflow-hidden">
                                    <img :src="editProfileParam.avatar"
                                         class="width-200 height-200 rounded-circle img-fluid object-fit-cover"
                                         alt="profile avatar">
                                    <div
                                        class="position-absolute top-0 end-0 w-100 h-100 d-flex justify-content-center align-items-end pb-2">
                                        <button type="button" class="btn btn-theme rounded-circle"
                                                style="width:45px; height:45px;" @click="deleteFile()">
                                            <i class="bi bi-trash2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3" v-if="editProfileParam.avatar === null">
                                <div class="position-relative">
                                    <label for="file-upload"
                                           class="form-label rounded-circle bg-opacity-theme d-flex justify-content-center align-items-center"
                                           style="width: 200px; height:200px; cursor: pointer;">
                                        <input id="file-upload" type="file" name="avatar" hidden="hidden"
                                               @change="attachAvatar($event)">
                                        <i class="bi bi-plus fs-1 text-theme"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user-name" class="form-label"> Full Name </label>
                                    <input id="user-name" type="text" name="full-name" v-model="editProfileParam.name"
                                           class="form-control shadow-none" autocomplete="off">
                                    <div class="error-report" v-if="error != null && error.name !== undefined">
                                        {{ error.name[0] }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user-email" class="form-label"> Email </label>
                                    <input id="user-email" type="email" name="email" v-model="editProfileParam.email"
                                           class="form-control shadow-none" autocomplete="off">
                                    <div class="error-report" v-if="error != null && error.email !== undefined">
                                        {{ error.email[0] }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user-phone-number" class="form-label"> Phone Number </label>
                                    <input id="user-phone-number" type="text" name="phone"
                                           v-model="editProfileParam.phone" class="form-control shadow-none"
                                           autocomplete="off">
                                    <div class="error-report" v-if="error != null && error.phone !== undefined">
                                        {{ error.phone[0] }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user-facebook-link" class="form-label"> Facebook Link </label>
                                    <input id="user-facebook-link" type="url" name="facebook_link"
                                           v-model="editProfileParam.facebook_link" class="form-control shadow-none"
                                           placeholder="https://www.facebook.com" autocomplete="off">
                                    <div class="error-report" v-if="error != null && error.facebook_link !== undefined">
                                        {{ error.facebook_link[0] }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user-twitter-link" class="form-label"> Twitter Link </label>
                                    <input id="user-twitter-link" type="url" name="twitter_link"
                                           v-model="editProfileParam.twitter_link" class="form-control shadow-none"
                                           placeholder="https://www.twitter.com" autocomplete="off">
                                    <div class="error-report" v-if="error != null && error.twitter_link !== undefined">
                                        {{ error.twitter_link[0] }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user-instagram-link" class="form-label"> Instagram Link </label>
                                    <input id="user-instagram-link" type="url" name="instagram_link"
                                           v-model="editProfileParam.instagram_link" class="form-control shadow-none"
                                           placeholder="https://www.instagram.com" autocomplete="off">
                                    <div class="error-report"
                                         v-if="error != null && error.instagram_link !== undefined">
                                        {{ error.instagram_link[0] }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user-linkedin-link" class="form-label"> Linkedin Link </label>
                                    <input id="user-linkedin-link" type="url" name="linkedin_link"
                                           v-model="editProfileParam.linkedin_link" class="form-control shadow-none"
                                           placeholder="https://www.linkedin.com" autocomplete="off">
                                    <div class="error-report" v-if="error != null && error.linkedin_link !== undefined">
                                        {{ error.linkedin_link[0] }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user-youtube-link" class="form-label"> Youtube Link </label>
                                    <input id="user-youtube-link" type="url" name="youtube_link"
                                           v-model="editProfileParam.youtube_link" class="form-control shadow-none"
                                           placeholder="https://www.youtube.com" autocomplete="off">
                                    <div class="error-report" v-if="error != null && error.youtube_link !== undefined">
                                        {{ error.youtube_link[0] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-theme width-150" v-if="!updateProfileLoading">
                            Update
                        </button>
                        <button type="button"
                                class="btn btn-theme width-150 btn-loading d-flex justify-content-center align-items-center"
                                v-if="updateProfileLoading">
                            <span class="spinner-border d-inline-block width-17 height-17" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </span>
                        </button>
                    </form>

                    <!-- Profile change password -->
                    <form @submit.prevent="changePassword()" class="w-100 mt-5" v-if="tab === 'change-password'">
                        <div class="form-group mb-3">
                            <label for="user-current-password" class="form-label"> Current Password </label>
                            <input id="user-current-password" type="password" name="current-password"
                                   v-model="changePasswordParam.current_password" class="form-control shadow-none"
                                   autocomplete="off">
                            <div class="error-report" v-if="error != null && error.current_password !== undefined">
                                {{ error.current_password[0] }}
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-password" class="form-label"> Password </label>
                            <input id="user-password" type="password" name="password"
                                   v-model="changePasswordParam.password" class="form-control shadow-none"
                                   autocomplete="off">
                            <div class="error-report" v-if="error != null && error.password !== undefined">
                                {{ error.password[0] }}
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-password-confirmation" class="form-label"> Password Confirmation </label>
                            <input id="user-password-confirmation" type="password" name="password-confirmation"
                                   v-model="changePasswordParam.password_confirmation" class="form-control shadow-none"
                                   autocomplete="off">
                            <div class="error-report" v-if="error != null && error.password_confirmation !== undefined">
                                {{ error.password_confirmation[0] }}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-theme width-150" v-if="!changePasswordLoading">
                            Update
                        </button>
                        <button type="button"
                                class="btn btn-theme width-150 btn-loading d-flex justify-content-center align-items-center"
                                v-if="changePasswordLoading">
                            <span class="spinner-border d-inline-block width-17 height-17" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>

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
    data() {
        return {
            // Data properties
            tab: 'details',
            profileData: {},
            editProfileParam: {
                avatar: null,
                name: '',
                email: '',
                phone: '',
                facebook_link: 'https://www.facebook.com/',
                twitter_link: 'https://www.twitter.com/',
                instagram_link: 'https://www.instagram.com/',
                linkedin_link: 'https://www.linkedin.com/',
                youtube_link: 'https://www.youtube.com/',
            },
            changePasswordParam: {
                current_password: '',
                password: '',
                password_confirmation: '',
            },
            profileLoading: false,
            updateProfileLoading: false,
            changePasswordLoading: false,
            uploadLoading: false,
            userInfo: window.core.UserInfo,
            error: null,
            uploadedImageId: null,
        }
    },
    mounted() {
        this.getProfile();
    },
    methods: {

        // Function of attach avatar
        attachAvatar($event) {
            this.uploadLoading = true;
            let file = event.target.files[0];
            let formData = new FormData();
            formData.append("file", file);
            formData.append("media_type", 1);
            formData.append("media_use", 1);
            axios.post(apiRoutes.fileUpload, formData, {headers: apiServices.mediaHeaderContent}).then((response) => {
                let res = response.data?.data;
                this.uploadLoading = false;
                event.target.value = '';
                this.uploadedImageId = res.id;
                this.editProfileParam.avatar = res.full_file_path;
                toaster.info('Upload file successfully');
            }).catch(err => {
                this.uploadLoading = false;
                let res = err?.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                } else {
                    toaster.error('Server error!')
                }
            })
        },

        // Function of delete file
        deleteFile() {
            this.uploadLoading = true;
            axios.delete(apiRoutes.fileDelete + `/${this.uploadedImageId}`, {headers: apiServices.mediaHeaderContent}).then((response) => {
                this.uploadLoading = false;
                this.editProfileParam.avatar = null;
                toaster.info('delete file successfully');
            }).catch(err => {
                this.uploadLoading = false;
                let res = err?.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                } else {
                    toaster.error('Server error!')
                }
            });
        },

        // set tab change
        setTabChange(tab) {
            this.tab = tab;
        },

        // Function of get profile data api callback
        getProfile() {
            this.profileLoading = false;
            axios.get(apiRoutes.profile, this.profileData, {headers: apiServices.headerContent}).then((response) => {
                this.profileLoading = false;
                this.profileData = response?.data?.data
                this.editProfileParam = this.profileData
            }).catch(err => {
                this.profileLoading = false;
                let res = err.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.error = res?.data?.errors;
                } else {
                    toaster.error('Server error!');
                }
            });
        },

        // Function of update profile data api callback
        updateProfile() {
            this.updateProfileLoading = false;
            axios.patch(apiRoutes.profileUpdate, this.editProfileParam, {headers: apiServices.headerContent}).then((response) => {
                this.updateProfileLoading = false;
                if (response?.data?.errors) {
                    this.error = response?.data?.errors
                } else {
                    this.tab = 'details';
                    toaster.info(response?.data?.message);
                }
            }).catch(err => {
                console.log(err?.response?.data?.errors)
                this.updateProfileLoading = false;
                let res = err?.response
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.error = res?.data?.errors;
                } else {
                    toaster.error('Server error!');
                }
            });
        },

        // Function of change password api callback
        changePassword() {
            this.changePasswordLoading = false;
            axios.patch(apiRoutes.changePassword, this.changePasswordParam, {headers: apiServices.headerContent}).then((response) => {
                this.changePasswordLoading = false;
                toaster.info(response?.data?.message);
                this.changePasswordParam = {
                    current_password: '',
                    password: '',
                    password_confirmation: '',
                };
                this.tab = 'details';
            }).catch(err => {
                this.changePasswordLoading = false;
                let res = err.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.error = res?.data?.errors;
                } else {
                    toaster.error('Server error!');
                }
            });
        },

        // Function of name control
        nameControl(fullName) {
            let words = fullName.split(' ');
            let outPut = ` ${words[0][0].toUpperCase()}${words[words.length - 1][0].toUpperCase()}`;
            return outPut;
        },

    }
}

</script>
