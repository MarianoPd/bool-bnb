<template>

  <div class="">

    <section class="about">
      <div class="video-container">
        <video autoplay muted loop >
          <source src="/img/video7.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
      </div>
      <h1>Chi Siamo</h1>
    </section>
    
    <section class="">
      <div class="container text-center ">
      <div class="row">
        <div class="col-12  border-bottom">
          <h1 class="my-3">Ciao caro visitatore!</h1>
        </div>
      </div>
      <div class="row ">
        <div class="col-12 col-md-8 offset-md-2 mt-3 text-center">
          <p>Ti presentiamo il team che ha sviluppato dalla A alla Z questo progetto.</p>
          <p>Faremo un po' il giro d'Italia insieme, partiremo dalla Sicilia dove incontreremo Mariano Pidone e Salvatore Sanzone, passando dalla Puglia troviamo Morena Mastromarino, arriviamo a Roma dove c'è Matteo Fabio e infine a Milano troviamo Davide Tavella.</p>
          <p>Di seguito troverai dei link con cui puoi contattare questo mitico gruppo!</p>

          <div class="links-zone">
            <!-- link linkedin -->
            <ul>
              <li class="links">
                <p>Morena Mastromarino</p>
                <a href="https://www.linkedin.com/in/morena-mastromarino/" class="logo-linkedin-fake">Linkedin</a>
                <a href="https://github.com/MorenaMastromarino" class="logo-github-fake">GitHub</a>
              </li>
              <li class="links">
                <p>Salvatore Sanzone</p>
                <a href="https://www.linkedin.com/in/salvatore-sanzone-751304219/" class="logo-linkedin-fake">Linkedin</a>
                <a href="https://github.com/salvosanzone" class="logo-github-fake">GitHub</a>
                
              </li>
              <li class="links">
                <p>Matteo Fabio</p>
                <a href="https://www.linkedin.com/in/matteo-fabio/" class="logo-linkedin-fake">Linkedin</a>
                <a href="https://github.com/matteofab10" class="logo-github-fake">GitHub</a>
              </li>
              <li class="links"> 
                <p>Davide Tavella</p>
                <a href="https://www.linkedin.com/in/davide-tavella-363b2820b/" class="logo-linkedin-fake">Linkedin</a> 
                <a href="https://github.com/Tave23" class="logo-github-fake">GitHub</a>
              </li>
              <li class="links">
                <p>Mariano Pidone</p>
                <a href="https://www.linkedin.com/in/mariano-pidone-215621122/" class="logo-linkedin-fake">Linkedin</a>
                <a href="https://github.com/MarianoPd" class="logo-github-fake">GitHub</a> 
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    </section>
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

}

.links-zone{
  display: flex;
  justify-content: center;
}
.links{
  display: flex;
  justify-content: center;
  p{
    margin-right: 15px;
  }
}

.logo-linkedin-fake{
  color: #007bff;
  margin-right: 20px;
}

.logo-github-fake{
  color: red;
  margin-right: 20px;
}
</style>