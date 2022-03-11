<template>

  <footer class=" ">
    <div class="container d-flex justify-content-between align-items-center my-container">
      <div>BollBnB - Made By Team 2</div>
    <div>Made in Italy</div>
    </div>
  </footer>

</template>

<script>
export default {
  name: 'Footer'
}
</script>

<style lang="scss" scoped>
footer{
  padding: 10px;
  width: 100%;
  height: 70px;
  //position: absolute;
  
  color: white;
  background-color: rgb(46, 45, 45);
  .my-container{
    height: 100%;
  }
}
</style>