<template>
   <section>
      <Header />
   
      <div class="content">
         <h2>Pagina non trovata!</h2>
         
         <p>
            Non so bene come tu ci sia finito qua, credo ti sia perso...<br>
            Direi di tornare alla <router-link :to="{name: 'home'}">Home</router-link>, che ne dici?
         </p>

         <p>Error-404</p>
      </div>

      <Footer />
   </section>
</template>

<script>
import Header from "../partials/Header.vue";
import Footer from "../partials/Footer.vue";

export default {
   name: "Error404",
   components:{
    Header,
    Footer,
}
}
</script>

<style lang="scss" scoped>
   header{
      background-color: rgb(252, 121, 121);
   }

   .content{
      width: 65%;
      min-height: 70vh;
      margin: 100px auto;

      h2, p{
         margin: 15px 0;
         text-align: center;
      }
   }

   footer{
      background-color: black;
   }

</style>