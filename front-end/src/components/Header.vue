<template>
  <div class="header-content">
    <div></div>
    <div>
      <span>Quem somos</span>
      <span>Equipe</span>
      <span>Espaço</span>
      <span>Contato</span>
    </div>
    <div class="img-content">
      <img class="search" src="@/assets/feather-search.svg" >
    </div>
  </div>
</template>

<script>

export default {
name: 'home-view',
};
</script>

<style scoped>
.header-content {
  width: 100%;
  background-color: #FFFFFF;
  height: 4.25rem;
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.header-content span {
  margin-right: 1rem;
  color: #575756;
  opacity: 1;
  font-size: 14px;
}
.header-content img {
  width: 19px;
  margin-right: 0.5rem;
}
.img-content {
  display: flex;
  align-items: center;
}

@media (min-width: 1024px) {
  .header-content {
    height: 6.24rem;
    justify-content: end;
  }
  .header-content img {
    width: 19px;
    margin: 0 16.75rem 0 2rem;
  }
  .header-content span {
    font-size: 16px;
  }
}
@media (min-width: 1920px) {
  .header-content img {
    margin: 0 24.75rem 0 2rem;
  }
}

</style>
