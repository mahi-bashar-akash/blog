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
                    <router-link :to="{name: 'userBlogManagement'}" class="text-decoration-none text-dark fw-bold">
                        Blog Management
                    </router-link>
                </li>
            </ol>
        </nav>
    </section>

    <section class="w-100 py-5">

        <div class="card border-0 rounded-3">

            <div class="card-header border-0 px-4 pt-4">

                <div class="row justify-content-between align-items-center">

                    <div class="col-md-4">

                        <!-- Search -->
                        <div class="position-relative">
                            <input type="text" name="keyword" class="form-control shadow-none ps-5" placeholder="Search Here" required autocomplete="off">
                            <div class="position-absolute top-0 start-0 h-100 d-flex justify-content-center align-items-center ps-3">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-end">

                        <!-- New -->
                        <button type="button" class="btn btn-theme">
                            New
                        </button>

                    </div>
                </div>

                <!-- Title of Listing -->
                <div class="mt-4 fs-4 fw-bold">
                    Blog Listing
                </div>

            </div>

            <div class="card-body border-0 px-4">

                <!-- table data -->
                <div class="table-responsive">
                    <table class="table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th class="p-3" style="min-width: 200px; max-width: 200px"> Title </th>
                                <th class="p-3" style="min-width: 150px; max-width: 100px"> Views </th>
                                <th class="p-3" style="min-width: 150px; max-width: 100px"> Like </th>
                                <th class="p-3" style="min-width: 150px; max-width: 100px"> Comment </th>
                                <th class="p-3" style="min-width: 150px; max-width: 100px"> Share </th>
                                <th class="p-3" style="min-width: 150px; max-width: 100px"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="each in 10">
                                <td class="p-3">Title</td>
                                <td class="p-3">View</td>
                                <td class="p-3">Like</td>
                                <td class="p-3">Comment</td>
                                <td class="p-3">Share</td>
                                <td class="p-3">Action</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer border-0 px-4 pb-4">

                <!-- pagination -->
                <div class="d-flex justify-content-center align-items-center">
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
        return {}
    },
    mounted() {
    },
    methods: {
    }
}

</script>
