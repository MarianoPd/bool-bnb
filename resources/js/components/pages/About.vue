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
          <div class="links-zone">
            <!-- link linkedin -->
            <ul>
              <li class="links">
                <a href="https://www.linkedin.com/in/morena-mastromarino/" class="logo-linkedin-fake">Linkedin</a><p>Morena Mastromarino</p>
              </li>
              <li class="links">
                <a href="https://www.linkedin.com/in/salvatore-sanzone-751304219/" class="logo-linkedin-fake">Linkedin</a><p>Salvatore Sanzone</p>
              </li>
              <li class="links">
                <a href="https://www.linkedin.com/in/matteo-fabio/" class="logo-linkedin-fake">Linkedin</a> <p>Matteo Fabio</p>
              </li>
              <li class="links"> 
                <a href="https://www.linkedin.com/in/davide-tavella-363b2820b/" class="logo-linkedin-fake">Linkedin</a> <p>Davide Tavella</p>
              </li>
              <li class="links">
                <a href="https://www.linkedin.com/in/mariano-pidone-215621122/" class="logo-linkedin-fake">Linkedin</a> <p>Mariano Pidone</p>
              </li>
            </ul>

            <!-- link ?!?! -->
            <ul>
              <li class="links">
                <a href="https://github.com/MorenaMastromarino" class="logo-github-fake">GitHub</a><p>Morena Mastromarino</p>
              </li>
              <li class="links">
                <a href="https://github.com/salvosanzone" class="logo-github-fake">GitHub</a><p>Salvatore Sanzone</p>
              </li>
              <li class="links">
                <a href="https://github.com/matteofab10" class="logo-github-fake">GitHub</a> <p>Matteo Fabio</p>
              </li>
              <li class="links"> 
                <a href="https://github.com/Tave23" class="logo-github-fake">GitHub</a> <p>Davide Tavella</p>
              </li>
              <li class="links">
                <a href="https://github.com/MarianoPd" class="logo-github-fake">GitHub</a> <p>Mariano Pidone</p>
              </li>
            </ul>
          </div>
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

}

.links-zone{
  display: flex;
}
.links{
  display: flex;
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