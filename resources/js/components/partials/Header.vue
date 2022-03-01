<template>
  <header class="container-fluid d-flex align-items-center">
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
</script>

<style>

</style>