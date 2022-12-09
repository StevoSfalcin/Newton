<template>
  <img src="@/assets/symbol.png" class="position-absolute symbol-details" >
  <div class="company-details-content">
    <div class="company-detail flex-row-reverse">
      <div>
        <BasicTextInfo title="Quem somos" mainText="Lorem ipsum dolor sit amet." text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus bibendum scelerisque. Duis ornare et risus id faucibus. Fusce tincidunt leo elit. Suspendisse potenti. Nunc vestibulum dolor et risus viverra mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ex quis sapien laoreet eleifend."/>
        <div class="know-more-button">Saiba Mais</div>
      </div>
      <div class="image-content">
        <img src="@/assets/women.png" >
      </div>
    </div>
    <div class="company-detail">
      <div>
        <BasicTextInfo title="Nossa equipe" mainText="Lorem ipsum dolor sit amet" text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus bibendum scelerisque. Duis ornare et risus id faucibus. Fusce tincidunt leo elit. Suspendisse potenti. Nunc vestibulum dolor et risus viverra mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ex quis sapien laoreet eleifend."/>
      </div>
      <div class="image-content">
        <img src="@/assets/team.png" >
      </div>
    </div>
    <div class="company-detail flex-row-reverse">
      <div>
        <BasicTextInfo title="Nosso espaço" mainText="Lorem ipsum dolor" text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus bibendum scelerisque. Duis ornare et risus id faucibus. Fusce tincidunt leo elit. em ipsum dolor sit amet, consectetur adipiscing elit. Donec a ex quis sapien laoreet eleifend."/>
      </div>
      <div class="image-content">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="@/assets/meeting.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="@/assets/meeting.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import BasicTextInfo from './BasicTextInfo.vue'

export default {
name: 'company-details',
components: {
  BasicTextInfo,
}
};
</script>

<style scoped>
.symbol-details {
  max-width: 15rem;
  bottom: 45px;
}
.company-details-content {
  width: 100%;
  padding: 1.5rem 2rem;
  justify-content: center;
}
.company-details-content img {
  width: 100%;
  padding: 1.3rem;
}
.company-details-content .company-detail:first-of-type .image-content  {
  display: none;
}
.know-more-button {
  width: 5.5rem;
  height: 1.9rem;
  font-size: 14px;
  background-color: #E42313;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 6px;
  color: #FFFFFF;
  margin: 1rem auto;
}
/* .image-content {
  display: inline-block;
  height: 500px;
  overflow: hidden;
}
.image-content img {
  border-radius: 10px;
} */
@media (min-width: 1024px) {
  .company-detail {
    display: flex;
    padding: 2rem 18rem 0 18rem;
    justify-content: center;
  }
  .company-detail > div {
    padding: 0 3rem 0 1rem;
  }
  .image-content {
    height: unset;
  }
  .image-content img {
    padding: 1rem;
    max-width: 364px;
  }
  .company-details-content .company-detail:first-of-type .image-content  {
    display: unset;
  }
  .know-more-button {
    width: 8rem;
    height: 2rem;
    font-size: 14px;
    background-color: #E42313;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    color: #FFFFFF;
    margin: 1rem 0;
  }
  .symbol-details {
  max-width: 35rem;
  bottom: 45px;
}
}
@media (min-width: 1920px) {
  .header-content img {
    margin: 0 24.75rem 0 2rem;
    max-width: 564px;
  }
}

</style>
