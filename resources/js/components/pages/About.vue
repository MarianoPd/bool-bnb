<template>

  <section class="about">
      <div class="container">
        <h3>Ciao caro visitatore!</h3>

        <p>Ti presentiamo il team che ha sviluppato dalla A alla Z questo progetto.</p>

        <p>Faremo un po' il giro d'Italia insieme, partiremo dalla Sicilia dove incontreremo Mariano Pidone e Salvatore Sanzone, passando dalla Puglia troviamo Morena Mastromarino, arriviamo a Roma dove c'è Matteo Fabio e infine a Milano troviamo Davide Tavella.</p>

        <p>Di seguito troverai dei link con cui puoi contattare questo mitico gruppo!</p>

        <div class="contatti">
          <ul>
            <div class="title">
              <p>Profili linkedin</p>
            </div>
            <li><a href="https://www.linkedin.com/in/mariano-pidone-215621122/">Mariano Pidone</a></li>
            <li><a href="https://www.linkedin.com/in/salvatore-sanzone-751304219/">Salvatore Sanzone</a></li>
            <li><a href="https://www.linkedin.com/in/morena-mastromarino-284145233/">Morena Mastromarino</a></li>
            <li><a href="https://www.linkedin.com/in/matteo-fabio/">Matteo Fabio</a></li>
            <li><a href="https://www.linkedin.com/in/davide-tavella-363b2820b/">Davide Tavella</a></li>
          </ul>

          <ul>
            <div class="title">
              <p>Profili GitHub</p>
            </div>
            <li><a href="https://www.linkedin.com/in/mariano-pidone-215621122/">Mariano Pidone</a></li>
            <li><a href="https://www.linkedin.com/in/salvatore-sanzone-751304219/">Salvatore Sanzone</a></li>
            <li><a href="https://www.linkedin.com/in/morena-mastromarino-284145233/">Morena Mastromarino</a></li>
            <li><a href="https://www.linkedin.com/in/matteo-fabio/">Matteo Fabio</a></li>
            <li><a href="https://www.linkedin.com/in/davide-tavella-363b2820b/">Davide Tavella</a></li>
          </ul>

          <ul>
            <div class="title">
              <p>Profili Facebook</p>
            </div>
            <li><a href="https://www.linkedin.com/in/mariano-pidone-215621122/">Mariano Pidone</a></li>
            <li><a href="https://www.linkedin.com/in/salvatore-sanzone-751304219/">Salvatore Sanzone</a></li>
            <li><a href="https://www.linkedin.com/in/morena-mastromarino-284145233/">Morena Mastromarino</a></li>
            <li><a href="https://www.linkedin.com/in/matteo-fabio/">Matteo Fabio</a></li>
            <li><a href="https://www.linkedin.com/in/davide-tavella-363b2820b/">Davide Tavella</a></li>
          </ul>
        </div>
      </div>
    </section>

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

body{
  background-color: lightseagreen !important;
}
.about{
  min-height: 100vh;
  width: 100%;
  padding: 100px;
  background-color: lightseagreen;
  overflow-y: scroll;

  .container{
    width: 70%;
    margin: 0 auto;

    .contatti{
      display: flex;
      margin-top: 35px;
      justify-content: space-between;
    }
    li {
    list-style: none;
      a{
        color: blue;
      }
    }

  }
}
</style>