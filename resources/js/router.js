import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import AboutPage from './pages/AboutPage.vue';
import HomePage from './pages/HomePage.vue';
import SinglePost from './pages/SinglePost.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
        {
            path: '/about',
            name: 'about',
            component: AboutPage
        },
        {
            path: '/posts/:id',
            name: 'singlepost',
            component: SinglePost
        }
    ]
});

export default router;