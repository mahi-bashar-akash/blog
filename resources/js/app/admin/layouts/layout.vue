<template>
    <div class="admin-wrapper">
        <div class="admin-sidebar">
            <Sidebar/>
        </div>
        <div class="admin-content">
            <Header/>
            <div class="admin-content-body">
                <router-view/>
            </div>
        </div>
    </div>
</template>

<script>
import Sidebar from "./includes/Sidebar";
import Header from "./includes/Header";

export default {
    components: {
        Sidebar, Header
    },
    data(){
        return {

        }
    },
    mounted() {  },
    methods: {  }
}

</script>
