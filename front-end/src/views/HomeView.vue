<template>
  <div class="home-content">
    <div class="d-flex">
      <Header></Header>
    </div>
  </div>
</template>

<script>
import Header from '../components/Header.vue'

export default {
name: 'home-view',
components: {
  Header,
}
};
</script>

<style scoped>
.home-content {
  width: 100%;
}

</style>
