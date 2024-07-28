<template>

    <!-- breadcrumb -->
    <section class="w-100 py-3 px-4 bg-white shadow-lg d-flex justify-content-between align-items-center">
        <div class="fw-bold text-theme">
            <i class="bi bi-link-45deg me-2"></i> Categories
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
                    <router-link :to="{name: 'categories'}" class="text-decoration-none text-theme">
                        Categories
                    </router-link>
                </div>
            </div>
        </div>
    </section>

    <section class="w-100 mt-3">

        <!-- card -->
        <div class="card border-0 rounded-0">

            <!-- card header -->
            <div class="card-header border-0 rounded-0">

                <!-- card header title as listing -->
                <div class="py-3 ps-2 fs-6">
                    Category Listing
                </div>

                <div class="px-2">
                    <div class="row">

                        <!-- search here -->
                        <div class="col-12 col-xl-5 pb-3">
                            <div class="position-relative">
                                <input type="text" name="keyword" class="form-control shadow-none ps-5" required autocomplete="off" placeholder="Search Here">
                                <div class="position-absolute top-0 start-0 d-flex justify-content-center align-items-center h-100 ps-3">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-7 pb-3 text-end">

                            <!-- add category as open manage modal -->
                            <button type="button" class="btn btn-theme">
                                <i class="bi bi-plus-lg"></i>
                                <span class="ms-2"> Add Category </span>
                            </button>

                        </div>
                    </div>
                </div>

            </div>

            <!-- card body -->
            <div class="card-body card-list border-0 rounded-0 py-0 px-4">

                <!-- table -->
                <div class="table-responsive">
                    <table class="table table-hover table-borderless align-middle">

                        <!-- table head -->
                        <thead>
                            <tr>
                                <th style="min-width: 100px;" class="p-3">
                                    Sl. No.
                                </th>
                                <th style="min-width: 250px;" class="p-3">
                                    Category Name
                                </th>
                                <th style="min-width: 150px;" class="p-3">
                                    Action
                                 </th>
                            </tr>
                        </thead>

                        <!-- table body -->
                        <tbody>
                            <tr v-for="each in 19">
                                <td style="min-width: 100px" class="p-3">
                                    {{each}}
                                </td>
                                <td style="min-width: 250px" class="p-3">
                                    Category name {{each}}
                                </td>
                                <td style="min-width: 150px" class="p-3">
                                    <button type="button" class="btn rounded-circle p-0 btn-action border-0 me-3 text-secondary" style="width: 35px; height: 35px;">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button type="button" class="btn rounded-circle p-0 btn-action border-0 text-danger" style="width: 35px; height: 35px;">
                                        <i class="bi bi-trash2"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>

            </div>

            <!-- card footer -->
            <div class="card-footer border-0 rounded-0">

                <!-- pagination -->
                <div class="d-flex justify-content-center align-items-center py-3">
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
