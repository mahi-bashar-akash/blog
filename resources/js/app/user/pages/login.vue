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
            </ol>
        </nav>
    </section>

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">

            <!-- Login form -->
            <form class="w-100 p-5 shadow bg-white">

                <!-- Title -->
                <div class="h4 fw-bold">
                    Welcome to Npvider ! 👋🏻
                </div>

                <!-- Description -->
                <div class="text-secondary mb-3">
                    Please sign-in to your account and start the adventure
                </div>

                <!-- Email input field -->
                <div class="form-group mb-3">
                    <label for="login-email" class="form-label">Email</label>
                    <input id="login-email" type="email" name="email" class="form-control shadow-none"
                           v-model="loginParam.email" required autocomplete="off">
                </div>

                <!-- Password input field -->
                <div class="form-group mb-3">
                    <label for="login-password" class="form-label">Password</label>
                    <div class="position-relative">
                        <input id="login-password" :type="passwordFieldType" name="password" class="form-control shadow-none"
                               v-model="loginParam.password" autocomplete="off">

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
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <!-- Remember me checkbox field -->
                    <label for="login-remember-me" class="form-label cursor-pointer">
                        <input id="login-remember-me" type="checkbox" class="form-checkbox" v-model="loginParam.remember_me">
                        Remember me
                    </label>

                    <!-- Forget route -->
                    <router-link :to="{name: 'forgot'}" class="text-decoration-none text-danger">
                        Forgot password
                    </router-link>

                </div>

                <!-- Action button -->
                <button type="submit" class="btn btn-theme width-100">
                    Login
                </button>

            </form>
        </div>
    </div>

</template>

<script>

export default {
    data() {
        return {
            // Data properties
            loginParam: {
                email: '',
                password: '',
                remember_me: '',
            },
            password: '',
            passwordFieldType: 'password',
        }
    },
    mounted() {
    },
    methods: {

        // Function of password visibility
        passwordVisibility() {
            this.passwordFieldType = this.passwordFieldType === "password" ? "text" : "password";
        },

    }
}

</script>
