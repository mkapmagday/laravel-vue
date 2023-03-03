<template>
  <div class="banner">
    <img src="https://i.postimg.cc/JnNNCL0j/skyscrapers-ge41a4feda-1920-1-2.png" alt="altText">
    <div class="banner-content">
      <h1>{{ heading }}</h1>
      <p>{{ content }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Banner',
  props: {
    imageUrl: {
      type: String,
      required: true
    },
    altText: {
      type: String,
      required: true
    },
    heading: {
      type: String,
      required: true
    },
    content: {
      type: String,
      required: true
    }
  }
}
</script>

<style scoped>
.banner {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #f5f5f5;
  padding: 1rem;
}

.banner img {
  max-width: 100%;
  height: auto;
}

.banner-content {
  margin-top: 1rem;
  text-align: center;
}
</style>
