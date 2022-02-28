<template>

<div>
  <main>
    <router-view></router-view>
  </main>
    <Footer />
</div>
  
</template>

<script>
import Footer from './components/Footer.vue'
export default {
 name: 'App',
 components: {
   Footer,
 }
}
</script>

<style lang="scss">

</style>