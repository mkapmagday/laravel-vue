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
