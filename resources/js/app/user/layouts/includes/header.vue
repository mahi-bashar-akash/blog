<template>

    <header class="header bg-body-tertiary">
        <nav class="navbar navbar-expand-lg p-3">
            <div class="container">
                <router-link :to="{name: 'home'}" class="navbar-brand">
                    <img :src="`/images/logo.png`" class="img-fluid width-120" alt="logo">
                </router-link>
                <button class="navbar-toggler" type="button" @click="collapse()">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link p-0" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="rounded-circle bg-theme text-white d-flex justify-content-center align-items-center" style="width:45px; height:45px;">
                                    {{nameControl(profileName)}}
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <router-link :to="{name: 'userDetails'}" class="dropdown-item mb-1" @click="collapse()">
                                        Profile
                                    </router-link>
                                </li>
                                <li>
                                    <router-link :to="{name: 'userBlogManagement'}" class="dropdown-item mb-1" @click="collapse()">
                                        Blog management
                                    </router-link>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item" @click="collapse()">
                                        Logout
                                    </button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

</template>

<script>

export default {
    data(){
        return {
            tab: 'edit-profile',
            profileName: 'Mahi Bashar Akash'
        }
    },
    mounted() {

        this.scrollEffect();

    },
    methods: {

        // collapse navbar
        collapse() {
            if (window.innerWidth < 991) {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                } else {
                    navbarCollapse.classList.add('show');
                }
            }
        },

        // navbar scrolling effect
        scrollEffect(){
            window.addEventListener('scroll', (e) => {
                const nav = document.querySelector('.header');
                if (window.pageYOffset > 0) {
                    nav.classList.add("animated-shadow");
                } else {
                    nav.classList.remove("animated-shadow");
                }
            });
        },

        // Function of name control
        nameControl(fullName) {
            let words = fullName.split(' ');
            let outPut = ` ${words[0][0].toUpperCase()}${ words[words.length - 1][0].toUpperCase()}`;
            return outPut;
        }

    }
}

</script>
