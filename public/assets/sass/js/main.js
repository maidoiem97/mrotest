$(document).ready(function() {
    $('.site-main__slide .owl-carousel').owlCarousel({
        loop: true,
        margin: 36,
        nav: false,
        dots: true,
        items: 5,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            400:{
                items:2,
            },
            700:{
                items:3,
            },
            1000:{
                items:5,
            }
        }
    });
    $('.site-main__banner .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        items: 1,
    });

    $('.images_large .owl-carousel').owlCarousel({
        loop:true,
        autoplay:false,
        autoplayTimeout:5000,
        smartSpeed: 1000,
        autoplayHoverPause:true,
        margin:0,
        dots: false,
        nav: false,
        items: 1,
    });      
    $('.images_thumnail.owl-carousel').owlCarousel({
        loop:false,
        margin:12,
        nav:false,
        dots:false,
        autoplay:false,
        items: 5,
        responsive:{
            400:{
                items:3
            },
            600:{
                items:5
            }
        }
    });
    $('.left-mobi').on('click',function(){
       
        $('.header-pc').toggleClass('active');
    });
     $('.header-overlay').on('click',function(){
       
        $('.header-pc').removeClass('active');
    });
    
});