<template>
    <div class="admin-wrapper">
        <div class="admin-sidebar">
            <Sidebar/>
        </div>
        <div class="admin-content">
            <div class="admin-content-header d-flex justify-content-between align-items-center">
                <button type="button" class="btn border-0 sidebar-toggle" @click="sidebarOpen()">
                    <i class="bi bi-justify-left"></i>
                </button>
                <div class="nav-item dropdown">
                    <a class="nav-link p-0" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="rounded-circle bg-theme text-white d-flex justify-content-center align-items-center" style="width:45px; height:45px;">
                            {{nameControl(profileName)}}
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li>
                            <a href="javascript:void(0)" class="dropdown-item mb-1">
                                Profile
                            </a>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item">
                                Logout
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="admin-content-body">
                <router-view/>
            </div>
        </div>
    </div>
</template>

<script>
import Sidebar from './includes/sidebar.vue'

export default {
    components: { Sidebar },
    data(){
        return {
            profileName: 'Mahi Bashar Akash',
            isSidebarActive: false,
        }
    },
    mounted() {  },
    methods: {

        // Function of name control
        nameControl(fullName) {
            let words = fullName.split(' ');
            let outPut = ` ${words[0][0].toUpperCase()}${ words[words.length - 1][0].toUpperCase()}`;
            return outPut;
        },

        // Function of sidebar open
        sidebarOpen(){
            let sidebar = document.querySelector('.admin-sidebar');
            sidebar.classList.add('active');
        },

    }
}

</script>
