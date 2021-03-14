require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

Vue.component('home-component', require('./components/HomePage.vue').default);

const router = new VueRouter({ mode: 'history'});
const app = new Vue({
    el: '#app',
});
