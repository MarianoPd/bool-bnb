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

    <!-- <div class="container">
      <div class="nav-bar d-flex"> 
        <div class="container">
          <div class="row">
            <div class="col-8 box p-0 border-right d-flex align-items-center">
              <input
                v-model="searchAddress"
                v-on:keyup.enter="addressClicked"
                type="text" 
                placeholder="Dove vuoi andare?">
            </div>
            <div class="col-4 box p-2 search justify-content-center align-items-center d-flex">
              <button 
                @click="addressClicked"
                class="search d-flex justify-content-center align-items-center bg-dark">
                  <i class="fa fa-search text-white bg-dark" aria-hidden="true"></i>
                </button>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="wrap">
      <div class="search">
          <input class="searchTerm" placeholder="Dove vuoi andare?"
          v-model="searchAddress"
          v-on:keyup.enter="addressClicked"
          type="text">
          <button 
          @click="addressClicked"
          type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
      </div>
    </div>


    <div v-if="flats.length !== 0">
      <Card         
        v-for="flat in flats"
        :key="`flat${flat.id}`"
        :flat="flat"
      />
    </div>
    <div v-else class="text-center mt-5">
      <h1>Non ci sono risultati per questa ricerca</h1>
    </div>
     
    
    

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
      page_title: 'Ecco la lista di appartamenti',
      searchAddress: '',
    }
    
  },

  methods:{
    getFlats(){
      axios.get(this.baseUrl + '/api/flats')
      .then(res =>{
        this.flats = res.data;
        console.log('Appartamenti:', this.flats);
      });
    },
    addressClicked(){
        tt.services.fuzzySearch({
            key: 'XiRMXj5sejVWEGY8Ze4M4Fq1PhYyKW4I',
            query: this.searchAddress,
        }).then(res => {
            // salvo valore lat
            // const latInput = document.getElementById('latitude');
            //console.log('RISULTATI',res);
            //console.log(res.results);
            if(res.results.length !== 0){
              const latitude = res.results[0].position.lat;

              // // salvo valore long
              // const longInput = document.getElementById('longitude');
              const longitude = res.results[0].position.lng;
              console.log(latitude, longitude);
              this.getSearch(latitude, longitude);
            }
            this.flats = [];
            

        });
    },

    getSearch(lat,lon){
      axios.get(this.baseUrl + '/api/flats/search/' + lat + '/' + lon)
        .then(res =>{
          
          this.flats = res.data;
          console.log(res.data);
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
    }
    
  }

  .fa-search::before{
    background-color: black;
  }

  // .search{
  //   background-color: black;
  //   border-top-right-radius: 40px;
  //   border-bottom-right-radius: 40px;
  //   color: white;
    
  // }


// css navbar

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid black;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: black;
}

.searchTerm:focus{
  color: black;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid black;
  background: black;
  text-align: center;
  color: white;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 725px;
  left: 50%;
  transform: translate(-50%, -50%);
}

</style>