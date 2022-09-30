import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import AboutPage from './pages/AboutPage.vue';
import HomePage from './pages/HomePage.vue';
import SinglePost from './pages/SinglePost.vue';
import TagsPage from './pages/TagsPage.vue';
import SingleTag from './pages/SingleTag.vue';
import CategoriesPage from './pages/CategoriesPage.vue';
import PageNotFound from './pages/errors/PageNotFound.vue';
import SingleCategory from './pages/SingleCategory.vue';

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
        },
        {
            path: '/categories',
            name: 'categories',
            component: CategoriesPage
        },
        {
            path: '/categories/:id',
            name: 'singleCategory',
            component: SingleCategory
        },
        {
            path: '*',
            name: '404',
            component: PageNotFound
        }
    ]
});

export default router;