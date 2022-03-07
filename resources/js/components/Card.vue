<template>
  <section class="card">
    <div class="container">

      <div class="row border-bottom mt-3 pb-3">

        <div class="col-4">


          <div class="">
            <img class="w-100 h-200px" :src="flat.cover">

          </div>
        </div>

        <div class="col-4">
          <h2>{{flat.title}}</h2>

          <p>
            {{flat.address}}, {{flat.city}}, {{flat.province}}
          </p>

        </div>
        <div class="col-4 d-flex flex-column align-items-center">
          <!-- <h2>A partire da</h2>
          <h2>250$</h2> -->
          <!-- <div @click="isActive = true" class="btn btn-outline-dark">More Info</div> -->
          <div @click="isActive = true" class="btn btn-outline-dark">
            <router-link  :to="{ name:'detail', params: { flat: flat} }">More Info</router-link>
          </div>
        </div>
      </div>

      
      <!-- <Popup 
        class="popup" 
        :class="{ active: isActive }" 
        @closePopup = "notActive" 
        :flat="flat"/> -->
      
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
    'flat': Object
  },
  data(){
    return{
      // isActive: false,
    }
  },
  methods: {
  //  notActive(){
  //    this.isActive = false;
  //  }
  },
  computed:{

  }
}
</script>

<style lang="scss" scoped>

.popup{
  display: none;
  // transform: scale(0);
  transition: 0.5s;
  
}
.active{
    display: block;
    // transform: scale(1);
  }

.card{
  border: none;

  .img-cont{
    max-width: 100px;
  }
}

.h-200px{
  max-height: 200px;
}

</style>