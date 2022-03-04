<template>

  <div>

    <section class="about">
      <div class="video-container">
        <video autoplay muted loop >
          <source src="/img/video7.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
      </div>
      <h1>Chi Siamo</h1>
    </section>
    
    <div class="container">
      <div class="row">
        <div class="col-12 border-bottom">
          <h1 class="my-3">Ciao caro visitatore!</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mt-3">
          <p>Ti presentiamo il team che ha sviluppato dalla A alla Z questo progetto.</p>
          <p>Faremo un po' il giro d'Italia insieme, partiremo dalla Sicilia dove incontreremo Mariano Pidone e Salvatore Sanzone, passando dalla Puglia troviamo Morena Mastromarino, arriviamo a Roma dove c'è Matteo Fabio e infine a Milano troviamo Davide Tavella.</p>
          <p>Di seguito troverai dei link con cui puoi contattare questo mitico gruppo!</p>
          <ul>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
            </li>
            <li>
              <i class="fa-brands fa-linkedin-in"></i>
            </li>
            <li>
              <i class="fa-brands fa-linkedin"></i>
            </li>
            <li>
              <i class="fa-brands fa-linkedin"></i>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: 'About',

  data(){
    return{
      
    }
  },
    
}  
</script>

<style lang="scss" scoped>
.about{
  width: 100%;
  height: 700px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;

  .video-container{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    .overlay{
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: rgba($color: #000000, $alpha: 0.1);
    }
  }

  h1{
    text-align: center;
    font-size: 6rem;
    z-index: 1;
    color: white;
    opacity: 0.9;
  }

  i{
    background-color: black;
  }
}

</style>