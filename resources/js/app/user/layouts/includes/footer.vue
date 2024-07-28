<template>
    <footer class="w-100 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4 py-5">
                    <div class="fs-4 fw-bold"> Follow me!</div>
                    <div class="my-3">
                        <a href="javascript:void(0)"
                           class="text-decoration-none d-block text-secondary p-2 mb-1 border-bottom">
                            Follow on <span class="text-theme"> Twitter </span>
                        </a>
                        <a href="javascript:void(0)"
                           class="text-decoration-none d-block text-secondary p-2 mb-1 border-bottom">
                            Follow on <span class="text-theme"> Facebook </span>
                        </a>
                        <a href="javascript:void(0)"
                           class="text-decoration-none d-block text-secondary p-2 mb-1 border-bottom">
                            Follow on <span class="text-theme"> Instagram </span>
                        </a>
                        <a href="javascript:void(0)"
                           class="text-decoration-none d-block text-secondary p-2 mb-1 border-bottom">
                            Follow on <span class="text-theme"> Tiktok </span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 py-5">
                    <div class="fs-4 fw-bold"> Quick Links</div>
                    <div class="my-3">
                        <router-link :to="{name: 'home'}" class="text-decoration-none d-block text-secondary p-2 mb-1 text-footer">
                            Home
                        </router-link>
                        <router-link :to="{name: 'login'}" class="text-decoration-none d-block text-secondary p-2 mb-1 text-footer">
                            Login
                        </router-link>
                        <a href="javascript:void(0)" class="text-decoration-none d-block text-secondary p-2 mb-1 text-footer">
                            Terms & Conditions
                        </a>
                        <a href="javascript:void(0)" class="text-decoration-none d-block text-secondary p-2 mb-1 text-footer">
                            Privacy Policy
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 py-5">
                    <div class="d-flex align-items-center justify-content-start">
                        <img :src="`/images/logo.png`" class="img-fluid" width="40" alt="logo">
                        <span class="text-theme ms-1 fw-bold"> Npvider </span>
                    </div>
                    <div class="my-3 line-height-2 text-secondary">
                        Subscribe to our email newsletter and unlock access to <span
                        class="fw-bold"> members-only </span> content and <span
                        class="fw-bold"> exclusive updates.</span>
                    </div>
                    <div class="fs-4 fw-bold"> Let's connect</div>
                    <div class="my-3">
                        <form class="position-relative w-100">
                            <input type="text" name="subscribe"
                                   class="form-control shadow-none border border-secondary-subtle rounded-3 p-3"
                                   required placeholder="Enter your email">
                            <div class="position-absolute top-50 end-0 pe-2 translate-middle-y">
                                <button type="submit"
                                        class="btn btn-theme width-45 height-45 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 text-center pb-5">
                    <span class="fw-bold">Zento</span> Theme by <span class="fw-bold"> Mahi Bashar Akash.</span> Powered
                    by <span class="fw-bold"> Laravel with Vuejs (SPA) </span>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>

export default {
    data() {
        return {}
    },
    mounted() {
    },
    methods: {}
}

</script>
