<template>

  <main>
    <Home />
    <Footer />
    <!-- <Flats /> -->
    <!-- <About />  -->
  </main>

</template>

<script>
import Home from './Home.vue'
import Flats from './Flats.vue'
import About from './About.vue'
import Footer from './Footer.vue'
export default {
  name: 'Main',
  components:{
    Home,
    Flats,
    About,
    Footer
  }
}
</script>

<style lang="scss" scoped>
main{
  height: 100vh;

}
</style>