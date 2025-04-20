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

    $(document).ready(function () {
        $(".slider").slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            // arrows: false,
            // fade: true,
            prevArrow: $(".prev-arrow"),
            nextArrow: $(".next-arrow"),   
        });
    });
    
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