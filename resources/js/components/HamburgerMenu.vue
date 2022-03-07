<template>
  <div>

    <div class="hamburger-menu-btn">
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
          <div class="hamburger-menu-body">
              <div class="item">Home</div>
              <div class="item">
                  <a href="http://127.0.0.1:8000/appartamenti">
                      Appartamenti
                  </a>
              </div>
              <div class="item">
                  <a href="http://127.0.0.1:8000/chi-siamo">
                      Chi Siamo
                  </a>
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
  transform: scale(0);
  position: fixed;
  left: 50%;
  right: 10%;
  padding: 10px;
  background-color: white;
  border-radius: 10px;
  text-align: start;
  transition: 0.5s;
  box-shadow: 0 0 10px rgba($color: #000000, $alpha: 0.5);

  &.menuAttivo{
    // display: block;
    transform: scale(1);

  }


  .hamburger-menu-body {

    .item {
      color: black;

      a {
        color: black !important;

        &:hover {
        text-decoration: none;
        cursor: pointer;
        background-color: rgb(248, 242, 242);
      }

      }

      &:hover {
        cursor: pointer;
        background-color: rgb(248, 242, 242);
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