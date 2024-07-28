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
import Header from "./components/Header";
import Sidebar from "./components/Sidebar";

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
