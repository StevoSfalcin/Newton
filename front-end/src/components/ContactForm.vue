<template>
  <div class="contact-form-content t">
    <div class="card-form shadow-lg d-flex">
      <div class="card-inputs">
        <div>
          <div class="mb-1">
            <input type="text" class="form-control" placeholder="Nome" v-model="name">
            <input type="email" class="form-control" placeholder="E-mail" v-model="email">
            <input type="text" class="form-control" placeholder="Assunto" v-model="subject">
          </div>
          <div>
            <input type="text" class="form-control fill-heigt" placeholder="Mensagem" v-model="message">
          </div>
        </div>
        <div>
          <div class="send-button" @click="sendEmail()">Enviar</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
name: 'contact-form',
data() {
  return {
    name: '',
    email: '',
    subject: '',
    message: '',
  }
},
watch: {
  name(val) {
    this.name = val.replace(/\W/g, "");
    console.log(this.name);
  },
  email(val) {
    this.email = val.replace(/[^a-zA-Z0-9,@,?.-]/g, "");
  },
  subject(val) {
    this.subject = val.replace(/\W/g, "");
  },
  message(val) {
    this.message = val.replace(/[^a-zA-Z0-9,!,?.-]/g, "");
  },
},
methods: {
  sendEmail() {
    axios
      .post('http://127.0.0.1:8001/api', {
        name: this.name,
        email: this.email,
        subject: this.subject,
        message: this.message
      }).then((response) => {
        console.log(response)
      })
    }
  }
};
</script>

<style scoped>
.contact-form-content {
  width: 100%;
  background-color: #FFFFFF;
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  justify-content: center;
}
.card-form {
  display: block;
  border-radius: 5px;
}
.card-inputs {
  padding: 1rem;
}
.card-inputs input {
  margin: 0.3rem;
}
.card-inputs > div > div:last-child input {
  min-height: 5rem;
  margin-top: 0.4rem;
}
.send-button {
  width: 5.5rem;
  height: 1.9rem;
  font-size: 14px;
  background-color: #E42313;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 6px;
  color: #FFFFFF;
  margin: 1rem auto 0 auto;
}
@media (min-width: 1024px) {
  .card-inputs > div {
    display: flex;
  }
  .card-inputs input {
    margin-right: 0.5rem;
  }
  .card-inputs > div > div:last-child input {
    height: 90%;
    margin-left: 10px;
    margin-top: 0.4rem;
  }
}
@media (min-width: 1920px) {
  .header-content img {
    margin: 0 24.75rem 0 2rem;
  }
}

</style>
