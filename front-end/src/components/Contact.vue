<template>
  <div class="contact-content">
    <div class="contact-header mb-2">
      <div class="mb-2">
        <span>Fale conosco</span>
      </div>
      <span>Quer conversar com a Health Clinic? Basta preencher o formulário
        abaixo e nós entraremos em contato assim que possível!</span>
      <div class="d-flex justify-content-between mt-3">
        <div>
          <img class="search" src="@/assets/phone.svg" >
          <span>Telefone</span>
        </div>
        <div>
          <img class="search" src="@/assets/whatsapp.svg" >
          <span>Telefone</span>
        </div>
        <div>
          <img class="search" src="@/assets/wechat.svg" >
          <span>Telefone</span>
        </div>
      </div>
    </div>
    <ContactForm />
  </div>
</template>

<script>
import ContactForm from './ContactForm.vue'

export default {
name: 'contact',
components: {
  ContactForm
}
};
</script>

<style scoped>
.contact-content {
  width: 100%;
  height: 4.25rem;
  padding: 0 1rem;
  text-align: center;
  color: #575756;
  line-height: 20px;
}
.contact-header {
  margin: 0 3rem;
}
.contact-header > div:first-of-type {
  font-size: 22px;
}
.contact-header > div:first-of-type span {
  font-weight: 600;
}
.contact-header img {
  width: 1rem;
  margin-right: 0.2rem;
}

@media (min-width: 1024px) {
  .contact-header {
    margin: 0 30rem;
    padding: 0 5rem 1.2rem 0;
  }
  .contact-header img {
    width: 1rem;
    margin-right: 0.4rem;
  }
}

</style>
