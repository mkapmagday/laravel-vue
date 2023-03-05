<template>
  <div>
    <carousel-3d :space="500" @afterChange="updateCurrentSlide">
      <slide :index="0">
        <img :src="require('../../images/assets/1.jpg')" alt="Slide 1" style="width: 1000px; height: 900px;  border-radius: 50%;">
        <h1 class="slide-title">Web / Cloud / Mobile Application Development</h1>
      </slide>
      <slide :index="1">
        <img :src="require('../../images/assets/2.jpg')" alt="Slide 2" style="width: 1000px; height: 900px;">
        <h1 class="slide-title">Big Data Analytics Machine Learning / AI</h1>
      </slide>
      <slide :index="2">
        <img :src="require('../../images/assets/3.jpg')" alt="Slide 3" style="width: 1000px; height: 900px;">
        <h1 class="slide-title">AIoT / Edge IoT GPU Computing</h1>
      </slide>
      <slide :index="3">
        <img :src="require('../../images/assets/4.jpg')" alt="Slide 4" style="width: 1000px; height: 900px;">
        <h4 class="slide-title">Embedded Software & Application Development</h4>
      </slide>
      <slide :index="4">
        <img :src="require('../../images/assets/5.jpg')" alt="Slide 5" style="width: 1000px; height: 900px;">
        <h4 class="slide-title">Quality Assurance / Software Testing / Test Automation</h4>
      </slide>
      <slide :index="5">
        <img :src="require('../../images/assets/6.jpg')" alt="Slide 6" style="width: 1000px; height: 900px;">
        <h1 class="slide-title">Global Business Expansion Support</h1>
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

h1 {
  font-family: "Open Sans", sans-serif; /* use Open Sans as the font */
  font-weight: 400; /* use a bold font weight to make it more prominent */
  letter-spacing: 0.10rem; /* add a slight letter spacing for better readability */
  text-transform: capitalize; /* capitalize the first letter of each word */
  color: #333; /* use a dark grey color for better contrast */
  margin-bottom: 1.5rem; /* add some margin to separate the heading from the content below */
}
.carousel .img{
  max-width: 20rem;
  max-height: 20rem;
  margin: 0 auto;
  border-radius: 50%;
}


.slide-title {
  position: absolute;
  top: 50%;
  left: 33%;
  transform: translate(-50%, -50%);
  font-size: 25px;
  color: #ffffff;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  z-index: 1;
  background-color: rgba(255, 255, 255, 0.2);
  padding: 10px;
  border-radius: 10px;
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
