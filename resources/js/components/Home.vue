<template>

  <section class="home">
    <div class="carousel">
      <img :src="houses[counter]" alt="">
    </div>

    <div class="nav-bar d-flex">
        <div class="container">
          <div class="row">
            <div class="col-3 box">
              <div>
                <span>Dove</span>
              </div>
            </div>
            <div class="col-3 box">
              <div>
                <span>Numero Stanze</span>
              </div>
            </div>
            <div class="col-3 box">
              <div>
                <span>Numero Letti</span>
              </div>
            </div>
            <div style="border:none;" class="col-3 box">
              <div>
                <span>Aggiungi ospiti</span>
              </div>
            </div>
          </div>
        </div>
      </div>



    <div class="text-home">
      <div>
        <span @click="isActive = !isActive" class="mx-3">
          BOOK A ROOM
        </span>
      </div>
      <div 
        class="text-center level-home"
        :class="{ active: isActive }"
      >
        <div class="btn btn-outline-light">Easy</div>
        <div class="mx-3 btn btn-outline-light">Advanced</div>
        <div class="btn btn-outline-light">Premium</div>
      </div>
      
    </div>

  </section>

</template>

<script>
export default {
  name: 'home',
  data(){
    return{
      houses: [
        '/img/house.jpg',
        '/img/house1.jpg',
        '/img/house3.jpg',
        '/img/house4.jpg',
        '/img/house5.jpg',
      ],
      counter: 0,
      isActive: false
    }
  },
  methods: {
    carousel(){
      this.counter++;
      if(this.counter > this.houses.length -1){
        this.counter = 0;
      }
    },
    
  },

  mounted(){
    setInterval(this.carousel, 4000);
  }


}
  


</script>

<style lang="scss" scoped>
.home{
  box-shadow: inset 0 0 100px black;
  position: relative;
  
  .carousel{
    height: 100vh;
    
  }

  img{
    width: 100%;
    height: 100%;
    opacity: 0.7;
  }

  .text-home{
    border-radius: 2px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(50%);
    transform: translateX(-50%);
    z-index: 98;
    
    span{
      font-size: 50px;
      font-weight: 100;
      cursor: pointer;
      transition: 0.5s;

      &:hover{
        text-shadow: 0 0 40px rgba(0, 0, 0, 0.9);
        
      }
    }

    .level-home{
      display: none;

      &.active{
        display: block;
      }
    }

  }

    .nav-bar{
    display: flex;
    align-items: center;
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translateX(-50%);
    width: 50%;
    height: 50px;
    border-radius: 30px;
    background-color: white;
    box-shadow: 0px 10px 25px rgba($color: #000000, $alpha: 0.2);
    transition: 0.5s;


    &:hover{
      cursor: pointer;
      box-shadow: 0px 10px 25px rgba($color: #000000, $alpha: 0.2);

      
    }

    .box{
      color: black;
      border-right: 1px solid lightgray;
    }
    
    
  }




}
</style>