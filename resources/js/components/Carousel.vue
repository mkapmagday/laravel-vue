<template>
  <div>
    <carousel-3d
      :controls-visible="true"
      :controls-prev-html="'&#10092; '"
      :controls-next-html="'&#10093;'"
      :controls-width="30"
      :controls-height="60"
      :clickable="false"
      :autoplay="true"
      :autoplay-timeout="3000"
      :indicator-enabled="true"
      :indicator-dynamic-bullets="true"
      :width="700" :height="500"
    >
      <slide v-for="(slide, i) in slides" :key="i" :index="i">
        <figure>
          <img :src="slide.img" alt="">
          <figcaption>{{ slide.caption }}</figcaption>
        </figure>
      </slide>
    </carousel-3d>
  </div>
</template>
<script>
import { Carousel3d, Slide } from 'vue-carousel-3d';

export default {
  components: {
    Carousel3d,
    Slide
  },
  data() {
    return {
      slides: [
        {
          img: require('../../images/assets/1.jpg'),
          caption: 'Caption for Slide 1'
        },
        {
          img: require('../../images/assets/2.jpg'),
          caption: 'Caption for Slide 2'
        },
        {
          img: require('../../images/assets/3.jpg'),
          caption: 'Caption for Slide 3'
        },
        {
          img: require('../../images/assets/4.jpg'),
          caption: 'Caption for Slide 4'
        },
        {
          img: require('../../images/assets/5.jpg'),
          caption: 'Caption for Slide 5'
        },
        {
          img: require('../../images/assets/6.jpg'),
          caption: 'Caption for Slide 6'
        }
        
      ]
    }
  }
}
</script>

<style>
.carousel-3d-container figure {
  margin: 0;
}
.carousel-3d-container figcaption {
  position: absolute;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  bottom: 0;
  position: absolute;
  bottom: 0;
  padding: 15px;
  font-size: 12px;
  min-width: 100%;
  box-sizing: border-box;
  
}
  .carousel-3d-container {
    width: 80%; /* adjust width */
    height: 400px; /* adjust height */
    margin: 200px 100px;
  margin-top: 200px;
  margin-bottom: 200px;
  }
.carousel-3d-container .indicator {
  bottom: 5px;
  left: 50%;
  transform: translateX(-50%);
  position: absolute;
  display: flex;
}
.carousel-3d-container .indicator button {
  border-radius: 50%;
  width: 8px;
  height: 8px;
  border: none;
  margin-right: 5px;
  background-color: #fff;
  opacity: 0.5;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}
.carousel-3d-container .indicator button.active {
  opacity: 1;
}
</style>