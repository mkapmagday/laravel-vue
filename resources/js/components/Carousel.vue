<template>

  <carousel-3d>
    <slide :index="0">
      <img :src="require('../../images/assets/nav-icon-hover.png')" alt="Slide 1">
    </slide>
    <slide :index="1">
      <img :src="require('../../images/assets/nav-icon-hover.png')" alt="Slide 2">
    </slide>
    <slide :index="2">
      <img :src="require('../../images/assets/nav-icon-hover.png')" alt="Slide 3">
    </slide>
    <slide :index="3">
      <img :src="require('../../images/assets/nav-icon-hover.png')" alt="Slide 4">
    </slide>
    <slide :index="4">
      <img :src="require('../../images/assets/nav-icon-hover.png')" alt="Slide 5">
    </slide>
  </carousel-3d>
</template>

<style scoped>
  .carousel-3d-container {
    border-radius: 10px;
    padding: 20px;
    width: 100px;
  }
</style>
