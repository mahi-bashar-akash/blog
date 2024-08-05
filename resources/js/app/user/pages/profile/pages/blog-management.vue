<template>

    <!-- Breadcrumb -->
    <section class="w-100 py-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <router-link :to="{name: 'home'}" class="text-decoration-none text-theme">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Home
                    </router-link>
                </li>
                <li class="breadcrumb-item">
                    <router-link :to="{name: 'userBlogManagement'}" class="text-decoration-none text-theme">
                        Blog Management
                    </router-link>
                </li>
            </ol>
        </nav>
    </section>

    <!-- Card -->
    <section class="w-100">
        <div class="card border-0 rounded-3 shadow-lg">

            <div class="card-header border-0 px-4 pt-4">

                <div class="row justify-content-between align-items-center">

                    <div class="col-12 col-lg-4 py-1">

                        <!-- Search -->
                        <div class="position-relative">
                            <input type="text" name="keyword" v-model="listParam.keyword" class="form-control shadow-none ps-5" placeholder="Search Here" required autocomplete="off">
                            <div class="position-absolute top-0 start-0 h-100 d-flex justify-content-center align-items-center ps-3">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-lg-4 py-1 d-flex justify-content-end align-items-center gap-3">

                        <!-- new category -->
                        <button type="button" class="btn btn-theme width-140" @click="openCategoryManageModal()">
                            Manage Category
                        </button>

                        <!-- New blog -->
                        <button type="button" class="btn btn-theme width-100" @click="openManageModal()">
                            Create Blog
                        </button>

                    </div>

                </div>

                <!-- Title of Listing -->
                <div class="mt-4 fs-4 fw-bold">
                    Blog Listing
                </div>

            </div>

            <div class="card-body border-0 px-4">

                <!-- Table data -->
                <div class="table-responsive">
                    <table class="table table-borderless table-hover align-middle">

                        <!-- Table data head -->
                        <thead>
                            <tr>
                                <th class="p-3" style="min-width: 200px; max-width: 200px;">
                                    Photo or video
                                </th>
                                <th class="p-3 text-start" style="min-width: 200px; max-width: 200px;">
                                    Title
                                </th>
                                <th class="p-3 text-center" style="min-width: 150px; max-width: 100px;">
                                    Views
                                </th>
                                <th class="p-3 text-center" style="min-width: 150px; max-width: 100px;">
                                    Like
                                </th>
                                <th class="p-3 text-center" style="min-width: 150px; max-width: 100px;">
                                    Comment
                                </th>
                                <th class="p-3 text-center" style="min-width: 150px; max-width: 100px;">
                                    Share
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
                                <td class="p-3 text-start">
                                    <img :src="`/images/about-personal.webp`" class="img-fluid object-fit-cover rounded-2" alt="picture">
                                </td>
                                <td class="p-3">
                                    <div class="text-truncate-3">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt
                                        eligendi fuga laborum maiores minima perspiciatis quam quidem repellat rerum!
                                    </div>
                                </td>
                                <td class="p-3 text-center">
                                    {{numberFormat(1000)}}
                                </td>
                                <td class="p-3 text-center">
                                    {{numberFormat(20000)}}
                                </td>
                                <td class="p-3 text-center">
                                    {{numberFormat(300000)}}
                                </td>
                                <td class="p-3 text-center">
                                    {{numberFormat(4000000)}}
                                </td>
                                <td class="p-3">
                                    <div class="dropdown w-100 text-center">
                                        <a class="text-decoration-none text-theme fw-bold p-2" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <button type="button" class="dropdown-item mb-1" @click="openManageModal()">
                                                    Edit
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="dropdown-item" @click="openDeleteModal()">
                                                    Delete
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

    <!-- Blog manage modal -->
    <div class="modal fade" id="manageModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <!-- Manage blog form -->
            <form class="modal-content rounded-3 border-0 p-4">

                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">
                        <template v-if="this.formData.id === undefined">
                            Create
                        </template>
                        <template v-if="this.formData.id !== undefined">
                            Edit
                        </template>
                        Blog
                    </h1>
                    <button type="button" class="btn-close shadow-none" @click="closeManageModal()"></button>
                </div>

                <div class="modal-body border-0">

                    <div class="form-group mv-3">
                        <label for="file-upload"
                               class="form-label border w-100 px-3 height-200 rounded-3 d-flex justify-content-center align-items-center flex-column cursor-pointer">
                            <input type="file" name="file-upload" id="file-upload" hidden="hidden">
                            <i class="bi bi-cloud-check fs-1"></i>
                            <span class="fw-bold small">
                                Upload File
                            </span>
                        </label>
                    </div>

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" name="name"
                               class="form-control border shadow-none" required
                               autoComplete="new-name" v-model="formData.name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="5"
                                  class="form-textarea border shadow-none resize" required
                                  autocomplete="new-description" v-model="formData.description"></textarea>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="form-group mb-3">
                            <label for="is_featured">
                                <span class="d-block mb-2">
                                    Is featured
                                </span>
                                <span class="form-toggle">
                                    <input id="is_featured" type="checkbox" v-model="formData.is_featured"/>
                                    <label></label>
                                </span>
                            </label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="allow_comment">
                                <span class="d-block mb-2">
                                    Allow Comment
                                </span>
                                <span class="form-toggle">
                                    <input id="allow_comment" type="checkbox" v-model="formData.allow_comment"/>
                                    <label></label>
                                </span>
                            </label>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="select-category" class="form-label">Tags Category</label>
                        <select name="select-category" id="select-category" class="form-select">
                            <option value="select-category"> Select Category </option>
                            <option value="food"> Food </option>
                            <option value="dress"> Dress </option>
                            <option value="shelter"> Shelter </option>
                            <option value="education"> Education </option>
                            <option value="treatment"> Treatment </option>
                        </select>
                    </div>

