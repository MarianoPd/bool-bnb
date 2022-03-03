<template>

  <section class="home">

    <div class="carousel">
      <img :src="houses[counter]" alt="">
      <div class="overlay"></div>
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
          <a href="http://127.0.0.1:8000/appartamenti">BOOK A ROOM</a>
        </span>
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
        '/img/house3.jpg',
        '/img/house5.jpg',
        '/img/house6.jpeg',
        '/img/house7.jpeg',
        '/img/house8.jpeg',
        '/img/house9.jpeg',
        '/img/house10.jpeg',
      ],
      counter: 0,
    }
  },
  methods: {
    carouselPopUp(){
      this.counter++;
      if(this.counter > this.houses.length -1){
        this.counter = 0;
      }
    },
  },
  mounted(){
    setInterval(this.carouselPopUp, 4000);
  }
}

</script>

<style lang="scss" scoped>
.home{
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  
  .carousel{
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    height: 100vh;
  }

  h1{
    text-align: center;
    font-size: 5rem;
    z-index: 1;
  }

  img{
    width: 100%;
    height: 100%;
    opacity: 0.95;
    object-fit: cover;
    object-position: center;
  }

  .overlay{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba($color: #000000, $alpha: 0.2);
  }

  .text-home{
    border-radius: 2px;
    z-index: 1;
    
    a{
      color: white;
      text-decoration: none;
    }

    span{
      text-align: center;
      font-size: 5rem;
      font-size: 3.5rem;
      font-weight: 100;
      cursor: pointer;
      transition: 0.5s;


      &:hover{
        text-shadow: 0 0 5px black;
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