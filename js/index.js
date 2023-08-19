

$(document).ready(function () {
    // navfixed-------------


    var initialSrc = "./images/new/gnoiin 1-2.png";
     var scrollSrc = "./images/new/logo1-3.png";

    $(document).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('nav').css({ "position": "fixed", "color": "#000", "top": "0", "width": "100%", "background": "#FFF" });
            $('.nav-link').css({ "color": "#000" });
            $("#logo").attr("src", scrollSrc);
            $('.ContactUs').css({  "background": "#005d89" ,"color": "#fff" });

        } else {
            $('nav').css({ "position": "static", "top": "-1000%", "background": "none" });
            $('.ContactUs').css({ "color": "#000 " ,"background": "#fff"});
            $('.nav-link').css({ "color": "#fff" });
            $("#logo").attr("src", initialSrc);
        }
    });  
    // menutoggler------------

    if ($(window).innerWidth() < 992) {
        
        $("#menuBar").click(function () {
        
            $(".navbar-collapse").slideToggle("slow");
        });
        

        
        $(".dropdown").removeClass("dropdown-hover")

        $(".dropdown").click(function (e) {
            $(this).children('div').slideToggle("slow");

        });



    }

    (function ($) {
        "use strict";
        // Auto-scroll
        $('#myCarousel').carousel({
          interval: 3000
        });
      
        // Control buttons
        $('.next').click(function () {
          $('.carousel').carousel('next');
          return false;
        });
        $('.prev').click(function () {
          $('.carousel').carousel('prev');
          return false;
        });
      
        // On carousel scroll
        $("#myCarousel").on("slide.bs.carousel", function (e) {
          var $e = $(e.relatedTarget);
          var idx = $e.index();
          var itemsPerSlide = 3;
          var totalItems = $(".carousel-item").length;
          if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide -
                (totalItems - idx);
            for (var i = 0; i < it; i++) {
              // append slides to end 
              if (e.direction == "left") {
                $(
                  ".carousel-item").eq(i).appendTo(".carousel-inner");
              } else {
                $(".carousel-item").eq(0).appendTo(".carousel-inner");
              }
            }
          }
        });
      })
      (jQuery);
      new Swiper('.slides-1', {
       speed: 600,
       loop: true,
       autoplay: {
         delay: 5000,
         disableOnInteraction: false
       },
       slidesPerView: 'auto',
       pagination: {
         el: '.swiper-pagination',
         type: 'bullets',
         clickable: true
       },
       
       navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
       }
      });
});