<!--                    <div class="form-group mb-3 w-100">-->
<!--                        <label id="selectTagParent" class="form-label w-100"> Tags </label>-->
<!--                        <select id="selectTag" name="tags" multiple="multiple" class="form-select w-100" v-model="formData.tags">-->
<!--                            <option></option>-->
<!--                            <option v-for="tag in tags" :key="tag.title" :value="tag.title">{{ tag.title }}</option>-->
<!--                        </select>-->
<!--                    </div>-->

                </div>

                <div class="modal-footer border-0">

                    <button type="button" class="btn btn-secondary py-2 width-95" @click="closeManageModal()">
                        Close
                    </button>

                    <button type="submit" class="btn btn-theme py-2 width-95">
                        Save
                    </button>

                </div>

            </form>

        </div>
    </div>

    <!-- Blog delete modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <!-- Form blog delete -->
            <form class="modal-content rounded-3 border-0 p-4">

                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel"> Delete Blog </h1>
                    <button type="button" class="btn-close shadow-none" @click="closeDeleteModal()"></button>
                </div>

                <div class="modal-body border-0">
                    <div class="bi bi-trash2 m-0 p-0 text-center text-danger" style="font-size: 65px"></div>
                    <div class="mb-3 text-center fs-4"> Are you sure ?</div>
                </div>

                <div class="modal-footer border-0 d-flex justify-content-between align-items-center">

                    <div class="col-5">
                        <button type="button" class="btn btn-secondary py-2 w-100"
                                @click="closeDeleteModal()">
                            Close
                        </button>
                    </div>

                    <div class="col-5">
                        <button type="submit" class="btn btn-theme py-2 w-100">
                            Confirm
                        </button>
                    </div>

                </div>

            </form>

        </div>
    </div>

    <!-- category management -->
    <div class="modal fade" id="categoryManageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content rounded-3 border-0 p-4">

                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">
                        Manage Category
                    </h1>
                    <button type="button" class="btn-close shadow-none" @click="closeCategoryManageModal()"></button>
                </div>

                <div class="modal-body border-0">
                    <div class="d-flex align-items-center justify-content-between gap-3">
                        <input type="text" name="" class="form-control shadow-none" required autocomplete="off" placeholder="Add Category">
                        <button type="submit" class="btn btn-theme">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                    </div>

                    <div class="w-100 height-450 d-flex justify-content-center align-items-center border rounded-3 mt-4 text-secondary fw-semibold flex-column" v-if="categories.length === 0">
                        <div class="mb-2 text-danger">
                            No data founded
                        </div>
                        Click + to add new data
                    </div>

                    <div class="mt-4" v-if="categories.length > 0">
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th style="min-width: 75px; max-width: 75px;">
                                            <div class="p-2">
                                                Sl. No.
                                            </div>
                                        </th>
                                        <th style="min-width: 200px; max-width: 200px;">
                                            <div class="p-2">
                                                Category Name
                                            </div>
                                        </th>
                                        <th style="min-width: 100px; max-width: 100px;">
                                            <div class="p-2">
                                                Action
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="each in categories">
                                        <td>
                                            <div class="p-2">
                                                {{each.id}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="p-2">
                                                {{each.name}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="p-2">
                                                <div class="d-flex align-items-center justify-content-start gap-2">
                                                    <button type="button" class="btn border-0 btn-action text-secondary width-35 height-35 d-flex justify-content-center align-items-center rounded-circle">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button type="button" class="btn border-0 btn-action text-danger width-35 height-35 d-flex justify-content-center align-items-center rounded-circle">
                                                        <i class="bi bi-trash2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</template>

<script>

export default {
    data(){
        return {
            // Data properties
            formData: {
                avatar: null,
                name: '',
                description: '',
                is_featured: '',
                allow_comment: '',
                category: 'select-category',
                tags: '',
            },
            listParam: {
                keyword: '',
                page: 1,
                limit: 10,
            },
            isCategorySelect: false,
            tagsSelect2: null,
            categoryData: [],
            categories: [
                { id: '1', name: 'food' },
                { id: '2', name: 'dress' },
                { id: '3', name: 'shelter' },
                { id: '4', name: 'education' },
                { id: '5', name: 'treatment' },
            ],
            categoryIds: [],
            tags: []
        }
    },
    mounted() {  },
    methods: {

        // Function of open manage model
        openManageModal() {
            // setTimeout(() => {
            //     $('#selectTag').select2({
            //         dropdownParent: $('#selectTagParent'),
            //         tags: true,
            //         placeholder: 'Select Tag',
            //         allowClear: true,
            //     }).on('change', (e) => {
            //         this.formData.tags = $(e.target).val();
            //     });
            // }, 500);
            const myModal = new bootstrap.Modal("#manageModal", {keyboard: false});
            myModal.show();
        },

        // Function of close manage modal
        closeManageModal() {
            let myModalEl = document.getElementById('manageModal');
            let modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        },

        // Function of open manage model
        openDeleteModal() {
            const myModal = new bootstrap.Modal("#deleteModal", {keyboard: false});
            myModal.show();
        },

        // Function of close manage modal
        closeDeleteModal() {
            let myModalEl = document.getElementById('deleteModal');
            let modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        },

        // Function of open category manage model
        openCategoryManageModal() {
            const myModal = new bootstrap.Modal("#categoryManageModal", {keyboard: false});
            myModal.show();
        },

        // Function of close manage modal
        closeCategoryManageModal() {
            let myModalEl = document.getElementById('categoryManageModal');
            let modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        },

        // Function of number format
        numberFormat(num, digits) {
            const lookup = [
                { value: 1, symbol: "" },
                { value: 1e3, symbol: "k" },
                { value: 1e6, symbol: "M" },
                { value: 1e9, symbol: "G" },
                { value: 1e12, symbol: "T" },
                { value: 1e15, symbol: "P" },
                { value: 1e18, symbol: "E" }
            ];
            const regexp = /\.0+$|(?<=\.[0-9]*[1-9])0+$/;
            const item = lookup.findLast(item => num >= item.value);
            return item ? (num / item.value).toFixed(digits).replace(regexp, "").concat(item.symbol) : "0";
        },

    }
}

</script>
