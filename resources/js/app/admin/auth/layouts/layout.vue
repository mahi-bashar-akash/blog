<template>
    <section class="w-100">
        <div class="container">
            <div class="row justify-content-center vh-100">
                <div class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-7 col-xxl-6 p-5">
                    <div class="mb-3 d-flex justify-content-center align-items-center">
                        <img :src="`/images/logo.png`" class="img-fluid" width="40" alt="logo">
                        <span class="text-theme ms-1 fw-bold"> Npvider </span>
                    </div>
                    <router-view/>
                </div>
            </div>
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
