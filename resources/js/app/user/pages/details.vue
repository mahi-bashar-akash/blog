<template>

    <section class="w-100 py-5">
        <nav
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link :to="{name: 'home'}" class="text-decoration-none text-dark fw-bold">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Home
                    </router-link>
                </li>
                <li class="breadcrumb-item">
                    <router-link :to="{name: 'blogDetails'}" class="text-decoration-none text-dark fw-bold">
                        Self-observation is the first step of inner
                    </router-link>
                </li>
            </ol>
        </nav>
    </section>

    <section class="w-100 py-5">
        <div class="d-flex justify-content-center">
            <div class="h1 text-center col-9 mb-5">
                Self-observation is the first step of inner
            </div>
        </div>
        <div class="w-100">
            <img :src="`/images/blog-details.jpg`" class="img-fluid object-fit-cover w-100 rounded-4" alt="blog-details">
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="d-flex justify-content-start align-items-center py-3">
                        <div>
                            <img :src="'/images/avatar.png'" class="img-fluid object-fit-cover" style="width: 45px; height: 45px;"
                                 alt="avatar">
                        </div>
                        <div class="ms-3">
                            <div class="d-block fw-bold"> Mahi Bashar Akash</div>
                            <div class="d-block fw-normal text-secondary"> Feb 12, 2023</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center gap-3 py-3">
                        <div class="fw-bold"> Share</div>
                        <a href="javascript:void(0)" class="text-decoration-none text-secondary">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="javascript:void(0)" class="text-decoration-none text-secondary">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="javascript:void(0)" class="text-decoration-none text-secondary">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="py-3 line-height-2">
                    The fancy moon going in little artist painting. Thirty days of lavender in the dreamy light inside.
                    Other
                    perfect oh plants, for and again. I’ve honey feeling. Caring dreamland projects noteworthy than
                    minimal,
                    their it oh pretty feeling may. Include pink be.
                </div>
                <div class="w-100 py-3">
                    <img :src="`/images/blog-details.jpg`" class="img-fluid object-fit-cover rounded-4"
                         alt="blog-details">
                </div>
                <div class="py-3 line-height-2">
                    Tortor placerat bibendum consequat sapien, facilisi facilisi pellentesque morbi. Id conse ctetur ut
                    vitae a massa a. Lacus ut bibendum sollicitudin fusce sociis mi. Dictum volutpat praesent ornare
                    accumsan elit venenatis. Congue sodales nunc quis ultricies odio porta. Egestas mauris placerat leo
                    phasellu s ut sit.
                </div>
                <div class="py-3 line-height-2">
                    Thirty there & time wear across days, make inside on these you. Can young a really, roses blog small
                    of song their dreamy life pretty? Because really duo living to noteworthy bloom bell. Transform
                    clean daydreaming cute twenty process rooms cool. White white dreamy dramatically place everything
                    although. Place out apartment afternoon whimsical kinder, little romantic joy we flower handmade.
                    Thirty she a studio of she whimsical projects, afternoon effect going a floated maybe.
                </div>
                <hr class="w-100 border border-secondary">
                <div class="py-3 d-flex justify-content-start align-items-center gap-1 flex-wrap">
                    <a href="javascript:void(0)" class="btn btn-theme">
                        Animal
                    </a>
                    <a href="javascript:void(0)" class="btn btn-theme">
                        Business
                    </a>
                    <a href="javascript:void(0)" class="btn btn-theme">
                        Culture
                    </a>
                    <a href="javascript:void(0)" class="btn btn-theme">
                        Fashion
                    </a>
                    <a href="javascript:void(0)" class="btn btn-theme">
                        Food
                    </a>
                    <a href="javascript:void(0)" class="btn btn-theme">
                        Interior
                    </a>
                    <a href="javascript:void(0)" class="btn btn-theme">
                        LifeStyle
                    </a>
                    <a href="javascript:void(0)" class="btn btn-theme">
                        Travel
                    </a>
                </div>
                <div class="h1 py-3">
                    Leave a comment
                </div>
                <div class="text-secondary py-3">
                    You must be <router-link :to="{name: 'login'}" class="text-decoration-none text-primary"> logged in </router-link> to post a comment.
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
