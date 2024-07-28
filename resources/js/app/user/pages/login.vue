<template>

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
            <form class="w-100 p-5 shadow bg-white">
                <div class="h4 fw-bold">
                    Welcome to Zento ! 👋🏻
                </div>
                <div class="text-secondary mb-3">
                    Please sign-in to your account and start the adventure
                </div>
                <div class="form-group mb-3">
                    <label for="user-email" class="form-label">Email</label>
                    <input id="user-email" type="email" name="email" class="form-control shadow-none" required autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <label for="user-password" class="form-label">Password</label>
                    <input id="user-password" type="password" name="password" class="form-control shadow-none" required autocomplete="off">
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <label for="remember-me">
                        <input id="remember-me" type="checkbox" class="form-checkbox">
                        Remember me
                    </label>
                    <router-link :to="{name: 'forgot'}" class="text-decoration-none text-danger">
                        Forgot password
                    </router-link>
                </div>
                <button type="submit" class="btn btn-theme" style="width: 100px;">
                    Login
                </button>
            </form>
        </div>
    </div>

</template>

<script>

export default {
    data() {
        return {}
    },
    mounted() {
    },
    methods: {
    }
}

</script>
