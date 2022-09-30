import Vue from 'vue';
import VueRouter from 'vue-router';


Vue.use(VueRouter)


import AboutPage from './pages/AboutPage';
import GalleryPage from './pages/GalleryPage';
import HomePage from './pages/HomePage';

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
            path: '/gallery',
            name: 'gallery',
            component: GalleryPage
        },
        {
            path: '*',
            name: 'pageNotFound',
            component: PageNotFound
        },
    ]
})

export default router;
