// slick carousel
    import "slick-carousel";
    import $ from "jquery";

import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// import Swiper from 'swiper/bundle';
// import 'swiper/css/bundle';
// swiper animation custom
// document.addEventListener("DOMContentLoaded", function () {
//     const swiper = new Swiper(".mySwiper", {
//         loop: true,
//         autoplay: {
//             delay: 3000,
//         },
//         pagination: {
//             el: ".swiper-pagination",
//             clickable: true,
//         },
//         navigation: {
//             nextEl: ".swiper-button-next",
//             prevEl: ".swiper-button-prev",
//         },
//     });
// });

// slick carousel
    window.$ = $;
    window.jQuery = $;

    $(document).ready(function () {
        $(".slider").slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
        });
    });
