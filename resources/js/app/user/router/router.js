import {createRouter, createWebHistory} from "vue-router";

import layout from './../layouts/layout.vue'
import home from './../pages/home.vue'
import blogDetails from './../pages/details.vue'
import login from './../pages/login.vue'
import forgot from './../pages/forgot.vue'

import profileLayout from './../pages/profile/layout/layout.vue'
import userDetails from './../pages/profile/pages/profile.vue'

const title = window.core.APP_NAME
const root_url = "/user/";
const routes = [
    {
        path: root_url, name: 'adminLayout', component: layout,
        children: [
            { path: 'home', name: 'home', component: home, meta: { title: title + ' - home' } },
            { path: 'blog/details', name: 'blogDetails', component: blogDetails, meta: { title: title + ' - blog details' } },
            { path: 'login', name: 'login', component: login, meta: { title: title + ' - login' } },
            { path: 'forgot', name: 'forgot', component: forgot, meta: { title: title + ' - forgot' } },

            {
                path: 'profile/', name: 'profileLayout', component: profileLayout,
                children: [
                    { path: 'user/cetails', name: 'userDetails', component: userDetails, meta: { title: title + ' - user details' } },
                ]
            }

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
