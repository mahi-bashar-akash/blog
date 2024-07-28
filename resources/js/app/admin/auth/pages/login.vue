<template>

    <form class="w-100">

        <!-- login title -->
        <div class="h4 fw-bold">
            Welcome to Npvider ! 👋🏻
        </div>

        <!-- login small description -->
        <div class="text-secondary mb-3">
            Please sign-in to your account and start the adventure
        </div>

        <!-- login email input field -->
        <div class="form-group mb-3">
            <label for="user-email" class="form-label">Email</label>
            <input id="user-email" type="email" name="email" class="form-control shadow-none" required autocomplete="off">
        </div>

        <!-- login password input field -->
        <div class="form-group mb-3">
            <label for="user-password" class="form-label">Password</label>
            <input id="user-password" type="password" name="password" class="form-control shadow-none" required autocomplete="off">
        </div>

        <!-- login remember me input field -->
        <div class="d-flex justify-content-between align-items-center mb-3">

            <label for="remember-me" class="form-label cursor-pointer">
                <input id="remember-me" type="checkbox" class="form-checkbox">
                Remember me
            </label>

            <!-- go route as forgot password -->
            <router-link :to="{name: 'forgot'}" class="text-decoration-none text-danger">
                Forgot password
            </router-link>

        </div>

        <!-- login api call button -->
        <button type="submit" class="btn btn-theme" style="width: 100px;">
            Login
        </button>

    </form>

</template>

<script>

export default {
    data(){
        return {  }
    },
    mounted() {  },
    methods: {  }
}

</script>
