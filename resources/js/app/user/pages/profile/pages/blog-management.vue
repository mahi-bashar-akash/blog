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
        <div class="card border-0 rounded-3 shadow-lg bg-white">

            <div class="card-header border-0 px-4 pt-4 bg-white">

                <div class="row justify-content-between align-items-center">

                    <div class="col-12 col-lg-4 py-1">

                        <!-- Search -->
                        <div class="position-relative">
                            <input type="text" name="keyword" v-model="listParam.keyword" class="form-control shadow-none ps-5" placeholder="Search Here" @keyup="searchBlogData()" autocomplete="off">
                            <div class="position-absolute top-0 start-0 h-100 d-flex justify-content-center align-items-center ps-3">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-lg-8 py-1 d-flex justify-content-end align-items-center gap-3">

                        <!-- new category -->
                        <button type="button" class="btn btn-theme px-4" @click="openCategoryListModal()">
                            Category
                        </button>

                        <!-- New blog -->
                        <button type="button" class="btn btn-theme px-4" @click="openManageBlogModal()">
                            Create Blog
                        </button>

                    </div>

                </div>

                <!-- Title of Listing -->
                <div class="mt-4 fs-4 fw-bold">
                    Blog Listing
                </div>

            </div>

            <div class="card-body height-calc-300 scrollable border-0 px-4 bg-white">

                <!-- No data founded -->
                <div class="h-100 d-flex justify-content-center align-items-center flex-column">
                    <div>
                        <i class="bi bi-exclamation-circle text-danger font-size-35"></i>
                    </div>
                    <div class="fw-bold">
                        No data founded
                    </div>
                </div>

                <!-- Table data -->
                <div class="table-responsive" v-if="blogData.length > 0 && !listBlogLoading">
                    <table class="table table-borderless table-hover align-middle">

                        <!-- Table data head -->
                        <thead>
                            <tr>
                                <th class="p-3" style="min-width: 150px; max-width: 150px;">
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
                            <tr v-for="each in blogData">
                                <td class="p-3 text-start">
                                    <img :src="each.avatar" class="img-fluid object-fit-cover rounded-2" alt="picture">
                                </td>
                                <td class="p-3">
                                    <div class="text-truncate-3">
                                        {{each.description}}
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
                                                <button type="button" class="dropdown-item mb-1" @click="openManageBlogModal(each.id)">
                                                    Edit
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="dropdown-item" @click="openDeleteBlogModal(each.id)">
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

            <div class="card-footer border-0 px-4 pb-4 bg-white">

                <!-- pagination -->
                <div class="d-flex justify-content-center align-items-center" v-if="blogData.length > 0 && !listBlogLoading">
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
    <div class="modal fade" id="manageBlogModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <button type="button" class="btn-close shadow-none" @click="closeManageBlogModal()"></button>
                </div>

                <form @submit.prevent="manageBlog()" class="modal-body border-0">

                    <div class="form-group mv-3">
                        <label for="file-upload" class="form-label border w-100 px-3 height-200 rounded-3 d-flex justify-content-center align-items-center flex-column cursor-pointer">
                            <input type="file" name="file-upload" id="file-upload" hidden="hidden" @change="uploadFile($event)">
                            <i class="bi bi-cloud-check fs-1"></i>
                            <span class="fw-bold small">
                                Upload File
                            </span>
                        </label>
                        <div class="error-report" v-if="error != null && error.avatar !== undefined"> {{error.avatar[0]}} </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" name="name"
                               class="form-control border shadow-none"
                               autoComplete="new-name" v-model="formData.name">
                        <div class="error-report" v-if="error != null && error.name !== undefined"> {{error.name[0]}} </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="5"
                                  class="form-textarea border shadow-none resize"
                                  autocomplete="new-description" v-model="formData.description"></textarea>
                        <div class="error-report" v-if="error != null && error.description !== undefined"> {{error.description[0]}} </div>
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
                            <div class="error-report" v-if="error != null && error.is_featured !== undefined"> {{error.is_featured[0]}} </div>
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
                            <div class="error-report" v-if="error != null && error.allow_comment !== undefined"> {{error.allow_comment[0]}} </div>
                        </div>

                    </div>

                    <div class="form-group mb-3">
                        <label for="category" class="form-label">Category tag</label>
                        <select name="category" id="category" class="form-select shadow-none" v-model="formData.category">
                            <option value="select-category">Select Category Tag</option>
                            <option v-for="each in categoryData" :value="each.id" > {{each.name}} </option>
                        </select>
                        <div class="error-report" v-if="error != null && error.category !== undefined"> {{error.category[0]}} </div>
                    </div>

                </form>

                <div class="modal-footer border-0">

                    <button type="button" class="btn btn-secondary py-2 width-95" @click="closeManageBlogModal()">
                        Close
                    </button>

                    <button type="submit" class="btn btn-theme py-2 width-95">
                        Save
                    </button>
                    <button type="submit" class="btn btn-theme py-2 width-95">
                        Save
                    </button>

                </div>

            </form>

        </div>
    </div>

    <!-- Blog delete modal -->
    <div class="modal fade" id="deleteBlogModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <!-- Form blog delete -->
            <form class="modal-content rounded-3 border-0 p-4">

                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel"> Delete Blog </h1>
                    <button type="button" class="btn-close shadow-none" @click="closeBlogDeleteModal()"></button>
                </div>

                <div class="modal-body border-0">
                    <div class="bi bi-trash2 m-0 p-0 text-center text-danger" style="font-size: 65px"></div>
                    <div class="mb-3 text-center fs-4"> Are you sure ?</div>
                </div>

                <div class="modal-footer border-0 d-flex justify-content-between align-items-center">

                    <div class="col-5">
                        <button type="button" class="btn btn-secondary py-2 w-100"
                                @click="closeBlogDeleteModal()">
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

    <!-- category list modal -->
    <div class="modal fade" id="categoryListModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content rounded-3 border-0 p-4">

                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">
                        Category
                    </h1>
                    <button type="button" class="btn-close shadow-none" @click="closeCategoryListModal()"></button>
                </div>

                <div class="modal-body border-0">
                    <div class="d-flex align-items-center justify-content-between gap-3">
                        <input type="text" name="keyword" v-model="listCategoryParam.keyword" @keyup="searchCategoryData()" class="form-control shadow-none" required autocomplete="off" placeholder="Search here...">
                        <button type="submit" class="btn btn-theme" @click="openCategoryManageModal(null)">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                    </div>

                    <div class="w-100 height-450 d-flex justify-content-center align-items-center border rounded-3 mt-4" v-if="listCategoryLoading">
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                    <div class="w-100 height-450 d-flex justify-content-center align-items-center border rounded-3 mt-4 text-secondary fw-semibold flex-column" v-if="categoryData.length === 0 && !listCategoryLoading">
                        No data founded.
                    </div>

                    <div class="mt-4 height-500 scrollable" v-if="categoryData.length > 0 && !listCategoryLoading">
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th style="min-width: 200px; max-width: 200px;">
                                            <div class="p-2">
                                                Category Name
                                            </div>
                                        </th>
                                        <th style="min-width: 100px; max-width: 100px;" class="text-end">
                                            <div class="p-2">
                                                Action
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="each in categoryData">
                                        <td>
                                            <div class="p-2">
                                                {{each.name}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="p-2">
                                                <div class="d-flex align-items-center justify-content-end gap-2">
                                                    <button type="button" class="btn border-0 btn-action text-secondary width-35 height-35 d-flex justify-content-center align-items-center rounded-circle" @click="openCategoryManageModal(each.id)">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button type="button" class="btn border-0 btn-action text-danger width-35 height-35 d-flex justify-content-center align-items-center rounded-circle" @click="openCategoryDeleteModal(each.id)">
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

    <!-- category manage modal -->
    <div class="modal fade" id="categoryManageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <form @submit.prevent="manageCategory()" class="modal-content rounded-3 border-0 p-4">

                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">
                        <span v-if="this.categoryParam.id === undefined"> Create </span>
                        <span v-if="this.categoryParam.id !== undefined"> Edit </span>
                        Category
                    </h1>
                    <button type="button" class="btn-close shadow-none" @click="closeCategoryManageModal()"></button>
                </div>

                <div class="modal-body border-0">

                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" name="name" class="form-control shadow-none" autocomplete="off" placeholder="Category name" v-model="categoryParam.name">
                        <div class="error-report" v-if="categoryError != null && categoryError.name !== undefined"> {{categoryError.name[0]}} </div>
                    </div>

                </div>

                <div class="modal-footer border-0 d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-secondary width-100" @click="closeCategoryManageModal()">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-theme width-100" v-if="!manageCategoryLoading">
                        <span v-if="this.categoryParam.id === undefined"> Save </span>
                        <span v-if="this.categoryParam.id !== undefined"> Update </span>
                    </button>
                    <button type="button" class="btn btn-theme width-100 height-38" v-if="manageCategoryLoading">
                        <div class="spinner-border text-white width-15 height-15" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- category Delete modal -->
    <div class="modal fade" id="categoryDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <form @submit.prevent="deleteCategory()" class="modal-content rounded-3 border-0 p-4">

                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">
                        Delete Category
                    </h1>
                    <button type="button" class="btn-close shadow-none" @click="closeCategoryDeleteModal()"></button>
                </div>

                <div class="modal-body border-0">
                    <div class="bi bi-trash2 m-0 p-0 text-center text-danger" style="font-size: 65px"></div>
                    <div class="mb-3 text-center fs-4"> Are you sure ?</div>
                </div>

                <div class="modal-footer border-0 row justify-content-between align-items-center">
                    <div class="col-5 p-0">
                        <button type="button" class="btn btn-secondary w-100" @click="closeCategoryDeleteModal()">
                            Cancel
                        </button>
                    </div>
                    <div class="col-5 p-0">
                        <button type="submit" class="btn btn-theme w-100" v-if="!deleteCategoryLoading">
                            Submit
                        </button>
                        <button type="button" class="btn btn-theme w-100 height-38" v-if="deleteCategoryLoading">
                            <span class="spinner-border text-white width-15 height-15" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </span>
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

</template>

<script>
import apiRoutes from "@/app/api/apiRoutes.js";
import apiServices from '@/app/api/apiServices.js'
import axios from "axios";

import {createToaster} from "@meforma/vue-toaster";
const toaster = createToaster({
    position: 'top-right',
});

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
            },
            listParam: {
                keyword: '',
                page: 1,
                limit: 10,
            },
            listCategoryParam: {
                keyword: '',
                page: 1,
                limit: 10,
            },
            categoryData: [],
            categoryParam: {
                name: '',
            },
            blogData: [],
            listCategoryLoading: false,
            listBlogLoading: false,
            manageCategoryLoading: false,
            singleCategoryLoading: false,
            deleteCategoryLoading: false,
            manageBlogLoading: false,
            uploadLoading: false,
            current_page: 1,
            searchTimeout: null,
            error: null,
            categoryError: null,
            blogError: null,
        }
    },
    mounted() {
        this.listCategory();
        this.listBlog();
    },
    methods: {

        // Function of open manage model
        openManageBlogModal() {
            const myModal = new bootstrap.Modal("#manageBlogModal", {keyboard: false});
            myModal.show();
        },

        // Function of close manage modal
        closeManageBlogModal() {
            let myModalEl = document.getElementById('manageBlogModal');
            let modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        },

        // Function of open manage model
        openDeleteBlogModal() {
            const myModal = new bootstrap.Modal("#deleteBlogModal", {keyboard: false});
            myModal.show();
        },

        // Function of close manage modal
        closeBlogDeleteModal() {
            let myModalEl = document.getElementById('deleteBlogModal');
            let modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        },

        // Function of open category manage model
        openCategoryListModal() {
            const myModal = new bootstrap.Modal("#categoryListModal", {keyboard: false});
            myModal.show();
        },

        // Function of close manage modal
        closeCategoryListModal() {
            let myModalEl = document.getElementById('categoryListModal');
            let modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        },

        // Function of open category manage model
        openCategoryManageModal(data = null) {
            if (data !== null) {
                this.singleCategory(data);
            }else {
                this.categoryParam = {
                    name: '',
                }
            }
            this.closeCategoryListModal();
            const myModal = new bootstrap.Modal("#categoryManageModal", {keyboard: false});
            myModal.show();
        },

        // Function of close category manage modal
        closeCategoryManageModal() {
            this.categoryError = null;
            this.openCategoryListModal();
            let myModalEl = document.getElementById('categoryManageModal');
            let modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        },

        // Function of open category manage model
        openCategoryDeleteModal(data) {
            this.categoryParam.id = data
            this.closeCategoryListModal();
            const myModal = new bootstrap.Modal("#categoryDeleteModal", {keyboard: false});
            myModal.show();
        },

        // Function of close category manage modal
        closeCategoryDeleteModal() {
            this.openCategoryListModal();
            let myModalEl = document.getElementById('categoryDeleteModal');
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

        // Function of category list api callback
        listCategory() {
            this.listCategoryLoading = true;
            this.listCategoryParam.page = this.current_page;
            axios.get(apiRoutes.categories, {params: this.listCategoryParam}, {headers: apiServices.headerContent}).then((response) => {
                this.listCategoryLoading = false;
                this.categoryData = response?.data?.data;
            }).catch(err => {
                this.listCategoryLoading = false;
                let res = err?.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                } else {
                    toaster.error('Server error!')
                }
            })
        },

        // Function of search category data
        searchCategoryData() {
            clearTimeout(this.listCategoryLoading);
            this.listCategoryLoading = setTimeout(() => {
                this.listCategory();
            }, 1000);
        },

        // Function of manage category api callback
        manageCategory() {
            if(this.categoryParam.id === undefined || null || '') {
                this.createCategory();
            }else{
                this.updateCategory();
            }
        },

        // Function of category create api callback
        createCategory() {
            this.manageCategoryLoading = true;
            axios.post(apiRoutes.categories, this.categoryParam, {headers: apiServices.headerContent}).then((response) => {
                this.manageCategoryLoading = false;
                this.closeCategoryManageModal();
                this.listCategory();
                toaster.info('Category created successfully');
            }).catch(err => {
                this.manageCategoryLoading = false;
                let res = err?.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.categoryError = res?.data?.errors;
                } else {
                    toaster.error('Server error!')
                }
            })
        },

        // Function of category update api callback
        updateCategory() {
            this.manageCategoryLoading = true;
            axios.patch(apiRoutes.categories+'/'+this.categoryParam.id, this.categoryParam, this.categoryParam, {headers: apiServices.headerContent}).then((response) => {
                this.manageCategoryLoading = false;
                this.closeCategoryManageModal();
                this.listCategory();
                toaster.info('Category updated successfully');
                apiServices.clearErrorHandler();
            }).catch(err => {
                this.manageCategoryLoading = false;
                let res = err?.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.categoryError = res?.data?.errors;
                } else {
                    toaster.error('Server error!')
                }
            })
        },

        // Function of category delete api callback
        deleteCategory() {
            this.deleteCategoryLoading = true;
            axios.delete(apiRoutes.categories+'/'+this.categoryParam.id, {headers: apiServices.headerContent}).then((response) => {
                this.deleteCategoryLoading = false;
                this.closeCategoryDeleteModal();
                this.listCategory();
                toaster.info('Category deleted successfully');
            }).catch(err => {
                this.deleteCategoryLoading = false;
                let res = err?.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                } else {
                    toaster.error('Server error!')
                }
            })
        },

        // Function of single category
        singleCategory(data) {
            axios.get(apiRoutes.categories+'/'+data, {headers: apiServices.headerContent}).then((response) => {
                this.categoryParam = response?.data;
            })
        },

        manageBlog(){
            if(this.formData.id === undefined || null || '') {
                this.createBlog();
            }else{
                this.updateBlog();
            }
        },

        // Function of blog create api callback
        createBlog() {
            this.manageBlogLoading = true;
            axios.post(apiRoutes.blogs, this.formData, {headers: apiServices.headerContent}).then((response) => {
                this.manageBlogLoading = false;
                this.closeManageBlogModal();
                this.listBlog();
                toaster.info('Blog created successfully');
            }).catch(err => {
                this.manageBlogLoading = false;
                let res = err?.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.blogError = res?.data?.errors;
                } else {
                    toaster.error('Server error!')
                }
            })
        },

        // Function of blog update api callback
        updateBlog() {
            this.manageBlogLoading = true;
            axios.post(apiRoutes.blogs, this.formData, {headers: apiServices.headerContent}).then((response) => {
                this.manageBlogLoading = false;
                this.closeManageBlogModal();
                this.listBlog();
                toaster.info('Blog created successfully');
            }).catch(err => {
                this.manageBlogLoading = false;
                let res = err?.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                    this.blogError = res?.data?.errors;
                } else {
                    toaster.error('Server error!')
                }
            })
        },

        // Function of blog list api callback
        listBlog() {
            this.listBlogLoading = true;
            this.listParam.page = this.current_page;
            axios.get(apiRoutes.blogs, {params: this.listParam}, {headers: apiServices.headerContent}).then((response) => {
                this.listBlogLoading = false;
                this.blogData = response?.data?.data;
            }).catch(err => {
                this.listBlogLoading = false;
                let res = err?.response;
                if (res?.data?.errors !== undefined) {
                    apiServices.ErrorHandler(res?.data?.errors);
                } else {
                    toaster.error('Server error!')
                }
            })
        },

        // Function of search category data
        searchBlogData() {
            clearTimeout(this.listBlogLoading);
            this.listBlogLoading = setTimeout(() => {
                this.listBlog();
            }, 1000);
        },

        // Function of upload file
        uploadFile(event) {
            this.uploadLoading = true;
            let file = event.target.files[0];
            let formData = new FormData();
            formData.append("file", file)
            formData.append("media_type", 1);
            apiServices.upload(apiRoutes.fileUpload, formData, (res) => {
                event.target.value = ''
                this.uploadLoading = false
                if (res) {
                    this.uploadedImageId = res?.data?.id
                    this.formData.avatar = res?.data?.full_file_path
                } else {
                    this.error = res.errors
                }
            })
        },

        // Function of delete file
        deleteFile() {
            this.uploadLoading = true;
            apiServices.delete(apiRoutes.fileDelete+`/${this.uploadedImageId}`, {}, (res) => {
                if(res) {
                    this.uploadLoading = false;
                    this.formData.avatar = null;
                } else {
                    this.error = res.errors
                }
            });
        },

    }
}

</script>
