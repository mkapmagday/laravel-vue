<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Laravel-Vue.js</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-carousel-3d@0.2.0/dist/vue-carousel-3d.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
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
        </div>


        

        <fter></fter>
    </div>
    <script>
        $(document).ready(function () {
            $('[data-widget="control-sidebar"]').controlSidebar();

            // Hide the control sidebar when clicking outside of it
            $(document).on('click', function (e) {
                if ($(e.target).closest('.control-sidebar').length === 0 && $(e.target).closest('.navbar-toggler').length === 0) {
                    $('[data-widget="control-sidebar"]').controlSidebar('hide');
                }
            });
        });

    </script>
</body>

</html>


<style scoped>
    /** SIDEBAR */
    .control-sidebar {
  position: fixed;
  top: 50px; /* adjust this to the height of your navigation bar */
  right: -250px;
  width: 250px;
  height: calc(100vh - 50px); /* adjust this to leave room for your navigation bar */
  background-color: #f4f6f9;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  z-index: 1030;
  transition: right 0.3s ease-in-out;
}

.control-sidebar.open {
  right: 0;
}

.control-sidebar .sidebar-heading {
  background-color: #e9ecef;
  color: #495057;
  font-weight: bold;
  font-size: 1.2rem;
  padding: 10px;
}

.control-sidebar .nav-link {
  color: #495057;
  font-weight: 600;
  font-size: 1rem;
  padding: 10px;
  border-bottom: 1px solid #dfe2e5;
}

.control-sidebar .nav-link:hover {
  background-color: #dfe2e5;
}

.control-sidebar .nav-item:last-child .nav-link {
  border-bottom: none;
}

.control-sidebar .nav-item:last-child .nav-link:hover {
  background-color: transparent;
}


    /**CAROUSEL CONTENT */
    .carousel-content {
        text-align: center;
        padding-bottom: 50px;
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
