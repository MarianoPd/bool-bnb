<template>
    <div>
        <div class="header-bg"></div>


        <div v-if="'id' in flat" class="container t2-container">
            <div class=" d-flex justify-content-between border-bottom p-3">
                <div>
                    <h2>{{ flat.title }}</h2>
                </div>
                <button class="close-btn"
                @click="$router.go(-1)"                 
                >
                    Torna Indietro
                </button>
            </div>
        
            <div v-if="flat.title" class="p-3">

                <div class="row">
                    <div class="col-12 col-md-8 mb-5" >
                        <div class="img-cont">
                            <img :src="flat.cover" alt="">
                        </div>

                        <div class="mt-3">
                            <h5>Indirizzo:</h5>                            
                            <p>{{ flat.city }}, {{ flat.province }}, {{ flat.address }}</p>

                            <h5>Informazioni:</h5>

                            <div class="row m-0">
                                <div class="col-6 border p-3">
                                    <h6>Numero di stanze:</h6>
                                    <div class="d-flex justify-content-around align-items-center">
                                        <h2 class="mr-3">{{flat.room_number}}</h2>
                                        <img width="50px" src="/img/logos/door2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-6 border p-3">
                                        <h6>Numero di bagni:</h6>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <h2 class="mr-3">{{flat.bathroom_number}}</h2>
                                            <img width="50px" src="/img/logos/bathroom.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6 border p-3">
                                        <h6>Numero di letti:</h6>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <h2 class="mr-3">{{flat.bed_number}}</h2>
                                            <img width="50px" src="/img/logos/bedroom.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6 border p-3">
                                        <h6>Metri quadri:</h6>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <h2 class="mr-3">{{flat.square_meters}}</h2>
                                            <img width="50px" src="/img/logos/metri_quadri2.png" alt="">
                                        </div>
                                </div>
                            </div>


                        </div>
                        
                    </div>
                    <div class="col-12 col-md-4 border p-3 overflow-hidden mb-5">

                        <!-- <div class="border-left">
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
                        </div> -->

                        <div v-if="flat.services">
                            <h5>Servizi:</h5>
                            <ul>
                                <li
                                    v-for="(service, i) in flat.services"
                                    :key="`service${i}`"
                                >{{service.name}}</li>
                            </ul>
                            
                        </div>
                        

                        <form v-if="!sended" @submit.prevent="sendMessage" class="mt-5">
                            <h5>Contatta il proprietario:</h5>
                            <div>
                                <label for="email">Email:</label>
                                <input v-model="send_email" type="email" name="email" class="form-control" required>
                            </div>

                            <div>
                                <label for="testo">Testo:</label>
                                <textarea v-model="send_text" name="testo" id="testo" cols="20" rows="10" class="form-control" required></textarea>
                            </div>
                            <button  type="submit" class="t2-button mt-3">Invia</button>
                            
                        </form>
                        <div v-if="sended" class="alert alert-success" role="alert">
                            Il tuo messaggio è stato inviato! 
                        </div>
                    </div>
                </div>

            
            </div>

        </div>

        <div v-else>
            <Loading />
        </div>
        
    
    </div>
  
</template>

<script>
import Loading from '../partials/Loading.vue';
export default {
    name: 'Detail',
    components: {
        Loading
    },
    data(){
        return{
            detailsImages: [
                'https://media.istockphoto.com/photos/contemporary-all-white-bedroom-picture-id532049286?b=1&k=20&m=532049286&s=170667a&w=0&h=-x2hp6YycgRVcq5b0yoRYBMgd4kMQVA45ILhPt52zRU=',
                'https://static.wixstatic.com/media/fde015_de93aa6357c14c439e80f661e7a71e67.jpg/v1/fill/w_649,h_408,q_85,usm_0.66_1.00_0.01/fde015_de93aa6357c14c439e80f661e7a71e67.jpg',
                'https://www.thespruce.com/thmb/mAxTP5LWYXy6z_C0xsIgGHm4hW4=/1777x1333/smart/filters:no_upscale()/beautiful-bathrooms-ideas-4101846-hero-e436124be1664154b7771e3b0d23676f.jpg'
            ],
            
            baseUrl: 'http://127.0.0.1:8000',
            flat: {},
            send_email: '',
            send_text: '',
            slug_search: this.$route.query.slug,
            sended: false,
        }
        
    },
    props:{
        slug: String,
    },
    
    methods:{
        getApiElement(){
            console.log(this.slug_search);
            axios.get(this.baseUrl + '/api/flats/' + this.slug_search)
                .then(res=>{
                    this.flat = res.data;
                    console.log('details : ', res.data);
                })
        },

        sendMessage(){
            
            const data = {
                email: this.send_email,
                text: this.send_text,
                id: this.flat.id,
            };
            
            axios.post(this.baseUrl + '/api/detail/', data )
                .then(res => {
                    console.log(res.data.succes);
                    this.sended = true;
                    this.send_text = '';
                    this.send_email = '';
                }).catch(e =>{
                    console.log(e.response.data);
                })  
        }
    },

    mounted(){
        this.getApiElement();
    }

}
</script>

<style lang="scss" scoped>

// .t2-container{
//     position: relative;
//     top: 50px;
//     margin-bottom: 100px;
// }

.header-bg {
    background-color: rgb(46, 45, 45);
    height: 70px;
    width: 100%;
}

.close-btn{
      border: none;
      cursor: pointer;
      outline: none;
      background: none;
      font-size: 1.25rem;
      font-weight: bold;
}

.img-cont{
    width: 100%;
    object-fit: cover;
    img{
        width: 100%;
    }
}

h5 {
    font-weight: 600;
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
        a {
            color: white;
            text-decoration: none;
        }
    }
    a{
        text-decoration: none;
        color: rgb(46, 45, 45);
    }
}

// .popup{
//   //transform: scale(0);
//   position: fixed;
//   top: 15%;
//   //bottom: 15%;
//   right: 15%;
//   left: 15%;
//   //width: 60%;
//   background-color: white;
//   opacity: 0.99;
//   border-radius: 15px;
//   z-index: 1;
//   border: 1px solid black;
//   box-shadow: 0 0 30px rgba($color: #000000, $alpha: 0.7);

  

//   .body-popup{
//     height: 400px;
//     overflow: auto;

//     .carousel-popup{
//       position: relative;
//       height: 300px;
//       img{
//         width: 100%;
//         height: 100%;
//         opacity: 0.9;
//       }

//       .prev,
//       .next{
//         display: flex;
//         justify-content: center;
//         align-items: center;
//         width: 40px;
//         height: 40px;
//         border-radius: 50%;
//         color: white;
//         cursor: pointer;
//         background-color: rgba($color: #000000, $alpha: 0.5);
//         position: absolute;
//         top: 50%;

//         &:hover{
//           background-color: rgba($color: #000000, $alpha: 0.8);
//         }
//       }
//       .prev{
//         left: 10px;
//       }
//       .next{
//         right: 10px;
//       }
//     }
//   }
// }

//   .overlay-popup{
//     position: fixed;
//     top: 0;
//     left: 0;
//     right: 0;
//     bottom: 0;
//     background-color: rgba($color: #000000, $alpha: 0.7);
//   }



</style>