

$(document).ready(function () {
  // navfixed-------------


  var initialSrc = "./images/new/gnoiin 1-2.png";
  var scrollSrc = "./images/new/logo1-3.png";

  $(document).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('nav').css({ "position": "fixed", "color": "#000", "top": "0", "width": "100%", "background": "#FFF" });
      $('.nav-link').css({ "color": "#000" });
      $('.fa-bars').css({"color":"#000"})
      $('#wrap').css({'top':"100px"})
      $("#logo").attr("src", scrollSrc);
      $('.ContactUs').css({ "background": "#005d89", "color": "#fff" });

    } else {
      $('nav').css({ "position": "static", "top": "-1000%", "background": "none" });
      $('.ContactUs').css({ "color": "#000 ", "background": "#fff" });
      $('.nav-link').css({ "color": "#fff" });
      $('.fa-bars').css({"color":"#fff"})
      $('#wrap').css({'top':"120px"})
      $("#logo").attr("src", initialSrc);
    }


  });

  // careeer pae details 
  $(document).ready(function () {
    $(".open-call-btn").on("click", function (e) {
      e.preventDefault();
      $("#wrap").animate({ width: "toggle" }, 700);
      $(".open-call").toggleClass("opened closed");
    });
    $(".close-call").click(function () {
      $("#wrap").hide({ width: "toggle" }, 700);
    });
  });
  //menutoggler------------

  if ($(window).innerWidth() < 992) {

      $("#menuBar").click(function () {

          $(".navbar-collapse").slideToggle("slow");
      });



      $(".dropdown").removeClass("dropdown-hover")

      $(".dropdown").click(function (e) {
          $(this).children('div').slideToggle("slow");

      });



  }

  if (window.innerWidth < 992) {
    document.getElementById("menuBar").addEventListener("click", function () {
      document.querySelector(".navbar-collapse").style.display = "block";
    });

    var dropdowns = document.querySelectorAll(".dropdown");
    for (var i = 0; i < dropdowns.length; i++) {
      dropdowns[i].classList.remove("dropdown-hover");
      dropdowns[i].addEventListener("click", function (e) {
        this.children[0].style.display = "block";
      });
    }
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





// const headings = document.getElementsByClassName('typing-heading');

// Array.from(headings).forEach((heading) => {
//   const textLines = heading.innerHTML.split('<br>'); // Split text into lines

//   let lineIndex = 0;
//   let charIndex = 0;

//   function typeText() {
//     if (lineIndex < textLines.length) {
//       const currentLine = textLines[lineIndex];
//       if (charIndex < currentLine.length) {
//         heading.innerHTML = textLines
//           .map((line, index) => (index === lineIndex ? line.substr(0, charIndex+1) : line))
//           .join('<br>');
//         charIndex++;
//       } else {
//         lineIndex++;
//         charIndex = 0;
//       }
//       setTimeout(typeText, Math.random() * 100 + 50); // Decreased delay between each character
//     }
//   }

//   typeText();
// });
const headings = document.getElementsByClassName('typing-heading');

// Callback function to handle the intersection
const handleIntersection = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      startTyping(entry.target);
    } else {
      pauseTyping(entry.target);
    }
  });
};

// Configure the Intersection Observer
const observerOptions = {
  root: null,
  rootMargin: '0px',
  threshold: 0.5 // Adjust this threshold as per your requirement
};

// Create an observer instance
const observer = new IntersectionObserver(handleIntersection, observerOptions);

// Iterate through the headings and observe each one
Array.from(headings).forEach((heading) => {
  observer.observe(heading);
});

// Typewriter function
function startTyping(heading) {
  const textLines = heading.innerHTML.split('<br>'); // Split text into lines

  let lineIndex = 0;
  let charIndex = 0;
  let isPaused = false;

  function typeText() {
    if (!isPaused && lineIndex < textLines.length) {
      const currentLine = textLines[lineIndex];
      if (charIndex < currentLine.length) {
        heading.innerHTML = textLines
          .map((line, index) => (index === lineIndex ? line.substr(0, charIndex + 1) : line))
          .join('<br>');
        charIndex++;
      } else {
        lineIndex++;
        charIndex = 0;
      }
      setTimeout(typeText, Math.random() * 100 + 50); // Decreased delay between each character
    }
  }

  function pauseTyping() {
    isPaused = true;
  }

  function resumeTyping() {
    isPaused = false;
    typeText();
  }

  typeText();

  // Event listener to pause typing when the user scrolls
  window.addEventListener('scroll', pauseTyping);

  // Event listener to resume typing when the user scrolls back up
  window.addEventListener('scroll', resumeTyping);
}





