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
                            <button type="button" class="btn w-100" :class="{ 'btn-theme' :tab === 'details', 'btn-outline-theme' : tab !== 'details' }" @click="tab = 'details'">
                                Details
                            </button>
                        </div>

                        <!-- button of edit profile -->
                        <div class="p-2">
                            <button type="button" class="btn w-100" :class="{ 'btn-theme' : tab === 'edit-profile', 'btn-outline-theme' : tab !== 'edit-profile' }" @click="tab = 'edit-profile'">
                                Edit Profile
                            </button>
                        </div>

                        <!-- button of change password -->
                        <div class="p-2">
                            <button type="button" class="btn w-100" :class="{ 'btn-theme' : tab === 'change-password', 'btn-outline-theme' : tab !== 'change-password' }" @click="tab = 'change-password'">
                                Change Password
                            </button>
                        </div>

                    </div>

                    <!-- Profile details -->
                    <div class="w-100 mt-5" v-if="tab === 'details'">
                        <div class="d-flex justify-content-center mb-3">
                            <img :src="profileData?.avatar" class="img-fluid rounded-circle object-fit-cover" style="width: 200px; height: 200px" alt="avatar">
                        </div>
                        <div class="mb-3">
                            <div class="fs-6 fw-bold"> Full Name </div>
                            <div class="fs-6 text-secondary"> {{profileData?.name}} </div>
                        </div>
                        <div class="mb-3">
                            <div class="fs-6 fw-bold"> Email </div>
                            <div class="fs-6 text-secondary"> {{profileData?.email}} </div>
                        </div>
                        <div class="mb-3">
                            <div class="fs-6 fw-bold"> Phone Number </div>
                            <div class="fs-6 text-secondary"> {{profileData?.phone}} </div>
                        </div>
                        <div>
                            <div class="fs-6 fw-bold"> Present Address </div>
                            <div class="fs-6 text-secondary"> {{profileData?.address}} </div>
                        </div>
                    </div>

                    <!-- Profile edit form -->
                    <form class="w-100 mt-5" v-if="tab === 'edit-profile'">
                        <div class="d-flex justify-content-center align-items-center flex-column text-start">
                            <div class="form-group mb-3">
                                <div class="position-relative">
                                    <label for="file-upload" class="form-label rounded-circle bg-opacity-theme d-flex justify-content-center align-items-center" style="width: 200px; height:200px; cursor: pointer;">
                                        <input id="file-upload" type="file" name="avatar" hidden="hidden">
                                        <i class="bi bi-plus fs-1 text-theme"></i>
                                    </label>
                                    <div class="position-absolute top-0 end-0 w-100 h-100 d-flex justify-content-center align-items-center invisible" style="width: 200px; height:200px;">
                                        <button type="button" class="btn btn-theme rounded-circle" style="width:45px; height:45px;">
                                            <i class="bi bi-trash2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-name" class="form-label"> Full Name </label>
                            <input id="user-name" type="text" name="full-name" v-model="editProfileParam.name" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-email" class="form-label"> Email </label>
                            <input id="user-email" type="email" name="email" v-model="editProfileParam.email" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-phone-number" class="form-label"> Phone Number </label>
                            <input id="user-phone-number" type="text" name="phone-number" v-model="editProfileParam.phone" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-present-address" class="form-label"> Preset Address </label>
                            <input id="user-present-address" type="text" name="present-address" v-model="editProfileParam.address" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-theme" style="width: 150px;">
                            Update
                        </button>
                    </form>

                    <!-- Profile change password -->
                    <form class="w-100 mt-5" v-if="tab === 'change-password'">
                        <div class="form-group mb-3">
                            <label for="user-current-password" class="form-label"> Current Password </label>
                            <input id="user-current-password" type="password" name="current-password" v-model="changePasswordParam.current_password" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-password" class="form-label"> Password </label>
                            <input id="user-password" type="password" name="password" v-model="changePasswordParam.password" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-password-confirmation" class="form-label"> Password Confirmation </label>
                            <input id="user-password-confirmation" type="password" name="password-confirmation" v-model="changePasswordParam.password_confirmation" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-theme" style="width: 150px;">
                            Update
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>

</template>

<script>

export default {
    data(){
        return {
            // Data properties
            tab: 'details',
            profileData: {
                avatar: '/images/avatar.png',
                name: 'Mahi Bashar Akash',
                email: 'mahibashar2023@gmail.com',
                phone: '01400125289',
                address: 'Dhanmondi, Dhaka - 1209, Bangladesh',
            },
            editProfileParam: {
                avatar: null,
                name: '',
                email: '',
                phone: '',
            },
            changePasswordParam: {
                current_password: '',
                password: '',
                password_confirmation: '',
            }
        }
    },
    mounted() {  },
    methods: {  }
}

</script>
