<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Laravel-Vue.js</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <navbar></navbar>
        <div class="banner">
            <img src="https://i.postimg.cc/JnNNCL0j/skyscrapers-ge41a4feda-1920-1-2.png">
            <div class="banner-text">
                <h1>Global IT Excellence</h1>
                <p> Human Resource | Business | Technology | Innovation</p>
            </div>
        </div> 
        <div class="content">
            <div class="text animated">
                <h1>"Being on top is easy. Sustaining is another story."</h1>
                <h>
                Twenty five (25) years in the business prove our strength in various technologies, deep knowledge of major industries, and excellence in quality service delivery only by engineering experts.
                </br>Quality lies in adopting international standard processes in development. Innovation is adapting and embracing technology to grow the business.
                </br>Consistency in quality delivery and innovation makes AWS your strategic partner in global business. Together, we sustain your competitive advantage.
                </h3>
            </div>
            <div class="image animated">
                <img src="https://i.postimg.cc/yYgNP9qW/sustainable-growth.jpg">
            </div>
        </div>
        <div class="content">
           <h1>SERVICES AND SOLUTIONS</h1>
        </div>


       
    </div>
    
</body>
</html>

<style scoped>
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
    position: relative;
  }

  .banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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
