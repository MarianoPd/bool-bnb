<template>
  <div>

    <div 
      @click="$emit('changeColor')"
      class="hamburger-menu-btn"
    >
      <div>
        <i
            @click="myFunction"  
            class="fa fa-bars cursor-po" 
            aria-hidden="true">
        </i>
        <div 
          class="hamburger-menu"
          :class="{ menuAttivo: menuActive }"
        >
        <div class="container">
          <div class="hamburger-menu-body">
            <div class="container">
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <div class="item">
                    <a href="http://127.0.0.1:8000">
                        Home
                    </a>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                  <div class="item">
                    <a href="http://127.0.0.1:8000/appartamenti">
                        Appartamenti
                    </a>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                  <div class="item">
                    <a href="http://127.0.0.1:8000/chi-siamo">
                        Chi Siamo
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div :class="{ overlayAttivo: overlayActive }" class="overlay"></div>

  </div>

</template>

<script>
export default {
  name: 'HamburgerMenu',
  data() {
    return {
      menuActive: false,
      overlayActive: false
    }
  },
  methods: {
    myFunction(){
      this.menuActive = !this.menuActive;
      this.overlayActive = !this.overlayActive;
    }
  }
}
</script>

<style lang="scss" scoped>
.hamburger-menu-btn{
  display: none;
  color: white;
  text-align: end;
  z-index: 1;

  i {
    cursor: pointer;
    font-size: 20px;

    &:hover {
      color: rgb(248, 242, 242);
    }
  }
}

.hamburger-menu{
  // display: none;
  position: fixed;
  top: 75px;
  left: -200%;
  bottom: 0;
  background-color: black;
  transition: ease-in-out 0.5s;


  &.menuAttivo{
    // display: block;
    left: 0;
    right: 0;
  }

  .hamburger-menu-body {

    .item {
      color: white;

      a {
        font-size: 2rem;
        color: white !important;

        &:hover {
          text-decoration: none;
          cursor: pointer;
          color: rgb(230, 215, 215) !important;

        }

      }

      &:hover {
        cursor: pointer;
        color: rgb(230, 215, 215) !important;
      }

    }
  }

}

.overlay {
  display: none;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: -1;
  background-color: rgba($color: #000000, $alpha: 0.5);

  &.overlayAttivo {
    display: block;
  }

}

@media (max-width: 995px) {

  .hamburger-menu-btn{
    display: block !important;
  }

}
</style>