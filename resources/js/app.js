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
            placeholder: 'Write here...',
            tabsize: 2,
            height: 200,
            toolbar: [

                // Style options
                ['style', ['bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],

                // Font options
                ['font', ['fontname', 'fontsize', 'color']],

                // Text alignment options
                ['alignment', ['left', 'center', 'right', 'justify']],

                // List and paragraph options
                ['para', ['ul', 'ol', 'paragraph', 'height']],

                // Insert options
                ['insert', ['link', 'picture', 'video', 'table', 'hr', 'emoji', 'specialchar', 'codeview']],

                // View options
                ['view', ['fullscreen', 'codeview', 'help']],

                // Miscellaneous options
                ['misc', ['undo', 'redo']],
            ]
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


// sidebar

    // Function to adjust sidebar based on screen size when the page loads
    function adjustSidebarOnLoad() {
        const sidebar = document.getElementById("sidebar");

        if (window.innerWidth <= 640) {
            // For small screens (<= 640px), hide the sidebar with margin-left: -300px
            sidebar.style.marginLeft = "-300px";
        } else {
            // For larger screens, make sure the sidebar is visible with margin-left: 0
            sidebar.style.marginLeft = "0";
        }
    }

    // Adjust sidebar on page load
    window.onload = adjustSidebarOnLoad;
    window.addEventListener('resize', adjustSidebarOnLoad);

    // Function to toggle sidebar on button click
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");

        if (window.innerWidth <= 640) {
            // For small screens, toggle margin-left between -300px and 0
            if (sidebar.style.marginLeft === "-300px") {
                sidebar.style.marginLeft = "0";  // Show the sidebar
            } else {
                sidebar.style.marginLeft = "-300px";  // Hide the sidebar
            }
        } else {
            // For larger screens, toggle margin-left between -300px and 0
            if (sidebar.style.marginLeft === "-300px") {
                sidebar.style.marginLeft = "0";  // Show the sidebar
            } else {
                sidebar.style.marginLeft = "-300px";  // Hide the sidebar
            }
        }
    }

    // Attach the toggleSidebar function to the sidebar icon button
    const sidebarIcons = document.querySelectorAll(".sidebarIcon");
    sidebarIcons.forEach(icon => {
        icon.addEventListener("click", toggleSidebar);
    });