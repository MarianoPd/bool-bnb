
window.Vue = require('vue');


//Vue.component('header-component', require('./components/Header.vue').default);

import App from './App.vue';

const app = new Vue({
    el: '#app',
    render: h => h(App),

});