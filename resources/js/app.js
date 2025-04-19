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









   // Sidebar submenu toggle with smooth height animation
   function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    const icon = document.getElementById(id + "-icon");
    if (submenu.style.maxHeight && submenu.style.maxHeight !== "0px") {
      submenu.style.maxHeight = "0px";
      icon.classList.remove("rotate-180");
    } else {
      submenu.style.maxHeight = submenu.scrollHeight + "px";
      icon.classList.add("rotate-180");
    }
  }

  // Sidebar collapse toggle
  const sidebar = document.getElementById("sidebar");
  const toggleBtn = document.getElementById("sidebarToggle");

  toggleBtn.addEventListener("click", () => {
    if (sidebar.classList.contains("w-72")) {
      sidebar.classList.remove("w-72");
      sidebar.classList.add("w-20");
      // Hide text labels
      sidebar.querySelectorAll("span.font-semibold").forEach((el) => {
        el.classList.add("hidden");
      });
      sidebar.querySelectorAll("nav a, nav button").forEach((el) => {
        el.classList.add("justify-center");
        el.classList.remove("justify-start");
      });
      // Hide submenu text and indent
      sidebar.querySelectorAll("ul").forEach((ul) => {
        ul.style.maxHeight = "0px";
      });
      sidebar.querySelectorAll("ul li a").forEach((a) => {
        a.classList.add("pl-0");
        a.classList.remove("pl-4");
        a.classList.add("text-center");
      });
      // Rotate all submenu icons back
      sidebar.querySelectorAll("i.fa-chevron-down").forEach((icon) => {
        icon.classList.remove("rotate-180");
      });
    } else {
      sidebar.classList.remove("w-20");
      sidebar.classList.add("w-72");
      // Show text labels
      sidebar.querySelectorAll("span.font-semibold").forEach((el) => {
        el.classList.remove("hidden");
      });
      sidebar.querySelectorAll("nav a, nav button").forEach((el) => {
        el.classList.remove("justify-center");
        el.classList.add("justify-start");
      });
      sidebar.querySelectorAll("ul li a").forEach((a) => {
        a.classList.remove("text-center");
        a.classList.remove("pl-0");
        a.classList.add("pl-4");
      });
    }
  });

  // On page load, set submenu maxHeight to 0 for smooth animation
  document.querySelectorAll("nav ul").forEach((ul) => {
    ul.style.maxHeight = "0px";
  });