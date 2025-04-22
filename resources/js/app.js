// slick carousel
    import "slick-carousel";
    import $ from "jquery";

// summernote
    import 'summernote/dist/summernote-lite.css';
    import 'summernote/dist/summernote-lite.js';

    window.$ = window.jQuery = $;


import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();



// slick carousel
    window.$ = $;
    window.jQuery = $;

    // $(document).ready(function () {
    //     $(".slider").slick({
    //         dots: true,
    //         infinite: true,
    //         speed: 500,
    //         slidesToShow: 1,
    //         autoplay: true,
    //         autoplaySpeed: 3000,
    //         // arrows: false,
    //         fade: true,
    //         prevArrow: $(".prev-arrow"),
    //         nextArrow: $(".next-arrow"),   
    //     });
    // });
    
    $(document).ready(function () {
        $(".slider-service").slick({
            // dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 3000,
            // arrows: false,
            // fade: true,
            prevArrow: $(".prev-arrow-service"),
            nextArrow: $(".next-arrow-service"),   
        });
    });    

    $(document).ready(function () {
        $(".slider-logos").slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 6,
            autoplay: true,
            autoplaySpeed: 3000, 
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ],
        });
    });


// summernote
    
    $(document).ready(function() {
        $('.longDescription').summernote({
            placeholder: 'Write product description...',
            tabsize: 2,
            height: 200
        });
    });

// gsap
$(document).ready(function () {
    function animateSlide(slide) {
        const elements = slide.find(".sliderH2, .sliderP");

        // Reset styles
        gsap.set(elements, {
            opacity: 0,
            y: 30
        });

        // Animate in
        gsap.to(elements, {
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.2,
            ease: "power2.out",
        });

        // Animate out after 2s (before next slide)
        gsap.to(elements, {
            opacity: 0,
            y: -30,
            duration: 0.8,
            stagger: 0.2,
            ease: "power2.in",
            delay: 2 // wait before fading out
        });
    }

    $(".slider").on("init", function (event, slick) {
        const firstSlide = $(slick.$slides[0]);
        animateSlide(firstSlide);
    });

    $(".slider").on("afterChange", function (event, slick, currentSlide) {
        const current = $(slick.$slides[currentSlide]);
        animateSlide(current);
    });

    $(".slider").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 4000, // 4s
        fade: true,
    });
});


