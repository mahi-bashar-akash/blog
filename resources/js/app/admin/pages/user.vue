<template>

    <section class="w-100 py-3 px-4 bg-white shadow-lg d-flex justify-content-between align-items-center">
        <div class="fw-bold text-theme">
            <i class="bi bi-people me-2"></i> Users
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
                    <router-link :to="{name: 'users'}" class="text-decoration-none text-theme">
                        Users
                    </router-link>
                </div>
            </div>
        </div>
    </section>

    <section class="w-100 mt-3">
        <div class="card border-0 rounded-0">
            <div class="card-header border-0 rounded-0">

                <div class="py-3 ps-2 fs-6">
                    User Listing
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

                    </div>
                </div>

            </div>
            <div class="card-body card-list border-0 rounded-0 py-0 px-4">

                <!-- Table data -->
                <div class="table-responsive">
                    <table class="table table-borderless table-hover align-middle">

                        <!-- Table data head -->
                        <thead>
                        <tr>
                            <th class="p-3" style="min-width: 45px; max-width: 45px">
                                <input type="checkbox" class="form-checkbox" name="checkbox">
                            </th>
                            <th class="p-3" style="min-width: 65px; max-width: 65px;">
                                Picture
                            </th>
                            <th class="p-3" style="min-width: 150px; max-width: 150px;">
                                Name
                            </th>
                            <th class="p-3" style="min-width: 150px; max-width: 100px;">
                                Email
                            </th>
                            <th class="p-3" style="min-width: 150px; max-width: 100px;">
                                Phone Number
                            </th>
                            <th class="p-3" style="min-width: 150px; max-width: 100px;">
                                Address
                            </th>
                            <th class="p-3 text-center" style="min-width: 150px; max-width: 100px;">
                                Action
                            </th>
                        </tr>
                        </thead>

                        <!-- Table data body -->
                        <tbody>

                        <!-- Table single data -->
                        <tr v-for="each in 10">
                            <td class="p-3">
                                <input type="checkbox" class="form-checkbox" name="checkbox">
                            </td>
                            <td class="p-3">
                                <img :src="`/images/avatar.png`" class="img-fluid object-fit-cover rounded-2 width-45 height-45" alt="picture">
                            </td>
                            <td class="p-3">
                                User name {{each}}
                            </td>
                            <td class="p-3">
                                User email {{each}}
                            </td>
                            <td class="p-3">
                                User phone number {{each}}
                            </td>
                            <td class="p-3">
                                User Address {{each}}
                            </td>
                            <td class="p-3">
                                <div class="dropdown w-100 text-center">
                                    <a class="text-decoration-none text-theme fw-bold p-2" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button type="button" class="dropdown-item mb-1">
                                                Block
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item">
                                                View
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>
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
