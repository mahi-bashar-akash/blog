import {createRouter, createWebHistory} from "vue-router";

import authLayout from './../auth/layouts/layout.vue'
import login from './../auth/pages/login.vue'
import register from "./../auth/pages/register.vue";
import forget from "./../auth/pages/recover.vue";

import layout from './../layouts/layout.vue'
import dashboard from './../pages/dashboard.vue'

const title = window.core.APP_NAME
const root_url = "/admin/";
const routes = [

    {
        path: root_url, name: 'authLayout', component: authLayout,
        children: [
            { path: 'auth/login', name: 'login', component: login, meta: { title: title + ' - login' } },
            { path: 'auth/registration', name: 'register', component: register, meta: { title: title + ' - register' } },
            { path: 'auth/account-recovery', name: 'forget', component: forget, meta: { title: title + ' - account recovery' } },
        ]
    },

    {
        path: root_url, name: 'adminLayout', component: layout,
        children: [
            { path: 'dashboard', name: 'dashboard', component: dashboard, meta: { title: title + ' - home' } },
        ]
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to,from,savedPosition) {
        if(to.hash) {
            return {
                el: to.hash,
                behavior: 'smooth',
            };
        }else {
            return { top: 0, behavior: 'smooth' };
        }
    }
})

export default router;
