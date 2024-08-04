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
                    <router-link :to="{name: 'privacy_policy'}" class="text-decoration-none text-theme">
                        Privacy & policy
                    </router-link>
                </li>
            </ol>
        </nav>
    </section>

    <!-- Privacy & Policy -->
    <section class="w-100 py-5">
        <div class="d-flex justify-content-center">

            <!-- Name -->
            <div class="h1 text-center line-height-2 fw-bold text-gradient">
                Privacy policy
            </div>

        </div>

        <div class="my-3 line-height-2 fw-medium">

            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
            of letters, as opposed to using 'Content here, content here', making it look like readable English.

            <br><br>

            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
            and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
            have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            <br><br>

            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
            this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
            with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
            generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic
            words etc.

        </div>

        <div class="h3 line-height-2 fw-bold text-gradient p-0 m-0">
            Determination of personal information of users
        </div>

        <div class="my-3 line-height-2 fw-medium">

            1. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
            this the first true generator on the Internet.

            <br><br>

            2. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
            to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
            from repetition, injected humour, or non-characteristic words etc.

            <br><br>

            3. There are many variations of passages of Lorem Ipsum available, but the majority have suffered
            alteration in some form, by injected humour, or randomised words which don't look even
            slightly believable.

        </div>

        <div class="h3 line-height-2 fw-bold text-gradient p-0 m-0">
            Reasons for collecting and processing user personal information
        </div>

        <div class="my-3 line-height-2 fw-medium">

            1. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
            this the first true generator on the Internet.

            <br><br>

            2. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
            to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
            from repetition, injected humour, or non-characteristic words etc.

            <br><br>

            3. There are many variations of passages of Lorem Ipsum available, but the majority have suffered
            alteration in some form, by injected humour, or randomised words which don't look even
            slightly believable.

        </div>

        <div class="text-end small text-secondary">
            Last updated: 27 Oct, 2021
        </div>

    </section>

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
