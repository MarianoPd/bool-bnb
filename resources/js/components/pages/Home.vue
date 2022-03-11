<template>

  <div>


    <section class="home">

      <div class="carousel">
        <img :src="houses[counter]" alt="">
        <div class="overlay"></div>
      </div>

      <!-- <div class="nav-bar d-flex"> 
          <div class="container">
            <div class="row">
              <div class="col-8 box p-0 border-right d-flex align-items-center">
                <input
                v-model="searchAddress"
                v-on:keyup.enter="addressClicked"
                type="text" 
                placeholder="Dove vuoi andare?">
              </div>
              <div class="col-1 offset-3 box p-0">
                <button 
                @click="addressClicked"
                class="search d-flex justify-content-center align-items-center bg-dark">
                  <i class="fa fa-search text-white bg-dark" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
      </div> -->
      <!-- </div>  -->

      <div class="text-home">
        <div>
          <span @click="isActive = !isActive" class="mx-3">
            <!-- <a href="http://127.0.0.1:8000/appartamenti">BOOK A ROOM</a> -->
            <a href="#promotion">In Primo Piano</a>
          </span>
        </div>
      </div>

    </section>


    <section  id="promotion">
      <div  class="container pt-5 pb-5 text-center">
      <h1>I migliori appartamenti scelti soloper te!</h1>
      
        <div v-if="flats.length !== 0"  class="pt-5">

          <div v-if="flats.length !== 0">
            <Card         
              v-for="flat in flats"
              :key="`flat${flat.id}`"
              :flat="flat"
            />
          </div>

          <!-- risposta in caso di nessun risultato -->
          <div v-else class="text-center mt-5 mb-5">
            <h1>Non ci sono risultati per questa ricerca</h1>
          </div>

        </div>
      </div>
      <!-- <div class="d-flex justify-content-center">
        <div class="pagination" v-if="paginate">
            <button
                @click="getApi(pagination.current - 1)"
                :disabled = "pagination.current === 1"
            > &#8592; </button>

            <button
                v-for="i in pagination.last"
                :key="i"
                @click="getApi(i)"
                :disabled = "pagination.current === i"
            >
                {{i}}
            </button>

            <button
                @click="getApi(pagination.current + 1)"
                :disabled = "pagination.current === pagination.last"
            > &#8594; </button>
        </div>
      </div> -->
    
    </section>
</div>
</template>

<script>
import Card from '../Card.vue';
export default {
  name: 'home',
  components: {
    Card,    
  },
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
      searchAddress: '',
      flats: [],
    }
  },
  methods: {
    carouselPopUp(){
      this.counter++;
      if(this.counter > this.houses.length -1){
        this.counter = 0;
      }
    },

    getSponsoredFlats(){
      axios.get('http://127.0.0.1:8000/api/flats/sponsored')
        .then(res=>{
          this.flats = res.data;
          
        }).catch(e=>{
          console.log(e);
        })
    },

    addressClicked(){
        tt.services.fuzzySearch({
            key: 'XiRMXj5sejVWEGY8Ze4M4Fq1PhYyKW4I',
            query: this.searchAddress,
        }).then(res => {
            // salvo valore lat
            // const latInput = document.getElementById('latitude');
            const latitude = res.results[0].position.lat;

            // // salvo valore long
            // const longInput = document.getElementById('longitude');
            const longitude = res.results[0].position.lng;

            // // submit
            // document.getElementById('submitBtn').click();
            console.log(latitude, longitude);
        });
    }
  },
  mounted(){
    setInterval(this.carouselPopUp, 4000);
    this.getSponsoredFlats();
  }
}

</script>

<style lang="scss" scoped>
.home{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  
  .carousel{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;

    img{
      width: 100%;
      height: 100%;
      opacity: 0.95;
      object-fit: cover;
      object-position: center;
    }
    .overlay{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba($color: #000000, $alpha: 0.2);
    }
  }

  .nav-bar{
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translate(-50%, -15%);
    display: flex;
    align-items: center;
    width: 50%;
    padding: 10px 20px;
    border-radius: 40px;
    background-color: white;
    box-shadow: 0px 10px 25px rgba($color: #000000, $alpha: 0.2);
    transition: 0.5s;

    &:hover{
      cursor: pointer;
      box-shadow: 0px 10px 25px rgba($color: #000000, $alpha: 0.2);
    }

    .box{
      color: black;
      //border-right: 1px solid lightgray;
      //border-radius: 40px;
      //border: 1px solid lightgray;

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
      padding-left: 15px !important;

      &:hover{
        cursor: pointer;
      }

      &:focus{
        outline: none !important;
        border: none;
      }
      
    }

    .search{
      width: 40px;
      height: 40px;
      border: 1px solid black;
      border-radius: 50%;
    }
  }

  h1{
    text-align: center;
    font-size: 5rem;
    z-index: 1;
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
  .pagination{
            text-align: center;
            button{
                cursor: pointer;
                padding: 5px;
            }
        }


}

</style>