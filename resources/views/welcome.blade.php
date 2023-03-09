<!DOCTYPE html>
<html>
    <head>
        @include('partials.head')
    </head>
<body>
    <div id="app">
        <navbar></navbar>
        <div class="banner">
            <img src="{{ asset('images/skyscraper.png') }}" alt="Skyscraper" class="banner-img">
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
                <img src="{{ asset('images/skyscraper.png') }}" alt="Skyscraper">
            </div>
        </div>
        <div class="carousel-content">
            <p class="carousel-message">SERVICES & SOLUTIONS</p>
            <p class="carousel-message1">Get The Best Service For Your <span style="color:#0F76A0"> Needs</span<< /p>
                    <carousel></carousel>
        </div>


        <div class="carousel-container">
            <div class="image-carousel">
                <img src="{{ asset('images/s1.jpg') }}" class="col-sm">
                <img src="{{ asset('images/s2.png') }}" class="col-sm">
                <img src="{{ asset('images/s3.png') }}" class="col-sm">
                <img src="{{ asset('images/s4.png') }}" class="col-sm">
                <img src="{{ asset('images/s5.png') }}" class="col-sm">
                <img src="{{ asset('images/s6.png') }}" class="col-sm">
            </div>
            <div class="image-carousel">
                <img src="{{ asset('images/s1.jpg') }}" class="col-sm">
                <img src="{{ asset('images/s2.png') }}" class="col-sm">
                <img src="{{ asset('images/s3.png') }}" class="col-sm">
                <img src="{{ asset('images/s4.png') }}" class="col-sm">
                <img src="{{ asset('images/s5.png') }}" class="col-sm">
                <img src="{{ asset('images/s6.png') }}" class="col-sm">
            </div>
        </div>
        <fter></fter>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-widget="control-sidebar"]').controlSidebar();

            // Hide the control sidebar when clicking outside of it
            $(document).on('click', function(e) {
                if ($(e.target).closest('.control-sidebar').length === 0 && $(e.target).closest(
                        '.navbar-toggler').length === 0) {
                    $('[data-widget="control-sidebar"]').controlSidebar('hide');
                }
            });
        });

        // Wait for the document to load
        document.addEventListener('DOMContentLoaded', function() {
            // Get all image carousels
            const carousels = document.querySelectorAll('.image-carousel');

            // Loop through each carousel
            carousels.forEach(function(carousel) {
                // Clone the images and append them to the carousel
                const images = carousel.querySelectorAll('img');
                images.forEach(function(image) {
                    const clone = image.cloneNode(true);
                    carousel.appendChild(clone);
                });
            });
        });
    </script>

</body>

</html>

