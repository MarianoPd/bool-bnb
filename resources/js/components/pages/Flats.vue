<template>

  <section class="flats">
      <div v-for="flat in flats" :key="flat.slug">
        <h3>{{flat.title}}</h3>
      </div>
    </section>

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
  border: 1px solid white;
  height: 100vh;
}
</style>