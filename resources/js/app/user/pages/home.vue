<template>

    <section class="row py-5 align-items-center px-3">
        <article class="col-lg-6 py-5">
            <h1 class="fs-1 mb-4 fw-bold">
                Hey, We are <span class="text-theme"> News provider </span>
            </h1>
            <p class="line-height-2">
                We work for share experience of <span class="fw-bold"> world activities by any writers </span>. We work
                as team working with different places to share any need or necessary information by create, listing,
                update and delete. This is <span class="fw-bold">writers site to provide experience</span>,
                where We like, comment, share as opinion and write about ethical and none-violence topic.
            </p>
            <div class="fs-5 fw-semibold"> Let's connect</div>
            <div class="my-3">
                <form class="position-relative w-100">
                    <input type="text" name="subscribe"
                           class="form-control shadow-none border border-secondary-subtle rounded-3 p-3" required
                           placeholder="Enter your email">
                    <div class="position-absolute top-50 end-0 pe-2 translate-middle-y">
                        <button type="submit"
                                class="btn btn-theme width-45 height-45 d-flex justify-content-center align-items-center">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                </form>
            </div>
        </article>
        <div class="col-lg-6 p-5">
            <img :src="'/images/about-personal.webp'" class="img-fluid object-fit-cover border-animation"
                 alt="about-person">
        </div>
    </section>

    <section class="row align-items-start px-3">

        <div class="col-lg-4 sticky-lg-top order-2 order-lg-1 py-5" style="top: 85px; z-index: 0">

            <div class="fs-5 fw-bold"> Tag Categories </div>

            <div class="mt-3 mb-5 d-flex justify-content-start align-items-center flex-wrap gap-3">
                <a href="javascript:void(0)" class="text-decoration-none text-dark">
                    <span class="d-flex justify-content-start align-items-center">
                        <span class="d-inline-block width-8 height-8 bg-dark rounded-circle me-2"></span> Health
                    </span>
                </a>
                <a href="javascript:void(0)" class="text-decoration-none text-secondary">
                    <span class="d-flex justify-content-start align-items-center">
                        <span class="d-inline-block width-8 height-8 bg-secondary rounded-circle me-2"></span> Inspiration
                    </span>
                </a>
                <a href="javascript:void(0)" class="text-decoration-none text-warning">
                    <span class="d-flex justify-content-start align-items-center">
                        <span class="d-inline-block width-8 height-8 bg-warning rounded-circle me-2"></span> Lifestyle
                    </span>
                </a>
                <a href="javascript:void(0)" class="text-decoration-none text-info">
                    <span class="d-flex justify-content-start align-items-center">
                        <span class="d-inline-block width-8 height-8 bg-info rounded-circle me-2"></span> Music
                    </span>
                </a>
                <a href="javascript:void(0)" class="text-decoration-none text-danger">
                    <span class="d-flex justify-content-start align-items-center">
                        <span class="d-inline-block width-8 height-8 bg-danger rounded-circle me-2"></span> Technology
                    </span>
                </a>
                <a href="javascript:void(0)" class="text-decoration-none text-success">
                    <span class="d-flex justify-content-start align-items-center">
                        <span class="d-inline-block width-8 height-8 bg-success rounded-circle me-2"></span> Travel
                    </span>
                </a>
                <a href="javascript:void(0)" class="text-decoration-none text-primary">
                    <span class="d-flex justify-content-start align-items-center">
                        <span class="d-inline-block width-8 height-8 bg-primary rounded-circle me-2"></span> Video
                    </span>
                </a>
            </div>

            <div class="fs-5 fw-bold">Recent Posts</div>

            <div class="mt-3 mb-5">
                <div class="d-flex justify-content-start align-items-center mb-3 p-4 bg-white shadow rounded-4">
                    <div>
                        <img :src="'/images/about-personal.webp'" class="width-65 height-65 rounded-3"
                             alt="about-person">
                    </div>
                    <div class="ms-3">
                        <div class="fw-bold text-truncate-2">
                            The spectacle before us was indeed sublime
                        </div>
                        <div class="text-secondary">
                            <i class="bi bi-calendar me-2 text-theme"></i>
                            September 26, 2019
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start align-items-center mb-3 p-4 bg-white shadow rounded-4">
                    <div>
                        <img :src="'/images/about-personal.webp'" class="width-65 height-65 rounded-3"
                             alt="about-person">
                    </div>
                    <div class="ms-3">
                        <div class="fw-bold text-truncate-2">
                            The spectacle before us was indeed sublime
                        </div>
                        <div class="text-secondary">
                            <i class="bi bi-calendar me-2 text-theme"></i>
                            September 26, 2019
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start align-items-center mb-3 p-4 bg-white shadow rounded-4">
                    <div>
                        <img :src="'/images/about-personal.webp'" class="width-65 height-65 rounded-3"
                             alt="about-person">
                    </div>
                    <div class="ms-3">
                        <div class="fw-bold text-truncate-2">
                            The spectacle before us was indeed sublime
                        </div>
                        <div class="text-secondary">
                            <i class="bi bi-calendar me-2 text-theme"></i>
                            September 26, 2019
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-8 order-1 order-lg-2 py-5">

            <div class="fs-5 fw-bold"> Regular Post Activities</div>

            <!-- recent post -->
            <div class="px-2">
                <div class="row justify-content-start align-items-center p-2 bg-white shadow rounded-4 my-3"
                     v-for="each in 10">
                    <div class="col-12 col-xl-5 py-2">
                        <img :src="'/images/about-personal.webp'" class="img-fluid object-fit-cover rounded-3"
                             alt="about-person">
                    </div>
                    <div class="col-12 col-xl-7 py-2">
                        <div class="d-flex justify-content-start align-items-center flex-wrap gap-3 mb-2">
                            <div>
                                <i class="bi bi-calendar me-2 text-theme"></i>
                                September 26, 2019
                            </div>
                            <div>
                                <i class="bi bi-person me-2 text-theme"></i>
                                1 person read
                            </div>
                        </div>
                        <h1 class="fw-bold fs-5 line-height-2 text-truncate-2">
                            The spectacle before us was indeed sublime
                        </h1>
                        <p class="text-secondary line-height-2 text-truncate-2">
                            Welcome, it’s great to have you here. We know that first impressions are important, so we’ve
                            populated your new site with some initial getting started posts that…
                        </p>
                        <div class="d-flex justify-content-start align-items-center gap-3">
                            <a href="javascript:void(0)" class="text-decoration-none text-dark">
                            <span class="d-flex justify-content-start align-items-center">
                                <span class="d-inline-block width-8 height-8 bg-dark rounded-circle me-2"></span> Health
                            </span>
                            </a>
                            <a href="javascript:void(0)" class="text-decoration-none text-warning">
                            <span class="d-flex justify-content-start align-items-center">
                                <span class="d-inline-block width-8 height-8 bg-warning rounded-circle me-2"></span> Lifestyle
                            </span>
                            </a>
                        </div>
                        <div class="mt-3">
                            <router-link :to="{name: 'blogDetails'}" class="text-decoration-none text-secondary-theme">
                                Read more
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>

            <!-- pagination -->
            <div class="d-flex justify-content-center align-items-center my-4 py-3">
                <div aria-label="Page navigation example" class="front-pagination">
                    <div class="pagination">
                        <div class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </div>
                        <div class="page-item active">
                            <a class="page-link" href="javascript:void(0)">
                                1
                            </a>
                        </div>
                        <div class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                2
                            </a>
                        </div>
                        <div class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                3
                            </a>
                        </div>
                        <div class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

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
