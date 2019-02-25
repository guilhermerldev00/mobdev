$(document).ready(function() {
    $('#content-secondary ul').owlCarousel({
        loop:true,
        margin:10,
        dots: true,
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
                loop:false
            }
        }
    });

    $('ul#learn2').owlCarousel({
        loop:true,
        items: 3,
        margin:10,
        dots: true,
        responsiveClass:true,
        responsive:{
            0:{
                items: 3,
            },
            600:{
                items: 3,
            },
            1000:{
                items: 3,
                loop:true
            }
        }
    });
});