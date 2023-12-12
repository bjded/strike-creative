// Mobile Menu Open
function mobileMenuOpen() {
    $('body').css({
        'overflow' : 'hidden',
    });
    $('.mobile-menu-open').css({
        'transition-duration' : '0.5s',
        'transform' : 'translateX(70px)',
    });
    $('.mobile-menu-close').css({
        'transition-duration' : '0.5s',
        'transform' : 'translateX(0px)',
    });
    $('.mobile-nav-container').css({
        'transition-duration' : '0.5s',
        'height' : '100vh',
        'visibility' : 'visible',
        'opacity' : '1',
    });
}

// Mobile Menu Close
function mobileMenuClose() {
    $('body').css({
        'overflow' : 'auto',
    });
    $('.mobile-menu-close').css({
        'transition-duration' : '0.5s',
        'transform' : 'translateX(70px)',
    });
    $('.mobile-menu-open').css({
        'transition-duration' : '0.5s',
        'transform' : 'translateX(0px)',
    });
    $('.mobile-nav-container').css({
        'transition-duration' : '0.5s',
        'height' : '0',
        'visibility' : 'hidden',
        'opacity' : '0',
    });
}

$(document).ready(function() {
    // Copyright Log
    console.log ('© 2021-2022 Strike Creative')

    // Digital Services Slider
    $('.digital-services-cta-slider').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        slidesToScroll: 1
    });

    // Let's Talking Pricing Slider
    $('.lets-talk-pricing-slider').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        slidesToScroll: 1
    });

    // Discover Our Work CTA Slider
    $('.discover-our-work-cta-slider').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        slidesToScroll: 1
    });
});
