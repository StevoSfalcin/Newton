<template>
  <div class="home-content">
    <div>
      <Header />
      <Carousel />
    </div>
  </div>
</template>

<script>
import Header from '../components/Header.vue'
import Carousel from '../components/Carousel.vue'

export default {
name: 'home-view',
components: {
  Header,
  Carousel,
}
};
</script>

<style scoped>
.home-content {
  width: 100%;
}

</style>
