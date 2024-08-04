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
                    <router-link :to="{name: 'terms_conditions'}" class="text-decoration-none text-theme">
                        Terms & conditions
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
                Terms of use
            </div>

        </div>

        <div class="my-3 line-height-2 fw-medium">

            Terms of use dolor sit amet consectetur, adipisicing elit. Recusandae provident ullam aperiam quo ad
            non corrupti sit vel quam repellat ipsa quod sed, repellendus adipisci, ducimus ea modi odio assumenda.

        </div>

        <div class="h3 line-height-2 fw-bold text-gradient p-0 m-0">
            Disclaimers
        </div>

        <div class="my-3 line-height-2 fw-medium">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea
            voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis
            tenetur at, quis nostrum facere excepturi architecto totam.

            <br><br>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi
            ipsum sint iusto fugiat vero velit rerum.

        </div>

        <div class="h3 line-height-2 fw-bold text-gradient p-0 m-0">
            Limitation on Liability
        </div>

        <div class="my-3 line-height-2 fw-medium">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea
            voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis
            tenetur at, quis nostrum facere excepturi architecto totam.

            <br><br>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum
            sint iusto fugiat vero velit rerum.

        </div>

        <div class="h3 line-height-2 fw-bold text-gradient p-0 m-0">
            Copyright Policy
        </div>

        <div class="my-3 line-height-2 fw-medium">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea
            voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis
            tenetur at, quis nostrum facere excepturi architecto totam.

            <br><br>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum
            sint iusto fugiat vero velit rerum.

        </div>

        <div class="h3 line-height-2 fw-bold text-gradient p-0 m-0">
            General
        </div>

        <div class="my-3 line-height-2 fw-medium">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea
            voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis
            tenetur at, quis nostrum facere excepturi architecto totam.

            <br><br>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum
            sint iusto fugiat vero velit rerum.

            <br><br>

            Your Privacy. Please read our <router-link :to="{name: 'privacy_policy'}" class="text-decoration-none text-gradient"> Privacy Policy</router-link>

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
