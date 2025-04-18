// slick carousel
    import "slick-carousel";
    import $ from "jquery";

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
        $(".slider-logos-list").slick({
            // dots: true,
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
                        infinite: true,
                        dots: true
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
            // arrows: false,
        });
    });

    const flyIcon = document.getElementById('fly-icon');
    const wrapper = document.getElementById('fly-icon-wrapper');

    function moveFlyIcon(e) {
        const rect = wrapper.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        // Move slightly depending on mouse position
        const offsetX = (x / rect.width - 0.5) * 20; // max ±10px
        const offsetY = (y / rect.height - 0.5) * 20;

        flyIcon.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
    }