$(document).ready(function() {
    $('#content-secondary ul').owlCarousel({
        loop:false,
        margin:10,
        dots: true,
        nav: true,
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
                loop:false
            }
        }
    });

    $('ul#learn2').owlCarousel({
        loop:false,
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
                loop:false
            }
        }
    });
});

function changeDisplay() {
    document.getElementById("mobile-options").display = "inline-block";
}

var menuMobile = document.getElementById("menu-open");

menuMobile.addEventListener("click", function(){
    document.getElementById("menu-mobile-topics").style.display="block";
    document.getElementById("menu-open").style.display="none";
    document.getElementById("menu-close").style.display="block";
    document.getElementsByTagName("body")[0].style.overflow="hidden";
})

var menuMobile = document.getElementById("menu-close");

menuMobile.addEventListener("click", function(){
    document.getElementById("menu-mobile-topics").style.display="none";
    document.getElementById("menu-open").style.display="block";
    document.getElementById("menu-close").style.display="none";
    document.getElementsByTagName("body")[0].style.overflow="initial";
})