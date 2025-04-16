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
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
        });
    });
