import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import AboutPage from './pages/AboutPage.vue';
import HomePage from './pages/HomePage.vue';
import SinglePost from './pages/SinglePost.vue';
import TagsPage from './pages/TagsPage.vue';
import SingleTag from './pages/SingleTag.vue';

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
            path: '/posts/:slug',
            name: 'singlePost',
            component: SinglePost
        },
        {
            path: '/tags',
            name: 'tags',
            component: TagsPage
        },
        {
            path: '/tags/:id',
            name: 'singleTag',
            component: SingleTag
        }
    ]
});

export default router;