
window.Vue = require('vue');
window.axios = require('axios'); 

import router from './routes';
//import Axios from 'axios';


//Vue.component('header-component', require('./components/Header.vue').default);

import App from './App.vue';

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App),

});

