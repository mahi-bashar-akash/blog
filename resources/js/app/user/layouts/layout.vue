<template>
    <Header/>
    <section class="w-100 py-5 bg-opacity-theme">
        <div class="container py-5">
            <router-view/>
        </div>
    </section>
    <Footer/>
</template>

<script>
import Header from './includes/header.vue'
import Footer from './includes/footer.vue'

export default {
    components: {
        Header, Footer
    },
    data() {
        return {}
    },
    mounted() {
    },
    methods: {}
}

</script>
