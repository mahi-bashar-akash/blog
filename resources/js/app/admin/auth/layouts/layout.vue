<template>
    <section class="w-100">
        <div class="container">
            <div class="row justify-content-center vh-100 align-items-center">
                <div class="col-11 col-sm-9 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="border p-5">
                        <router-view/>
                    </div>
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
