<template>
  <section class="card mb-3 ">
    <div class="container ">

      <div class="row mt-3  ">
        <div class="col-12 col-md-4 my-card">
          <div class="img-cont">
            <div class="overlay"></div>
            <img class="w-100 w-md-100 h-200px" :src="flat.cover">

          </div>
        </div>

        <div class="col-12 col-md-4">
          <h2>{{flat.title}}</h2>

          <p>
            {{flat.address}}, {{flat.city}}, {{flat.province}}
          </p>

        </div>
        <div class="col-12 col-md-4 d-flex flex-column align-items-center">
          <!-- <h2>A partire da</h2>
          <h2>250$</h2> -->
          <!-- <div @click="isActive = true" class="btn btn-outline-dark">More Info</div> -->
          <div @click="isActive = true" class="t2-button mt-5 mb-5">
            <router-link  :to="{ name:'detail', query: { slug: flat.slug} }">Dettagli</router-link>
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

.my-card{
  height: 230px;
  .img-cont{
    height: 92%;
    img{
      object-fit: cover;
      object-position: center;
      height: 100%;
    }
  }
}

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
  border-radius: 10px;
  box-shadow: 0  2px 7px rgba($color: #000000, $alpha: 0.7);
  .img-cont{

    position: relative;
    //max-width: 100px;

    img{
      opacity: 0.7;
      object-fit: cover;

      border-radius: 5px;
      box-shadow: 0 0 10px rgba($color: #000000, $alpha: 0.5);
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 5px;
      background-color: rgba($color: #000000, $alpha: 0.5);

    }
  }
}

.h-200px{
  max-height: 250px;
}

.t2-button{
    border-radius: 20px;
    border: 1px solid rgb(46, 45, 45);
    font-weight: 500;
    color: rgb(46, 45, 45);
    text-decoration: none;
    padding: 3px 12px;
    &:hover{
        color: white;
        text-decoration: none;
        background-color: rgb(46, 45, 45);
        transition: all 0.3s;
        //box-shadow: 0  1px 4px rgba($color: #000000, $alpha: 0.7);
        a{
          color:white;
        }
    }
    a{
        text-decoration: none;
        color: rgb(46, 45, 45);
        &:hover{
            color: white;
            text-decoration: none;
        }
    }
}

</style>