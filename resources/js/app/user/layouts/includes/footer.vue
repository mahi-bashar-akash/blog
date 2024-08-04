<template>
    <footer class="w-100 bg-light">
        <div class="container">
            <div class="row">

                <!-- Social Media -->
                <div class="col-12 col-md-6 col-xl-4 py-5">
                    <div class="fs-4 fw-bold"> Follow me!</div>
                    <div class="my-3">
                        <a :href="footer?.social_media?.twitter" target="_blank"
                           class="text-decoration-none d-block text-secondary p-2 mb-1 border-bottom">
                            Follow on <span class="text-theme fw-semibold"> Twitter </span>
                        </a>
                        <a :href="footer?.social_media?.facebook" target="_blank"
                           class="text-decoration-none d-block text-secondary p-2 mb-1 border-bottom">
                            Follow on <span class="text-theme fw-semibold"> Facebook </span>
                        </a>
                        <a :href="footer?.social_media?.instagram" target="_blank"
                           class="text-decoration-none d-block text-secondary p-2 mb-1 border-bottom">
                            Follow on <span class="text-theme fw-semibold"> Instagram </span>
                        </a>
                        <a :href="footer?.social_media?.tiktok" target="_blank"
                           class="text-decoration-none d-block text-secondary p-2 mb-1 border-bottom">
                            Follow on <span class="text-theme fw-semibold"> Tiktok </span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 py-5">
                    <div class="fs-4 fw-bold"> Quick Links</div>
                    <div class="my-3">
                        <router-link :to="{name: 'home'}" class="text-decoration-none d-block p-2 mb-1 text-animation">
                            Home
                        </router-link>
                        <router-link :to="{name: 'login'}" class="text-decoration-none d-block p-2 mb-1 text-animation">
                            Login
                        </router-link>
                        <router-link :to="{name: 'terms_conditions'}" class="text-decoration-none d-block p-2 mb-1 text-animation">
                            Terms & Conditions
                        </router-link>
                        <router-link :to="{name: 'privacy_policy'}" class="text-decoration-none d-block p-2 mb-1 text-animation">
                            Privacy Policy
                        </router-link>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 py-5">
                    <router-link :to="{name: 'home'}" class="d-flex align-items-center justify-content-start text-decoration-none">
                        <img :src="`/images/logo.png`" class="img-fluid" width="40" alt="logo">
                        <span class="text-gradient ms-1 fw-bold"> Npvider </span>
                    </router-link>
                    <div class="my-3 line-height-2 text-secondary">
                        {{footer?.description}}
                    </div>
                    <div class="fs-4 fw-bold"> Let's connect</div>
                    <div class="my-3">
                        <form class="position-relative w-100">
                            <input type="text" name="newsletter"
                                   class="form-control shadow-none border border-secondary-subtle rounded-3 p-3" required
                                   placeholder="Enter your email">
                            <div class="position-absolute top-50 end-0 pe-2 translate-middle-y">

                                <!-- Action button -->
                                <button type="submit"
                                        class="btn btn-theme width-35 height-35 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-send"></i>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 text-center pb-5">
                    <span class="fw-bold">Npvider</span> Theme by <a href="https://github.com/mahi-bashar-akash" class="text-decoration-none text-theme fw-bold"> Mahi Bashar Akash.</a> Powered
                    by <span class="fw-bold"> Laravel with Vuejs (SPA) </span>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>

export default {
    data() {
        return {
            // Data properties
            footer: {
                social_media: {
                    twitter: 'https://www.twitter.com',
                    facebook: 'https://www.facebook.com',
                    instagram: 'https://www.instagram.com',
                    tiktok: 'https://www.tiktok.com',
                },
                description: `
                    Subscribe to our email newsletter and unlock access to members-only content and
                    exclusive updates.
                `,
            }
        }
    },
    mounted() {
    },
    methods: {}
}

</script>
