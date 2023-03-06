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
                <h1>Global <span style="color: rgba(48, 54, 159, 0.9)">IT</span> Excellence</h1>
                <p> Human Resource | Business | Technology | Innovation</p>
            </div>
        </div>

        <div class="content">
<<<<<<< HEAD:resources/views/welcome.blade.php
            <div class="text animated">
                <p class="message">YOUR COMPETITIVE ADVANTAGE</class>
                <p class="message1">"Being on top is easy. Sustaining is another story."</p>
                <p class="message2">
                    Twenty five (25) years in the business prove our strength in various technologies, deep knowledge of
                    major industries, and excellence in quality service delivery only by engineering experts.
                    </br>Quality lies in adopting international standard processes in development. Innovation is
                    adapting and embracing technology to grow the business.
                    </br>Consistency in quality delivery and innovation makes AWS your strategic partner in global
                    business. Together, we sustain your competitive advantage.
                </p>
            </div>
            <div class="image animated">
                <img src="{{ asset('storage/images/assets/skyscraper.png') }}" alt="Skyscraper">
            </div>
        </div>
        <div class="carousel-content">
            <p class="carousel-message">SERVICES & SOLUTIONS</p>
            <p class="carousel-message1">Get The Best Service For Your <span style="color:#0F76A0"> Needs</span<< /p>
                    <carousel></carousel>
=======
  <div class="grid-item text animated">
    <p class ="message">YOUR COMPETITIVE ADVANTAGE</p>
    <p class="message1">"Being on top is easy. Sustaining is another story."</p>
    <p class="message2">
      Twenty five (25) years in the business prove our strength in various technologies, deep knowledge of major industries, and excellence in quality service delivery only by engineering experts.
      <br>Quality lies in adopting international standard processes in development. Innovation is adapting and embracing technology to grow the business.
      <br>Consistency in quality delivery and innovation makes AWS your strategic partner in global business. Together, we sustain your competitive advantage.
    </p>
  </div>
  <div class="grid-item image animated">
    <img src="{{ asset('storage/images/assets/skyscraper.png') }}" alt="Skyscraper">
  </div>
</div>
        <div class="carousel-content">
          <p class="carousel-message">SERVICES & SOLUTIONS</p>
          <p class="carousel-message1">Get The Best Service For Your <span style ="color:#0F76A0"> Needs</span<</p>
          <div class="carousel-items"><carousel></carousel></div>
>>>>>>> d1accd7b23d80723b9a6a7b94d239123dd7640a0:resources/images/assets/welcome.blade.php
        </div>

      
        

        <fter></fter>
    </div>

</body>

</html>


<style scoped>
<<<<<<< HEAD:resources/views/welcome.blade.php
    /**CAROUSEL CONTENT */
    .carousel-content {
        text-align: center;
        padding-bottom: 50px;
=======
  .carosel-items{
    max-width: 1000px;
  max-height: 900px;
  }
  /**CAROUSEL CONTENT */
.carousel-content{
  text-align: center;
  padding-bottom: 50px;
  
}
.carousel-message{
  font-family: 'Lato', sans-serif;
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 20px;
/* identical to box height */
color: #0F76A0;
}
.carousel-message1 {
  font-family: 'Lato', sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 65px;
  line-height: 40px;
  margin-bottom: 100px;
  /* identical to box height */
}
  /**CONTENT */
  .content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
  margin: 200px 100px;
  margin-top: 200px;
  margin-bottom: 200px;
}
.message {
  font-family: 'Inter', sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 15px;
  line-height: 18px;
  color: #0F76A0;
  margin-left: 20px;
  margin-right: 20px;


}

.message1 {
  font-family: 'Lato', sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 60px;
    line-height: 60px;
    margin-left: 20px;
    margin-right: 20px;

}
.message2 {
  font-family: 'Lato', sans-serif;
  font-style: normal;
  font-weight: light;
  font-size: 30px;
  line-height: 30px;
  margin-left: 20px;
  margin-right: 20px;
  text-align: justify;}

  .image {
    flex: 1 1 100%;
    text-align: center;
    margin-top: 25px;


  }

  .image img {
    max-width: 100%;
    height: 100%;
    width: 700px;
    margin: 0 auto;
  }

  @media screen and (min-width: 768px) {
    .content {
      justify-content: space-between;
>>>>>>> d1accd7b23d80723b9a6a7b94d239123dd7640a0:resources/images/assets/welcome.blade.php
    }

    .carousel-message {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 20px;
        /* identical to box height */
        color: #0F76A0;
    }

    .carousel-message1 {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 700;
        font-size: 40px;
        line-height: 40px;
        /* identical to box height */



    }

    /**CONTENT */
    .content {
        display: flex;
        flex-wrap: wrap;
        margin: 100px 0;
    }

    .message {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 15px;
        line-height: 18px;
        color: #0F76A0;
        margin-left: 20px;
        margin-right: 20px;


    }

    .message1 {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 100;
        font-size: 60px;
        line-height: 60px;
        margin-left: 20px;
        margin-right: 20px;

    }

    .message2 {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 100;
        font-size: 30px;
        line-height: 30px;
        margin-left: 20px;
        margin-right: 20px;

    }

    .image {
        flex: 1 1 100%;
        text-align: center;
        margin-top: 25px;


    }
<<<<<<< HEAD:resources/views/welcome.blade.php
=======
    
  }
>>>>>>> d1accd7b23d80723b9a6a7b94d239123dd7640a0:resources/images/assets/welcome.blade.php

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

<<<<<<< HEAD:resources/views/welcome.blade.php
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
=======

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
  font-family: 'Lato', sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 70px;
  line-height: 18px;
  margin-bottom: 20px;
}

  .banner-text p {
    font-size: 1.5em;
    margin: 0;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translate(-50%, -60%);
>>>>>>> d1accd7b23d80723b9a6a7b94d239123dd7640a0:resources/images/assets/welcome.blade.php
    }

    @media only screen and (max-width: 768px) and (max-height: 1024px) and (orientation: portrait) {
        .banner {
            height: 55vh;
        }
    }

    @media only screen and (max-width: 800px) and (max-height: 1280px) and (orientation: portrait) {
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
            transform: translate(0, 50px);
            /* move content 50px down */
        }

        to {
            opacity: 1;
            transform: translate(0, 0);
            /* move content back to original position */
        }
    }

    .text.animated,
    .image.animated {
        animation: fadeInContent 1s forwards;
        animation-delay: 0.5s;
        /* add delay for each item */
    }
</style>
