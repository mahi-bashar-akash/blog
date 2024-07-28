<template>

    <div class="admin-sidebar-header">
        <router-link :to="{name: 'dashboard'}" class="text-decoration-none d-flex justify-content-start align-items-center" @click="sidebarClose()">
            <img :src="`/images/logo.png`" class="img-fluid" width="30" alt="logo">
            <span class="text-theme ms-1 fw-bold none-res-text">
                Npvider
            </span>
        </router-link>
        <button type="button" class="btn border-0 sidebar-close" @click="sidebarClose()">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>
    <div class="admin-sidebar-body">
        <router-link :to="{name: 'dashboard'}" class="admin-sidebar-link" @click="sidebarClose()">
            <i class="bi bi-speedometer"></i>
            <span class="none-res-text ms-1"> Dashboard </span>
        </router-link>
        <router-link :to="{name: 'categories'}" class="admin-sidebar-link" @click="sidebarClose()">
            <i class="bi bi-link-45deg"></i>
            <span class="none-res-text ms-1"> Category Management </span>
        </router-link>
        <router-link :to="{name: 'blogs'}" class="admin-sidebar-link" @click="sidebarClose()">
            <i class="bi bi-book"></i>
            <span class="none-res-text ms-1"> Blog Management </span>
        </router-link>
        <router-link :to="{name: 'users'}" class="admin-sidebar-link" @click="sidebarClose()">
            <i class="bi bi-people"></i>
            <span class="none-res-text ms-1"> User Management </span>
        </router-link>
    </div>

</template>

<script>

export default {
    data(){
        return {  }
    },
    mounted() {  },
    methods: {

        // Function of sidebar close
        sidebarClose(){
            let sidebar = document.querySelector('.admin-sidebar');
            sidebar.classList.remove('active');
        },

    }
}

</script>
