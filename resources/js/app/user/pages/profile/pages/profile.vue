<template>

    <section class="w-100 py-5">
        <nav
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link :to="{name: 'home'}" class="text-decoration-none text-dark">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Home
                    </router-link>
                </li>
                <li class="breadcrumb-item">
                    <router-link :to="{name: 'userDetails'}" class="text-decoration-none text-dark">
                        User Details
                    </router-link>
                </li>
            </ol>
        </nav>
    </section>

    <section class="w-100 py-5">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-md-8">
                <div class="w-100 shadow bg-white p-5">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                        <button type="button" class="btn me-3" :class="{ 'btn-theme' : tab === 'edit-profile', 'btn-outline-theme' : tab !== 'edit-profile' }" @click="tab = 'edit-profile'">
                            Edit Profile
                        </button>
                        <button type="button" class="btn" :class="{ 'btn-theme' : tab === 'change-password', 'btn-outline-theme' : tab !== 'change-password' }" @click="tab = 'change-password'">
                            Change Password
                        </button>
                    </div>
                    <form class="w-100" v-if="tab === 'edit-profile'">
                        <div class="d-flex justify-content-center">
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
                            <input id="user-name" type="text" name="full-name" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-email" class="form-label"> Email </label>
                            <input id="user-email" type="email" name="email" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-phone-number" class="form-label"> Phone Number </label>
                            <input id="user-phone-number" type="text" name="phone-number" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-present-address" class="form-label"> Preset Address </label>
                            <input id="user-present-address" type="text" name="present-address" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-theme" style="width: 150px;">
                            Update
                        </button>
                    </form>
                    <form class="w-100" v-if="tab === 'change-password'">
                        <div class="form-group mb-3">
                            <label for="user-current-password" class="form-label"> Current Password </label>
                            <input id="user-current-password" type="password" name="current-password" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-password" class="form-label"> Password </label>
                            <input id="user-password" type="password" name="password" class="form-control shadow-none" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user-password-confirmation" class="form-label"> Password Confirmation </label>
                            <input id="user-password-confirmation" type="password" name="password-confirmation" class="form-control shadow-none" required autocomplete="off">
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
            tab: 'edit-profile',
        }
    },
    mounted() {
    },
    methods: {

    }
}

</script>
