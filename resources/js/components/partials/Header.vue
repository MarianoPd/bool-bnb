<template>
  <header class="container-fluid d-flex align-items-center nav-bar">
        <div class="container">
            <div class="row justify-content-between align-items-baseline">
                <div class="logo d-flex justify-content-center align-items-center">
                    <a href="#">
                        <span>BoolBnB</span>
                    </a>
                </div>
                <div class="d-flex">
                    <router-link :to="{ name:'home' }">Home</router-link>
                    <router-link class="mx-3" :to="{ name:'appartamenti' }">Appartamenti</router-link>
                    <router-link :to="{ name:'chi-siamo' }">Chi Siamo</router-link>
                </div>
                <div>
                    <a href="http://127.0.0.1:8000/host">Diventa Host</a>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
  name: 'Header'
}

{
    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.nav-bar');
        if(lastScrollY > 242){
            navbar.classList.add("nav-hide");
        } else{
            navbar.classList.remove("nav-hide");
        }

        lastScrollY = window.scrollY;
    });
}
</script>

<style>
    
    .nav-hide{
        background-color: black;
        transition: 0.5s;
    }
</style>