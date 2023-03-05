<template>
  <div class="carousel-container">
    <carousel-3d :perspective="2000" :space="500" class="carousel">
      <slide :index="0">
        <div class="slide-content">
          <img :src="require('../../images/assets/1.jpg')" alt="Slide 1" class="slide-image">
          <h3 class="slide-title">Title 1</h3>
          <p class="slide-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </slide>
      <slide :index="1">
        <div class="slide-content">
          <img :src="require('../../images/assets/2.jpg')" alt="Slide 2" class="slide-image">
          <h3 class="slide-title">Title 2</h3>
          <p class="slide-description">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </slide>
      <slide :index="2">
        <div class="slide-content">
          <img :src="require('../../images/assets/3.jpg')" alt="Slide 3" class="slide-image">
          <h3 class="slide-title">Title 3</h3>
          <p class="slide-description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </slide>
      <slide :index="3">
        <div class="slide-content">
          <img :src="require('../../images/assets/4.jpg')" alt="Slide 4" class="slide-image">
          <h3 class="slide-title">Title 4</h3>
          <p class="slide-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </slide>
      <slide :index="4">
        <div class="slide-content">
          <img :src="require('../../images/assets/5.jpg')" alt="Slide 5" class="slide-image">
          <h3 class="slide-title">Title 5</h3>
          <p class="slide-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</slide>
<slide :index="5">
<div class="slide-content">
<img :src="require('../../images/assets/6.jpg')" alt="Slide 6" class="slide-image">
<h3 class="slide-title">Title 6</h3>
<p class="slide-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</slide>
</carousel-3d>
<div class="carousel-navigation">
<button class="prev-slide"><i class="fas fa-chevron-left"></i></button>
<button class="next-slide"><i class="fas fa-chevron-right"></i></button>
</div>

  </div>
</template>
<style>
  .carousel-container {
    position: relative;
    width: 100%;
    height: 400px;
    margin-bottom: 30px;
  }

  .carousel-navigation {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    margin-top: -25px;
    text-align: center;
  }

  .carousel-navigation button {
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 30px;
    margin: 0 10px;
    transition: transform .2s ease-in-out;
    cursor: pointer;
  }

  .carousel-navigation button:hover {
    transform: scale(1.2);
  }

  .prev-slide {
    transform: rotate(180deg);
  }

  .slide-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 20px;
    background-color: #222;
    color: #fff;
    text-align: center;
  }

  .slide-image {
    max-width: 100%;
    max-height: 300px;
    margin-bottom: 20px;
    filter: grayscale(100%);
    transition: filter .2s ease-in-out;
  }

  .slide-image:hover {
    filter: grayscale(0%);
  }

  .slide-title {
    margin-bottom: 10px;
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
  }

  .slide-description {
    font-size: 16px;
  }
</style>