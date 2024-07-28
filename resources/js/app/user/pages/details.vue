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
                    <router-link :to="{name: 'blogDetails'}" class="text-decoration-none text-theme">
                        Self-observation is the first step of inner
                    </router-link>
                </li>
            </ol>
        </nav>
    </section>

    <section class="w-100 py-5">
        <div class="d-flex justify-content-center">
            <div class="h1 text-center col-11 col-md-6 line-height-2 fw-bold text-gradient">
                Self-observation is the first step of inner
            </div>
        </div>
        <div class="w-100">
            <img :src="`/images/blog-details.jpg`" class="img-fluid object-fit-cover w-100 rounded-4"
                 alt="blog-details">
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="d-flex justify-content-start align-items-center py-3">
                        <div>
                            <img :src="'/images/avatar.png'" class="img-fluid object-fit-cover"
                                 style="width: 45px; height: 45px;"
                                 alt="avatar">
                        </div>
                        <div class="ms-3">
                            <div class="d-block fw-bold"> Mahi Bashar Akash</div>
                            <div class="d-block fw-medium small"> Feb 12, 2023</div>
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
                    <a href="javascript:void(0)" class="btn btn-outline-theme">
                        Animal
                    </a>
                    <a href="javascript:void(0)" class="btn btn-outline-theme">
                        Business
                    </a>
                    <a href="javascript:void(0)" class="btn btn-outline-theme">
                        Culture
                    </a>
                    <a href="javascript:void(0)" class="btn btn-outline-theme">
                        Fashion
                    </a>
                    <a href="javascript:void(0)" class="btn btn-outline-theme">
                        Food
                    </a>
                    <a href="javascript:void(0)" class="btn btn-outline-theme">
                        Interior
                    </a>
                    <a href="javascript:void(0)" class="btn btn-outline-theme">
                        LifeStyle
                    </a>
                    <a href="javascript:void(0)" class="btn btn-outline-theme">
                        Travel
                    </a>
                </div>
                <hr>
                <div class="d-flex justify-content-end align-items-center gap-3 small">
                    <button type="button" class="btn p-0 m-0 border-0 text-dark fw-medium">
                        {{numberFormat(4000)}} likes
                    </button>
                    <button type="button" class="btn p-0 m-0 border-0 text-dark fw-medium">
                        {{numberFormat(3000000)}} comments
                    </button>
                    <button type="button" class="btn p-0 m-0 border-0 text-dark fw-medium">
                        {{numberFormat(2000)}} Shares
                    </button>
                </div>
                <hr>
                <div class="h1 py-3">
                    Leave a comment
                </div>
                <div class="text-secondary pb-3">
                    You must be
                    <router-link :to="{name: 'login'}" class="text-decoration-none text-primary"> logged in
                    </router-link>
                    to post a comment.
                </div>
                <form class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label d-block"> Name </label>
                            <input id="name" type="text" name="name" class="form-control shadow-none" required
                                   autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label d-block"> Email </label>
                            <input id="email" type="email" name="email" class="form-control shadow-none" required
                                   autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="message" class="form-label d-block"> Message </label>
                            <textarea name="message" class="form-textarea shadow-none" id="message" cols="30" rows="5"
                                      required autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-theme" style="width: 100px;">
                            Submit
                        </button>
                    </div>
                </form>
                <hr class="w-100 border border-dark"/>
                <div class="h4 pb-3">
                    Latest comments
                </div>
                <div class="border border-white shadow bg-white p-3 rounded-3 mb-3" v-for="each in 3">
                    <div class="d-flex justify-content-start align-items-start">
                        <div>
                            <img :src="`/images/avatar.png`" class="img-fluid object-fit-cover rounded-circle"
                                 style="width: 45px; height: 45px;" alt="avatar">
                        </div>
                        <div class="ps-3">
                            <div class="fw-bold"> User name</div>
                            <div class="fw-medium small"> 03 Feb 2024</div>
                        </div>
                    </div>
                    <div class="text-dark mt-3 small line-height-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci illo, incidunt minus nihil
                        non obcaecati omnis rem suscipit velit voluptas! Alias eum fugiat harum laboriosam minima neque
                        omnis sequi ullam voluptates voluptatum. Deleniti dicta doloremque dolores ducimus impedit odio
                        similique?
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-theme" style="width: 200px;">
                        View more
                    </button>
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
    methods: {

        // number format
        numberFormat(num, digits) {
            const lookup = [
                { value: 1, symbol: "" },
                { value: 1e3, symbol: "k" },
                { value: 1e6, symbol: "M" },
                { value: 1e9, symbol: "G" },
                { value: 1e12, symbol: "T" },
                { value: 1e15, symbol: "P" },
                { value: 1e18, symbol: "E" }
            ];
            const regexp = /\.0+$|(?<=\.[0-9]*[1-9])0+$/;
            const item = lookup.findLast(item => num >= item.value);
            return item ? (num / item.value).toFixed(digits).replace(regexp, "").concat(item.symbol) : "0";
        },

    }
}

</script>
