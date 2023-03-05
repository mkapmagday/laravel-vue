<template>
  <div>
    <carousel-3d :space="500" @afterChange="updateCurrentSlide">
      <slide :index="0">
        <img :src="require('../../images/assets/1.jpg')" alt="Slide 1">
      </slide>
      <slide :index="1">
        <img :src="require('../../images/assets/2.jpg')" alt="Slide 2">
      </slide>
      <slide :index="2">
        <img :src="require('../../images/assets/3.jpg')" alt="Slide 3">
      </slide>
      <slide :index="3">
        <img :src="require('../../images/assets/4.jpg')" alt="Slide 4">
      </slide>
      <slide :index="4">
        <img :src="require('../../images/assets/5.jpg')" alt="Slide 5">
      </slide>
      <slide :index="5">
        <img :src="require('../../images/assets/6.jpg')" alt="Slide 6">
      </slide>
    </carousel-3d>
    <div class="indicator">
      <span v-for="i in slidesCount" :key="i" :class="{ active: i === currentSlide }" @click="goToSlide(i)"></span>
    </div>
  </div>
</template>

<script>
import { Carousel3d, Slide } from 'vue-carousel-3d';

export default {
  components: {
    Carousel3d,
    Slide,
  },
  data() {
    return {
      currentSlide: 1,
      slidesCount: 6,
    };
  },
  methods: {
    updateCurrentSlide(index) {
      this.currentSlide = index + 1;
    },
    goToSlide(index) {
      this.currentSlide = index;
      this.$refs.carousel3d.goToSlide(index - 1);
    },
  },
};
</script>

<style>
.carousel {
  max-width: 800px;
  margin: 0 auto;
}
.indicator {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.indicator span {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #ccc;
  margin: 0 10px;
  cursor: pointer;
}

.indicator span.active {
  background-color: #333;
}

</style>
