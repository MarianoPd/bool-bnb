<template>
  <section class="card">
    <div class="container">

      <div 
        v-for="(flat, index) in flats" :key="index"
        class="row border-bottom mt-5">
      
        <!-- v-for="flat in flats" :key="`categ${flat.id}`" -->

        <div class="col-4">
          <div class="">
            <img :src="flat.cover" alt="Foto non disponibile">
          </div>
        </div>

        <div class="col-4">
          <h2>{{flat.title}}</h2>

          <p>
            {{flat.address}}, {{flat.city}}, {{flat.province}}
          </p>

        </div>
        <div class="col-4 d-flex flex-column align-items-center">
          <h2>A partire da</h2>
          <h2>250$</h2>
          <div @click="isActive = true" class="btn btn-outline-dark">More Info</div>
        </div>
      </div>

      
      <Popup 
        class="notVisible" 
        :class="{ active: isActive }" 
        @closePopup = "notActive" 
      />
      
    </div>

  </section>
</template>

<script>
import Popup from './Popup.vue'
export default {
  name: 'Card',
  components: {
    Popup
  },
  props:{
    'flats': Array
  },
  data(){
    return{
      isActive: false,
    }
  },
  methods: {
   notActive(){
     this.isActive = false;
   }
  },
  computed:{

  }
}
</script>

<style lang="scss" scoped>

.notVisible{
  display: none;
}
.active{
    display: block;
  }

.card{
  border: none;
}

</style>