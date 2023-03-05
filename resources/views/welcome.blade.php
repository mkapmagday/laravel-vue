<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Laravel-Vue.js</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-carousel-3d@0.2.0/dist/vue-carousel-3d.min.js"></script>

</head>
<body>
    <div id="app">
      <navbar></navbar>
        <div class="banner">
            <img src="{{ asset('storage/images/assets/skyscraper.png') }}" alt="Skyscraper" class="banner-img">
            <div class="banner-text">
                <h1>Global IT Excellence</h1>
                <p> Human Resource | Business | Technology | Innovation</p>
            </div>
        </div> 

        <div class="content">
            <div class="text animated">
                <h1>"Being on top is easy. Sustaining is another story."</h1>
                <h4>
                Twenty five (25) years in the business prove our strength in various technologies, deep knowledge of major industries, and excellence in quality service delivery only by engineering experts.
                </br>Quality lies in adopting international standard processes in development. Innovation is adapting and embracing technology to grow the business.
                </br>Consistency in quality delivery and innovation makes AWS your strategic partner in global business. Together, we sustain your competitive advantage.
                </h4>
            </div>
            <div class="image animated">
              <img src="{{ asset('storage/images/assets/skyscraper.png') }}" alt="Skyscraper">
            </div>
        </div>
        <div class="carousel-text">
          <h3>SERVICES & SOLUTIONS</h3>
          <h1>GET THE BEST SERVICE FOR YOUR NEEDS</h1>
          <carousel></carousel>
        </div>

        
       <fter></fter>
    </div>

</body>
</html>


<style scoped>
  /**CAROUSEL CONTENT */

  /**CONTENT */
  .content {
    display: flex;
    flex-wrap: wrap;
    margin: 50px 0;
  }
  

  .text {
    flex: 1 1 100%;
    padding: 0 25px;
  }

  .image {
    flex: 1 1 100%;
    text-align: center;
    margin-top: 25px;
  }

  .image img {
    max-width: 100%;
    height: 100%;
    width: 80%;
    margin: 0 auto;
  }

  @media screen and (min-width: 768px) {
    .content {
      justify-content: space-between;
    }

    .text {
      flex: 1 1 40%;
      padding-left: 100px;
      
    }

    .image {
      flex: 1 1 50%;
      text-align: right;
      margin-top: 0;
      padding-right: 100px;
    }
  }

  /** Banner CSS */
  .banner {
    height: 100vh;
    background-size: cover;
    background-position: 50%;
    position: relative;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
  }
  @media only screen and (max-width: 768px) and (max-height: 1024px) and (orientation: portrait){
      .banner {
      height: 55vh;
    }
  }
  @media only screen and (max-width: 800px) and (max-height: 1280px) and (orientation: portrait){
      .banner {
        height: 55vh;
    }
}


  .banner-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  @media screen and (max-width: 767px) {
  .banner {
    height: 50vh;
  }
}

  .banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    opacity: 0;
    animation: fadeIn 2s forwards;
  }

  .banner-text h1 {
    font-size: 4em;
    margin: 0;
  }

  .banner-text p {
    font-size: 1.5em;
    margin: 0;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translate(-50%, -60%);
    }
    to {
      opacity: 1;
      transform: translate(-50%, -50%);
    }
  }
  @keyframes fadeInContent {
  from {
    opacity: 0;
    transform: translate(0, 50px); /* move content 50px down */
  }
  to {
    opacity: 1;
    transform: translate(0, 0); /* move content back to original position */
  }
}
  .text.animated,
.image.animated {
  animation: fadeInContent 1s forwards;
  animation-delay: 0.5s; /* add delay for each item */
}
</style>
