<template>

  <div>
    <div class="popup" :class="{ active: isActive }">
      <div class="header-popup d-flex justify-content-between border-bottom p-3">
        <div>
          <h2>Junior Suite</h2>
        </div>
        <button 
          class="close-btn" 
          @click="$emit('closePopup')"
        >
          &times;
        </button>
      </div>
      <div class="body-popup p-3">
        <div class="container">
          <div class="row">
            <div class="col-8">
              <div class="carousel-popup">
                <img :src="detailsImages[counter]" alt="">
                <div @click="prev" class="prev">&larr;</div>
                <div @click="next" class="next">&rarr;</div>
              </div>
              <div class="row border-bottom mt-3">
                <div class="col-4 "> <strong>Sprecifiche:</strong></div>
                <div class="col-6">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti nobis libero, maiores harum ab tempora veniam quod praesentium alias, provident corporis aperiam cum magnam iste! Unde nulla asperiores quod enim.</p>
                </div>
              </div>
              <div class="row border-bottom mt-3">
                <div class="col-4 "> <strong>Sprecifiche:</strong></div>
                <div class="col-6">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti nobis libero, maiores harum ab tempora veniam quod praesentium alias, provident corporis aperiam cum magnam iste! Unde nulla asperiores quod enim.</p>
                </div>
              </div>
            </div>
            <div class="col-4 border p-3 overflow-hidden">
              <div class="border-left">
                <h4 class="ml-3">From</h4>
                <h4 class="ml-3">250$</h4>
                <h4 class="ml-3">Per Notte</h4>
              </div>
              <div class="border">
                <h6 class="ml-3 py-1">Check-in</h6>
              </div>
              <div class="border">
                <h6 class="ml-3 py-1">Check-out</h6>
              </div>
              <div class="border">
                <h6 class="ml-3 py-1">Ospiti</h6>
              </div>
              <div class="border mb-3">
                <input class="border-0 ml-3 py-1" placeholder="Posizione" type="text" id="query" value="">
              </div>
              <div id="map-div"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-popup"></div>
  </div>
  
</template>

<script>
export default {
  name: 'Popup',
  data(){
    return{
      detailsImages: [
        'https://media.istockphoto.com/photos/contemporary-all-white-bedroom-picture-id532049286?b=1&k=20&m=532049286&s=170667a&w=0&h=-x2hp6YycgRVcq5b0yoRYBMgd4kMQVA45ILhPt52zRU=',
        'https://static.wixstatic.com/media/fde015_de93aa6357c14c439e80f661e7a71e67.jpg/v1/fill/w_649,h_408,q_85,usm_0.66_1.00_0.01/fde015_de93aa6357c14c439e80f661e7a71e67.jpg',
        'https://www.thespruce.com/thmb/mAxTP5LWYXy6z_C0xsIgGHm4hW4=/1777x1333/smart/filters:no_upscale()/beautiful-bathrooms-ideas-4101846-hero-e436124be1664154b7771e3b0d23676f.jpg'
      ],
      counter: 0,
      
    }
  },
  methods: {
    next(){
      this.counter++;
      if(this.counter > this.detailsImages.length -1){
        this.counter = 0;
      }
    },
    prev(){
      this.counter--;
      if(this.counter <= 0){
        this.counter = this.detailsImages.length -1;
      }
    },
    
  },
  

  
}
</script>

<style lang="scss" scoped>
.popup{
  //transform: scale(0);
  position: fixed;
  top: 15%;
  //bottom: 15%;
  right: 15%;
  left: 15%;
  //width: 60%;
  background-color: white;
  opacity: 0.99;
  border-radius: 15px;
  z-index: 1;
  border: 1px solid black;
  box-shadow: 0 0 30px rgba($color: #000000, $alpha: 0.7);

  .header-popup{
    .close-btn{
      border: none;
      cursor: pointer;
      outline: none;
      background: none;
      font-size: 1.25rem;
      font-weight: bold;
    }
  } 

  .body-popup{
    height: 400px;
    overflow: auto;

    .carousel-popup{
      position: relative;
      height: 300px;
      img{
        width: 100%;
        height: 100%;
        opacity: 0.9;
      }

      .prev,
      .next{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: white;
        cursor: pointer;
        background-color: rgba($color: #000000, $alpha: 0.5);
        position: absolute;
        top: 50%;

        &:hover{
          background-color: rgba($color: #000000, $alpha: 0.8);
        }
      }
      .prev{
        left: 10px;
      }
      .next{
        right: 10px;
      }
    }
  }
}

  .overlay-popup{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba($color: #000000, $alpha: 0.7);
  }


  
</style>