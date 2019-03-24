$(document).ready(function() {
    $('#owl-2 .owl-carousel').owlCarousel({
        items: 3,
        margin: 16,
        loop: true,
        stagePadding: 64,
        nav: true,
        dots: false,
        dotsEach: true,
        lazyLoad: false,
        autoplay: true,
        autoplaySpeed: 4500,
        navSpeed: 4500,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            750: {
                items: 2,
            },
            1000: {
                items: 4,
            }
        }
    });

});