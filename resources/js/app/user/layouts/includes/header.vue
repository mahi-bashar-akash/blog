<template>

    <header class="header bg-body-tertiary">
        <nav class="navbar navbar-expand-lg p-3">
            <div class="container">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img :src="`/images/logo.png`" class="img-fluid width-120" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" @click="collapse()">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mahi Bashar Akash
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item mb-1" href="javascript:void(0)" @click="collapse()">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item mb-1" @click="collapse();openProfileSettingsModal()">
                                        Settings
                                    </button>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0)" @click="collapse()">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- modal -->
    <div class="modal fade" id="profileSettings" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content rounded-3 border-0 p-2" v-if="tab === 'edit-profile'">
                <div class="modal-header border-0 d-flex justify-content-between align-items-center">
                    <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">
                        Edit Profile
                    </h1>
                    <button type="button" class="btn btn-theme py-2 px-3 badge" @click="tab = 'change-password'" v-if="tab === 'edit-profile'">
                        Change Password
                    </button>
                </div>
                <div class="modal-body border-0">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <input id="name" type="text" name="name"
                               class="form-control p-3 border shadow-none rounded-3" required
                               autoComplete="new-name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="username" class="form-label fw-semibold">Username</label>
                        <input id="username" type="text" name="username"
                               class="form-control p-3 border shadow-none rounded-3" required
                               autoComplete="new-username">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input id="email" type="text" name="email"
                               class="form-control p-3 border shadow-none rounded-3" required
                               autoComplete="new-email">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary py-2 width-95 rounded-3" @click="closeProfileSettingsModal()">
                        Close
                    </button>
                    <button type="submit" class="btn btn-theme py-2 width-95 rounded-3">
                        Update
                    </button>
                </div>
            </form>
            <form class="modal-content rounded-3 border-0 p-4" v-if="tab === 'change-password'">
                <div class="modal-header border-0 d-flex justify-content-between align-items-center">
                    <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">
                        Change Password
                    </h1>
                    <button type="button" class="btn btn-theme py-2 px-3 badge" @click="tab = 'edit-profile'" v-if="tab === 'change-password'">
                        Edit Profile
                    </button>
                </div>
                <div class="modal-body border-0">
                    <div class="form-group mb-3">
                        <label for="current_password" class="form-label fw-semibold">Current Password</label>
                        <input id="current_password" type="password" name="current_password"
                               class="form-control p-3 border shadow-none rounded-3" required
                               autoComplete="new-current-password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input id="password" type="password" name="password"
                               class="form-control p-3 border shadow-none rounded-3" required
                               autoComplete="new-password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_confirmation" class="form-label fw-semibold">Email</label>
                        <input id="password_confirmation" type="password" name="password_confirmation"
                               class="form-control p-3 border shadow-none rounded-3" required
                               autoComplete="new-password-confirmation">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary py-2 width-95 rounded-3" @click="closeProfileSettingsModal()">
                        Close
                    </button>
                    <button type="submit" class="btn btn-theme py-2 width-95 rounded-3">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

</template>

<script>

export default {
    data(){
        return {
            tab: 'edit-profile',
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

        // open manage model
        openProfileSettingsModal() {
            const myModal = new bootstrap.Modal("#profileSettings", {keyboard: false});
            myModal.show();
        },

        // close manage modal
        closeProfileSettingsModal() {
            let myModalEl = document.getElementById('profileSettings');
            let modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        },

    }
}

</script>
