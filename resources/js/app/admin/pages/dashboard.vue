<template>

    <section class="w-100 p-3 bg-white shadow-lg">
        <div
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <div class="breadcrumb pb-0 mb-0">
                <div class="breadcrumb-item pb-0 mb-0">
                    <router-link :to="{name: 'dashboard'}" class="text-decoration-none text-theme">
                        <i class="bi bi-speedometer me-2"></i>
                        Dashboard
                    </router-link>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

            <div class="p-3">
                <div class="card border-0 rounded-0 shadow-lg">
                    <div class="card-header border-0 rounded-0 p-4">
                      Sliders
                    </div>
                    <div class="card-body border-0 rounded-0 text-center">
                        <div class="mb-3"> {{numberFormat(10000)}} </div>
                        <div class="text-secondary"> Summary </div>
                    </div>
                    <div class="card-footer border-0 rounded-0 text-end p-4">
                        <router-link :to="{name: 'sliders'}" class="text-decoration-none text-theme-secondary">
                            Explore <i class="bi bi-caret-right-fill ms-2"></i>
                        </router-link>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="card border-0 rounded-0 shadow-lg">
                    <div class="card-header border-0 rounded-0 p-4">
                      Categories
                    </div>
                    <div class="card-body border-0 rounded-0 text-center">
                        <div class="mb-3"> {{numberFormat(20000)}} </div>
                        <div class="text-secondary"> Summary </div>
                    </div>
                    <div class="card-footer border-0 rounded-0 text-end p-4">
                        <router-link :to="{name: 'categories'}" class="text-decoration-none text-theme-secondary">
                            Explore <i class="bi bi-caret-right-fill ms-2"></i>
                        </router-link>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="card border-0 rounded-0 shadow-lg">
                    <div class="card-header border-0 rounded-0 p-4">
                      Blogs
                    </div>
                    <div class="card-body border-0 rounded-0 text-center">
                        <div class="mb-3"> {{numberFormat(30000)}} </div>
                        <div class="text-secondary"> Summary </div>
                    </div>
                    <div class="card-footer border-0 rounded-0 text-end p-4">
                        <router-link :to="{name: 'blogs'}" class="text-decoration-none text-theme-secondary">
                            Explore <i class="bi bi-caret-right-fill ms-2"></i>
                        </router-link>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="card border-0 rounded-0 shadow-lg">
                    <div class="card-header border-0 rounded-0 p-4">
                      Users
                    </div>
                    <div class="card-body border-0 rounded-0 text-center">
                        <div class="mb-3"> {{numberFormat(40000)}} </div>
                        <div class="text-secondary"> Summary </div>
                    </div>
                    <div class="card-footer border-0 rounded-0 text-end p-4">
                        <router-link :to="{name: 'users'}" class="text-decoration-none text-theme-secondary">
                            Explore <i class="bi bi-caret-right-fill ms-2"></i>
                        </router-link>
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
    methods: {

        // number format
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
