<template>


  <div class="content">
    <section class="flats mb-5">
      <div class="video-container">
        <video autoplay muted loop>
          <source src="/img/video.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
      </div>
      <h1>Appartamenti</h1>
      
    </section>

    <div class="container">
      <div class="nav-bar d-flex"> 
        <div class="container">
          <div class="row">
            <div class="col-8 box p-0 border-right d-flex align-items-center">
              <input type="text" placeholder="Dove vuoi andare?">
            </div>
            <div class="col-4 box p-2 search justify-content-center align-items-center d-flex">
              <i class="fa fa-search text-white bg-dark mr-3" aria-hidden="true"></i>Cerca appartamenti
            </div>
          </div>
        </div>
      </div>
    </div>

    <Card 
    v-for="flat in flats"
    :key="`flat${flat.id}`"
    :flat="flat"/>


    <Card />
      

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
        console.log('Appartamenti:', this.flats);
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

  .nav-bar{
    border: 1px solid lightgray;
    border-radius: 40px;
  }
  .box{
    color: black;
    // border-right: 1px solid lightgray;
    // border-radius: 40px;
    // border: 1px solid lightgray;

    &:hover{
      cursor: pointer;
    }

  }

  input{
    border: none;
    box-sizing: border-box;
    text-decoration: none;
    width: 100%;
    border-radius: 40px;
    padding: 5px;
    padding-left: 15px !important;

    &:hover{
      cursor: pointer;
    }

    &:focus{
      outline: none !important;
      border: none;
    }
    
  }

  .fa-search::before{
    background-color: black;
  }

  .search{
    background-color: black;
    border-top-right-radius: 40px;
    border-bottom-right-radius: 40px;
    color: white;
    
  }
</style>