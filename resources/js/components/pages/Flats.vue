<template>


  <div class="content">
    <section class="flats">
      <div class="video-container">
        <video autoplay muted loop>
          <source src="/img/video.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
      </div>
      <h1>Appartamenti</h1>
      
    </section>
    <div class="container">
      <div class="row">
        <div class="col-12 border-bottom">
          <h1 class="my-3">{{ page_title }}</h1>
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
    </div>


    <Card 
    v-for="flat in flats"
    :key="`flat${flat.id}`"
    :flat="flat"/>

      <!-- prova mappa -->
      <input type="text" id="query" value="">
      <button onclick="search()">
        SEARCH
      </button>
      <div id="map-div"></div>
  </div>
  

</template>

<script>
import Card from '../Card.vue';
export default {
  name: 'Flats',
  components: {
    Card
  },
  data(){
    return{
      flats: [],
      baseUrl: 'http://127.0.0.1:8000',
      page_title: 'Ecco la lista di appartamenti'
    }
  },

  methods:{
    getFlats(){
      axios.get(this.baseUrl + '/api/flats')
      .then(res =>{
        this.flats = res.data;
      });
    }
  },
  mounted(){
    this.getFlats();
  }

}
</script>

<style lang="scss" scoped>
.content{
  margin-bottom: 50px;
}

.flats{
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  overflow: hidden;
  width: 100%;
  //height: 100vh;
  height: 700px;
  color: black;

  h1{
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
}
</style>