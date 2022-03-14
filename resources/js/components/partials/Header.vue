<template>

    <header
        :class="{ active: isActive }" 
        class="container-fluid d-flex align-items-center nav-bar"
    >
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="logo">
                        <a href="http://127.0.0.1:8000/">
                            <img src="/images/Airbnb-symbol.png" alt="LOGO" >
                        </a>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class=" d-flex ">
                        <div class="menu d-flex">
                            <div>
                            <router-link :to="{ name:'home' }">Home</router-link> 
                            </div>
                            <div class="mx-3">
                            <router-link  :to="{ name:'appartamenti' }">Appartamenti</router-link> 
                            </div>
                            <div>
                            <router-link :to="{ name:'chi-siamo' }">Chi Siamo</router-link> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <div class="host">
                        <a href="http://127.0.0.1:8000/host">Area Host</a>
                    </div>

                <HamburgerMenu
                    @changeColor = "colorHeader"
                />

                </div>
            </div>
        </div>
    </header>

</template>

<script>
import HamburgerMenu from '../HamburgerMenu.vue'
export default {
  name: 'Header',
  components: {
    HamburgerMenu
  },
  data() {
      return {
          isActive: false
      }
  },
  methods: {
      colorHeader() {
        this.isActive = !this.isActive;
      }
  }
  
}

{
    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.nav-bar');
        if(lastScrollY > 40){
            navbar.classList.add("nav-hide");
        } else{
            navbar.classList.remove("nav-hide");
        }
        lastScrollY = window.scrollY;
    });
}
</script>

<style lang="scss" scoped>

header{
    display: none;
    position: fixed;
    top: 0;
    z-index: 99;
    width: 100%;
    padding: 20px 0;
    //text-transform: uppercase;

    &.active {
        // background-color: rgb(46, 45, 45);
        background-color: black;


    }

    .menu {

        .active{
            &::after{
            content: '';
            display: block !important;
            width: 100%;
            border: 1px solid white;
            }
        }
    }
    .logo{

        img{
            width: 100px;
            //height: 100%;
        }
    }

    a{
        color: white !important;
        text-decoration: none !important;
        
        h6{
            color: white;
            transition: all 0.5s;

            &:hover{
                color: rgb(238, 238, 238);
            }
        }
    }

}

.nav-hide{
    // background-color: rgb(46, 45, 45);
    background-color: black;
    transition: ease-out 0.8s;
}

@media all and (max-width: 995px) {

    .menu, 
    .host {
        display: none !important;
    }
    
}
</style>