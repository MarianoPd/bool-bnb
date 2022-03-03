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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quidem, maiores quas quibusdam alias quo dolor voluptas animi ullam nobis voluptatem dolorem? Saepe, nulla nostrum quos facere harum sit consequatur cum cupiditate eaque neque asperiores laboriosam vero delectus enim iste suscipit quisquam aperiam earum quo sunt veritatis et modi debitis. Porro esse maiores sequi ad quos mollitia quod eius placeat fugit sit qui eligendi dolorum facilis possimus numquam voluptate, aliquam officiis obcaecati excepturi, dolorem provident ea suscipit. Quod eius soluta quis placeat reiciendis dolore id aut necessitatibus perspiciatis, reprehenderit hic velit quae iste esse assumenda, explicabo amet aspernatur! Cupiditate, explicabo error! Facilis, provident tempore? Placeat iusto debitis, adipisci nemo ipsum alias itaque quis animi quibusdam fugiat at eaque excepturi ad deserunt ipsa delectus blanditiis ipsam quasi, eligendi est magnam repudiandae, inventore similique? Officia voluptatem assumenda consequuntur eius, fugit quidem at doloremque nostrum quod rerum exercitationem! Non ad recusandae nulla iusto dolor quia excepturi! Dolore corrupti quidem delectus. Iste necessitatibus, sed numquam repellendus aut architecto possimus reprehenderit distinctio! In aperiam dolor dicta nisi temporibus quo suscipit, ad quod, incidunt vel qui saepe. Nesciunt sequi reprehenderit vero a quae distinctio ad consequatur! Expedita reprehenderit, at deserunt ut saepe dolorum temporibus dolore quod assumenda non, soluta vitae est tempore incidunt sapiente. Facere excepturi alias error eius porro officiis ipsam repellat optio totam dicta sunt repudiandae unde explicabo, magnam maiores aliquid, quibusdam cupiditate reiciendis natus repellendus aperiam pariatur non! Aliquid tempore tenetur, sequi fugit culpa modi ab enim inventore, hic blanditiis ullam quisquam, error eos perspiciatis consequuntur molestiae perferendis qui provident dolore ipsum cupiditate at debitis odit iste. Modi in culpa deserunt pariatur necessitatibus maxime, omnis, voluptates doloribus dolore consequatur magnam labore animi esse alias cumque. Sed beatae magnam porro esse cum accusantium quasi in quidem, quod reprehenderit doloribus harum tempora temporibus! Reiciendis, facere.</p>
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

</style>