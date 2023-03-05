<template>
  <carousel-3d :perspective="2000" :space="500" class="carousel">
    <slide :index="0">
      <img :src="require('../../images/assets/1.jpg')" alt="Slide 1" class="slide">
    </slide>
    <slide :index="1">
      <img :src="require('../../images/assets/2.jpg')" alt="Slide 1" class="slide">
    </slide>
    <slide :index="2">
      <img :src="require('../../images/assets/3.jpg')" alt="Slide 1" class="slide">
    </slide>
    <slide :index="3">
      <img :src="require('../../images/assets/4.jpg')" alt="Slide 1" class="slide">
    </slide>
    <slide :index="4">
      <img :src="require('../../images/assets/5.jpg')" alt="Slide 1" class="slide">
    </slide>
    <slide :index="5">
      <img :src="require('../../images/assets/6.jpg')" alt="Slide 1" class="slide">
    </slide>
  </carousel-3d>
</template>

<style scoped>
.carousel {
  max-width: 800px;
  margin: 0 auto;
}

.slide {
  width: 100%;
  height: 400px;
  border-radius: 10px;
}

.carousel-3d-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

</style>
