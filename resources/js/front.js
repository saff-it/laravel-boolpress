import VueRouter from 'vue-router';

window.Vue = require('vue');

Vue.use(VueRouter)

import App from './views/App';
import router from './router';
import Vue from 'vue';

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});