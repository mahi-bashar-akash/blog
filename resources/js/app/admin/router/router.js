import {createRouter, createWebHistory} from "vue-router";

import authLayout from './../auth/layouts/layout.vue'
import login from './../auth/pages/login.vue'
import forgot from './../auth/pages/forgot.vue'

import layout from './../layouts/layout.vue'
import dashboard from './../pages/dashboard.vue'

const title = window.core.APP_NAME
const root_url = "/admin/";
const routes = [
    {
        path: root_url + 'auth/', name: 'authLayout', component: authLayout,
        children: [
            { path: 'login', name: 'login', component: login, meta: { title: title + ' - login' } },
            { path: 'forgot', name: 'forgot', component: forgot, meta: { title: title + ' - forgot' } },
        ]
    },
    {
        path: root_url, name: 'adminLayout', component: layout,
        children: [
            { path: 'dashboard', name: 'dashboard', component: dashboard, meta: { title: title + ' - dashboard' } },
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
