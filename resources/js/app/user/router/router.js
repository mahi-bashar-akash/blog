import {createRouter, createWebHistory} from "vue-router";

import layout from './../layouts/layout.vue'
import home from './../pages/home.vue'
import blogDetails from './../pages/details.vue'
import terms_conditions from './../pages/terms_&_conditions.vue'
import privacy_policy from './../pages/privacy_&_policy.vue'

import authLayout from './../pages/auth/layout/layout.vue'
import login from './../pages/auth/pages/login.vue'
import registration from './../pages/auth/pages/registration.vue'
import forgot from './../pages/auth/pages/forgot.vue'

import profileLayout from './../pages/profile/layout/layout.vue'
import userDetails from './../pages/profile/pages/profile.vue'
import userBlogManagement from './../pages/profile/pages/blog-management.vue'

const title = window.core.APP_NAME
const userInfo = window.core.UserInfo
const root_url = "/user/";
const routes = [
    {
        path: root_url, name: 'userLayout', component: layout,
        children: [
            { path: 'home', name: 'home', component: home, meta: { title: title + ' - home' } },
            { path: 'blog/details', name: 'blogDetails', component: blogDetails, meta: { title: title + ' - blog details' } },
            { path: 'terms_conditions', name: 'terms_conditions', component: terms_conditions, meta: { title: title + ' - terms & conditions' } },
            { path: 'privacy_policy', name: 'privacy_policy', component: privacy_policy, meta: { title: title + ' - privacy & policy' } },
            {
                path: '', name: 'authLayout', component: authLayout,
                children: [
                    { path: 'login', name: 'login', component: login, meta: { title: title + ' - login' } },
                    { path: 'registration', name: 'registration', component: registration, meta: { title: title + ' - registration' } },
                    { path: 'forgot', name: 'forgot', component: forgot, meta: { title: title + ' - forgot' } },
                ]
            },
            {
                path: '', name: 'profileLayout', component: profileLayout,
                children: [
                    { path: 'details', name: 'userDetails', component: userDetails, meta: { title: title + ' - user details' } },
                    { path: 'blog/management', name: 'userBlogManagement', component: userBlogManagement, meta: { title: title + ' - user blog management' } },
                ]
            }

        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) {
            return {
                el: to.hash,
                behavior: 'smooth',
            };
        } else {
            return { top: 0, behavior: 'smooth' };
        }
    }
});

router.beforeEach((to, from, next) => {
    const isAuthenticated = window.core.UserInfo !== null;

    if (to.matched.some(record => record.name === 'authLayout')) {
        if (isAuthenticated) {
            // Redirect authenticated users from auth routes to home
            next({ name: 'home' });
        } else {
            next(); // Allow access to auth routes
        }
    } else if (to.matched.some(record => record.name === 'profileLayout')) {
        if (!isAuthenticated) {
            // Redirect unauthenticated users from profile routes to login
            next({ name: 'login' });
        } else {
            next(); // Allow access to profile routes
        }
    } else {
        next(); // Allow access to other routes
    }
});

export default router;
