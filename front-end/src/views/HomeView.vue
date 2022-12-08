<template>
  <div class="home-content">
    <div>
      <Header />
      <Carousel />
      <CompanyDetails />
    </div>
  </div>
</template>

<script>
import Header from '../components/Header.vue'
import Carousel from '../components/Carousel.vue'
import CompanyDetails from '../components/CompanyDetails.vue'

export default {
name: 'home-view',
components: {
  Header,
  Carousel,
  CompanyDetails,
}
};
</script>

<style scoped>
.home-content {
  width: 100%;
}

</style>
