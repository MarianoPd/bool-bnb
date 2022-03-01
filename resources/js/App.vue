<template>

<div>
  <Header />
  <main>
    <router-view></router-view>
  </main>
    <Footer />
</div>
  
</template>

<script>
import Header from './components/partials/Header.vue'
import Footer from './components/partials/Footer.vue'
export default {
 name: 'App',
 components: {
   Footer,
   Header
 }
}
</script>

<style lang="scss">

</style>