<template>

  <div>
  <section class="flats">

    <div class="video-container">
      <video autoplay muted loop>
        <source src="/img/video.mp4" type="video/mp4">
      </video>
      <div class="overlay"></div>
    </div>
    <h1>Appartamenti</h1>

  </section>

  <section class="text">
    <div class="container">
      <div class="row">
        <div class="col-12 border-bottom">
          <h1 class="my-3">I nostri Appartamenti</h1>
        </div>
      </div>
      <div class="row mt-5 border-bottom">
        <div class="col-3 border">
          <div class="py-2">Check-In</div>
        </div>
        <div class="col-3 border">
          <div class="py-2">Check-Out</div>
        </div>
        <div class="col-3 border">
          <div class="py-2">Persone</div>
        </div>
        <div class="col-3 btn btn-outline-dark border">
          <div class="py-2">
            Cerca
          </div>
        </div>
      </div>

      <div class="row border-bottom mt-5">
        <div class="col-4">
          <div class="">
            <img src="https://static.wixstatic.com/media/fde015_6c05c2f649564c37a7b5acfd3a848e5b.jpg/v1/fill/w_240,h_170,q_85,usm_0.66_1.00_0.01/fde015_6c05c2f649564c37a7b5acfd3a848e5b.jpg" alt="">
          </div>
          
        </div>
        <div class="col-4">
          <h2>Junior Suite</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor itaque voluptates beatae adipisci quibusdam minima hic sint. Possimus sunt saepe obcaecati quasi earum optio, illum at, voluptatem blanditiis magnam inventore?</p>
        </div>
        <div class="col-4 d-flex flex-column align-items-center">
          <h2>A partire da</h2>
          <h2>250$</h2>
          <div class="btn btn-outline-dark">More Info</div>
        </div>
      </div>

      <div class="row border-bottom mt-5">
        <div class="col-4">
          <div class="">
            <img src="https://static.wixstatic.com/media/fde015_597c7d9710e44a9d91514e0ac84fb653.jpg/v1/fill/w_240,h_170,q_85,usm_0.66_1.00_0.01/fde015_597c7d9710e44a9d91514e0ac84fb653.jpg" alt="">
          </div>
          
        </div>
        <div class="col-4">
          <h2>Junior Suite</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor itaque voluptates beatae adipisci quibusdam minima hic sint. Possimus sunt saepe obcaecati quasi earum optio, illum at, voluptatem blanditiis magnam inventore?</p>
        </div>
        <div class="col-4 d-flex flex-column align-items-center">
          <h2>A partire da</h2>
          <h2>250$</h2>
          <div class="btn btn-outline-dark">More Info</div>
        </div>
      </div>

      <div class="row border-bottom mt-5">
        <div class="col-4">
          <div class="">
            <img src="https://static.wixstatic.com/media/fde015_6159dcce72024a789a3df21e95e8d495.jpg/v1/fill/w_240,h_170,q_85,usm_0.66_1.00_0.01/fde015_6159dcce72024a789a3df21e95e8d495.jpg" alt="">
          </div>
          
        </div>
        <div class="col-4">
          <h2>Junior Suite</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor itaque voluptates beatae adipisci quibusdam minima hic sint. Possimus sunt saepe obcaecati quasi earum optio, illum at, voluptatem blanditiis magnam inventore?</p>
        </div>
        <div class="col-4 d-flex flex-column align-items-center">
          <h2>A partire da</h2>
          <h2>250$</h2>
          <div class="btn btn-outline-dark">More Info</div>
        </div>
      </div>
      

    </div>
    
  </section>
  
  </div>
</template>

<script>
export default {
  name: 'Flats',
  data(){
    return{
      flats: [],
      baseUrl: 'http://127.0.0.1:8000',
    }

  },
  methods:{
    getFlats(){
      //console.log(this.baseUrl + '/api/flats');

      axios.get(this.baseUrl + '/api/flats')
        .then(res =>{
          //console.log(res.data);
          this.flats = res.data;
        })
      
    }
  },

  mounted(){
    this.getFlats();
  }



}
</script>

<style lang="scss" scoped>
.flats{
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  overflow: hidden;
  width: 100%;
  //height: 100vh;
  height: 600px;
  color: black;

  h1{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-align: center;
    font-size: 6rem;
    z-index: 1;
    color: white;
    opacity: 0.9;
  }

  .video-container{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;

    .overlay{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba($color: #000000, $alpha: 0.1);
    }
  }

  .text{
    
    
  }
  
  
}
</style>