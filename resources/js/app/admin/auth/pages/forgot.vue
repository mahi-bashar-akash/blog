<template>

    <form class="w-100" v-if="tab === 'forgot'">

        <!-- forgot title -->
        <div class="h4 fw-bold">
            Forgot Password? 🔒
        </div>

        <!-- forgot small description -->
        <div class="text-secondary mb-3">
            Enter your email and we'll send you instructions to reset your password
        </div>

        <!-- forgot email input field -->
        <div class="form-group mb-3">
            <label for="user-email" class="form-label">Email</label>
            <input id="user-email" type="email" name="email" class="form-control shadow-none" required
                   autocomplete="off">
        </div>

        <!-- forgot api call button -->
        <div class="mb-3">
            <button type="submit" class="btn btn-theme" style="width: 100px;" @click="tab = 'reset'">
                Forgot
            </button>
        </div>

        <!-- go route as login -->
        <div class="text-end">
            <router-link :to="{name: 'login'}" class="text-decoration-none text-theme-secondary">
                <i class="bi bi-caret-left-fill"></i> Back to login
            </router-link>
        </div>

    </form>

    <form class="w-100" v-if="tab === 'reset'">

        <!-- reset title -->
        <div class="h4 fw-bold">
            Reset Password 🔒
        </div>

        <!-- reset small description -->
        <div class="text-secondary mb-3">
            Enter your email and we'll send you instructions to reset your password
        </div>

        <!-- reset email input field -->
        <div class="form-group mb-3">
            <label for="user-email" class="form-label">Email</label>
            <input id="user-email" type="email" name="email" class="form-control shadow-none" required
                   autocomplete="off">
        </div>

        <!-- reset code input field -->
        <div class="form-group mb-3">
            <label for="user-code" class="form-label">Code</label>
            <input id="user-code" type="text" name="code" class="form-control shadow-none" required
                   autocomplete="off">
        </div>

        <!-- reset password input field -->
        <div class="form-group mb-3">
            <label for="user-password" class="form-label">Password</label>
            <input id="user-password" type="password" name="password" class="form-control shadow-none" required
                   autocomplete="off">
        </div>

        <!-- reset password confirmation input field -->
        <div class="form-group mb-3">
            <label for="user-password-confirmation" class="form-label">Confirm password</label>
            <input id="user-password-confirmation" type="text" name="password-confirmation" class="form-control shadow-none" required
                   autocomplete="off">
        </div>

        <!-- reset api call button -->
        <div class="mb-3">
            <button type="submit" class="btn btn-theme" style="width: 100px;">
                Reset
            </button>
        </div>

        <!-- go route as login -->
        <div class="text-end">
            <router-link :to="{name: 'login'}" class="text-decoration-none text-theme-secondary">
                <i class="bi bi-caret-left-fill"></i> Back to login
            </router-link>
        </div>

    </form>

</template>

<script>

export default {
    data() {
        return {
            tab: 'forgot',
        }
    },
    mounted() {
    },
    methods: {}
}

</script>
