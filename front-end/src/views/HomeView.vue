<template>
  <div class="home-content">
    <div>
      <Header />
      <Carousel />
      <CompanyDetails />
      <Contact />
    </div>
  </div>
</template>

<script>
import Header from '../components/Header.vue'
import Carousel from '../components/Carousel.vue'
import CompanyDetails from '../components/CompanyDetails.vue'
import Contact from '../components/Contact.vue'

export default {
name: 'home-view',
components: {
  Header,
  Carousel,
  CompanyDetails,
  Contact,
}
};
</script>

<style scoped>
.home-content {
  width: 100%;
}

</style>
