$('.owl-blogs').owlCarousel({
    loop:true,
    margin:25,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    nav: true,
    dots: false,
    responsive:{
        0:{
            items:1.5,
        },
        600:{
            items:2.5,
        },
        1200:{
            items:4,
        }
    }
})
$('.owl-brands').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:3000,
    nav: true,
    autoplayHoverPause: true,
    dots: false,
    // mouseDrag: false,
    // touchDrag: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            center: true,
            items:1,
        }
    }
})
$('.owl-countries').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:3000,
    nav: false,
    autoplayHoverPause: true,
    dots: false,
    // mouseDrag: false,
    // touchDrag: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
})
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[3000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})