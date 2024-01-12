$('#carouselExampleFade').on('mouseleave', function () {
    $(this).carousel('cycle');
  });
  


    function animateCounter(element, targetCount, duration) {
      var currentCount = 0;
      var increment = (targetCount / duration) * 10;
      var intervalTime = 10;

      function updateCounter() {
          element.textContent = Math.round(currentCount);
          currentCount += increment;

          if (currentCount <= targetCount) {
              setTimeout(updateCounter, intervalTime);
          }
      }

      updateCounter();
  }

  function isInViewport(element) {
      var rect = element.getBoundingClientRect();
      return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
  }

  function handleScroll() {
      var counter1Container = document.getElementById("counter1-container");
      var counter2Container = document.getElementById("counter2-container");

      if (isInViewport(counter1Container)) {
          animateCounter(document.getElementById("counter1"), 14, 2000);
          window.removeEventListener("scroll", handleScroll);
      }

      if (isInViewport(counter2Container)) {
          animateCounter(document.getElementById("counter2"), 2800, 2000);
          window.removeEventListener("scroll", handleScroll);
      }

      if (isInViewport(counter2Container)) {
        animateCounter(document.getElementById("counter3"), 20000, 2000);
        window.removeEventListener("scroll", handleScroll);
    }
    if (isInViewport(counter2Container)) {
      animateCounter(document.getElementById("counter4"), 40, 2000);
      window.removeEventListener("scroll", handleScroll);
  }
  if (isInViewport(counter2Container)) {
    animateCounter(document.getElementById("counter5"), 7000, 2000);
    window.removeEventListener("scroll", handleScroll);
}

if (isInViewport(counter2Container)) {
  animateCounter(document.getElementById("counter6"), 150, 2000);
  window.removeEventListener("scroll", handleScroll);
}
  }

  window.addEventListener("scroll", handleScroll);
  handleScroll();




 