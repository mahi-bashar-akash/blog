import {createRouter, createWebHistory} from "vue-router";

import layout from './../layouts/layout.vue'
import home from './../pages/home.vue'

const title = window.core.APP_NAME
const root_url = "/user/";
const routes = [
    {
        path: root_url, name: 'adminLayout', component: layout,
        children: [
            { path: 'home', name: 'home', component: home, meta: { title: title + ' - home' } },
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
