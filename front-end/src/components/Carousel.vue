<template>
  <div class="carousel-content position-relative">
    <div class="text-content">
      <div class="span-text-content justify-end">
        <span>Lorem ipsum dolor sit amet</span>
      </div>
      <div class="span-text-content">
        <span>Lorem ipsum dolor sit amet</span>
      </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="@/assets/man.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="@/assets/man.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="@/assets/man.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" />
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" />
    </div>
</div>
</template>

<script> 

export default {
name: 'carousel',
};
</script>

<style scoped>
.text-content {
  position: absolute;
  z-index: 9999;
  width: 100%;
  height: 50%;
  color: #FFFFFF;
}
.span-text-content {
  display: flex;
  justify-content: center;
  width: 100%;
  height: 50%;
  font-size: 12px;
}
.span-text-content:first-of-type {
  align-items: end;
  font-size: 16px;
}
.carousel-content {
  width: 100%;
  background-color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.carousel-content img {
  max-width: 100%;
  filter: brightness(50%);
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
  .span-text-content {
  font-size: 40px;
  }
  .span-text-content:first-of-type {
    font-size: 50px;
  }
}
@media (min-width: 1920px) {
  .header-content img {
    margin: 0 24.75rem 0 2rem;
  }
  .span-text-content {
  font-size: 50px;
  }
  .span-text-content:first-of-type {
    font-size: 60px;
  }
}

</style>
