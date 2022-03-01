import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);


import Home from './components/pages/Home';
import Flats from './components/pages/Flats';
import About from './components/pages/About';


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
      name: 'error',
      
    }

  ]
  
})

export default router;