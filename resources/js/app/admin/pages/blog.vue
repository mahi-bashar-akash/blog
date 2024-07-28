<template>

    <section class="w-100 py-3 px-4 bg-white shadow-lg d-flex justify-content-between align-items-center">
        <div class="fw-bold text-theme">
            <i class="bi bi-book me-2"></i> Blogs
        </div>
        <div
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <div class="breadcrumb pb-0 mb-0">
                <div class="breadcrumb-item pb-0 mb-0">
                    <router-link :to="{name: 'dashboard'}" class="text-decoration-none text-theme">
                        Dashboard
                    </router-link>
                </div>
                <div class="breadcrumb-item pb-0 mb-0">
                    <router-link :to="{name: 'blogs'}" class="text-decoration-none text-theme">
                        Blogs
                    </router-link>
                </div>
            </div>
        </div>
    </section>

    <section class="w-100 mt-3">
        <div class="card border-0 rounded-0">
            <div class="card-header border-0 rounded-0">

                <div class="py-3 ps-2 fs-6">
                    Slider Listing
                </div>

                <div class="px-2">
                    <div class="row">
                        <div class="col-lg-4 pb-3">
                            <div class="position-relative">
                                <input type="text" name="keyword" class="form-control shadow-none ps-5" required autocomplete="off" placeholder="Search Here">
                                <div class="position-absolute top-0 start-0 d-flex justify-content-center align-items-center h-100 ps-3">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pb-3 text-end">
                            <button type="button" class="btn btn-theme">
                                <i class="bi bi-plus"></i>
                                <span class="ms-2"> Add Slider </span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body border-0 rounded-0 py-0">



            </div>
            <div class="card-footer border-0 rounded-0">

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
