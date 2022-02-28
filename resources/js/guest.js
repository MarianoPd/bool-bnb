
window.Vue = require('vue');

import router from './routes';


//Vue.component('header-component', require('./components/Header.vue').default);

import App from './App.vue';

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App),

});

