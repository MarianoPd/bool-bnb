import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);


import Home from './components/pages/Home';
import Flats from './components/pages/Flats';
import About from './components/pages/About';
import Error404 from './components/pages/Error404.vue';


const router = new VueRouter({
  mode: 'history',

  linkExactActiveClass: 'active',

  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },
    {
      path: '/appartamenti',
      name: 'appartamenti',
      component: Flats,
    },
    {
      path: '/chi-siamo',
      name: 'chi-siamo',
      component: About,
    },
    {
      path: '*',
      component: Error404,
    },
    {
      path: '/appartamenti%',
      component: Error404,
    },
  ]
  
})

export default router;