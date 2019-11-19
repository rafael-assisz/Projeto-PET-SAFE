$(document).ready(function(){

    $('#nav-toggle').click(function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.header-collapse').toggleClass('active');
    });

    // Carousel principal
    $('#carousel_principal').owlCarousel({
        items:1,
        lazyLoad:true,
        loop:true,
        margin: 0,
        nav: true,
        navSpeed: 2000,
        navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        dots: true,
        dotsSpeed: 2000,
        autoplay: true,
        autoplaySpeed: 2000,
        responsiveRefreshRate: 10
    });
});