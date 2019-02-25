$(document).ready(function() {
    $('#content-secondary ul').owlCarousel({
        loop:true,
        margin:10,
        dots: true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:1,
                loop:true
            }
        }
    });

    $('ul#learn2').owlCarousel({
        loop:true,
        items: 3,
        margin:10,
        nav: true,
        dots: true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items: 3,
                dots: true,
            },
            600:{
                items: 3,
                dots: true,
            },
            1000:{
                items: 3,
                dots: true,
                loop:true
            }
        }
    });
});