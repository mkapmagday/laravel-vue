<template>
  <div>
    <carousel-3d :controls-visible="true" :controls-prev-html="'&#10092; '" :controls-next-html="'&#10093;'"
      :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="3000"
      :indicator-enabled="true" :indicator-dynamic-bullets="true" :width="700" :height="500">
      <slide v-for="(slide, i) in slides" :key="i" :index="i">
        <figure>
          <img :src="slide.img" alt="">
          <figcaption>
            <h4 style="color: blue;">{{ slide.title }}</h4>
            <h5>{{ slide.caption }}</h5>
          </figcaption>
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
          title: 'Embedded Software & Application Development',
          caption: 'Since our inception, we have actively pursued product development across numerous industries. By adapting quickly to the product development cycle of the customer, we aim to ensure quality and reduce delivery times.'
        },
        {
          img: require('../../images/assets/2.jpg'),
          title: 'Embedded Software & Application Development',
          caption: 'Since our inception, we have actively pursued product development across numerous industries. By adapting quickly to the product development cycle of the customer, we aim to ensure quality and reduce delivery times.'
        },
        {
          img: require('../../images/assets/3.jpg'),
          title: 'Embedded Software & Application Development',
          caption: 'Since our inception, we have actively pursued product development across numerous industries. By adapting quickly to the product development cycle of the customer, we aim to ensure quality and reduce delivery times.'
        },
        {
          img: require('../../images/assets/4.jpg'),
          title: 'Embedded Software & Application Development',
          caption: 'Since our inception, we have actively pursued product development across numerous industries. By adapting quickly to the product development cycle of the customer, we aim to ensure quality and reduce delivery times.'
        },
        {
          img: require('../../images/assets/5.jpg'),
          title: 'Embedded Software & Application Development',
          caption: 'Since our inception, we have actively pursued product development across numerous industries. By adapting quickly to the product development cycle of the customer, we aim to ensure quality and reduce delivery times.'
        },
        {
          img: require('../../images/assets/6.jpg'),
          title: 'Embedded Software & Application Development',
          caption: 'Since our inception, we have actively pursued product development across numerous industries. By adapting quickly to the product development cycle of the customer, we aim to ensure quality and reduce delivery times.'
        }

      ]
    }
  }
}
</script>

<style>
figcaption{
  padding: 0;

}


.carousel-3d-container figure {
  margin: 0;
}

.carousel-3d-container figure img {
  height: 100%;
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
  width: 80%;
  /* adjust width */
  height: 400px;
  margin: 0 auto;
}

.carousel-3d-container figure {
  margin: 0;
  height: 100%;
  /* set the height of the figure to 100% */
}

.carousel-3d-container figure img {
  height: 100%;
  object-fit: cover;
  /* ensure that the image covers the entire figure element */
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