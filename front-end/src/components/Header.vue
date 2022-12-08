<template>
  <div class="header-content">
    <div>
    </div>
    <div>
      <span>Quem somos</span>
      <span>Equipe</span>
      <span>Espaço</span>
      <span>Contato</span>
    </div>
    <div>
      <img alt="Vue logo" class="logo" src="@/assets/feather-search.svg" >
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
  font-size: 16px;
}
.header-content img {
    width: 19px;
    margin-right: 0.5rem;
  }

@media (min-width: 1024px) {
  .header-content {
    height: 6.24rem;
    justify-content: end;
  }
  .header-content img {
    width: 19px;
    margin: 0 3rem 0 2rem;
  }
}

</style>
