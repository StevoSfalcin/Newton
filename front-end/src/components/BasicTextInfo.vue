<template>
  <div class="text-info-content">
    <div class="d-flex align-items-center">
      <span class="title">
        {{ title }}
      </span>
      <div class="linha" />
    </div>
    <div>
      <span class="main-text">
        {{ mainText }}
      </span>
    </div>
    <div class="text mt-2">
      <span>
        {{ text }}
      </span>
    </div>
  </div>
</template>

<script>

export default {
name: 'basic-text-info',
props: {
    title: {
      type: String,
      required: true,
    },
    mainText: {
      type: String,
      required: true,
    },
    text: {
      type: String,
      required: true,
    },
  },
};
</script>

<style scoped>
.text-info-content {
  display: block;
  color: #575756;
}
.title {
  font-weight: 500;
}
.linha {
  width: 25px;
  height: 1px;
  background-color: #575756;
  margin-left: 10px
}
.main-text {
  font-weight: 600;
  font-size: 18px;
}
.text {
  font-size: 10px;
  line-height: 10px;
}

@media (min-width: 1024px) {
  .text-info-content {
    max-width: 200px;
  }
}
@media (min-width: 1920px) {
  .header-content img {
    margin: 0 24.75rem 0 2rem;
  }
}

</style>
