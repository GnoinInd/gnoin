window.addEventListener('DOMContentLoaded', function () {
  var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var isMobile = screenWidth <= 992;

  function handleDropdowns() {
    if (isMobile) {
      var dropdowns = document.querySelectorAll('.dropdown-menu');

      dropdowns.forEach(function (dropdown) {
        var dropdownToggle = dropdown.closest('.dropdown').querySelector('.nav-link');

        if (dropdownToggle) {
          dropdownToggle.addEventListener('click', function (event) {
            event.preventDefault();
            event.stopPropagation();

            var isOpen = dropdown.classList.contains('show');

            closeAllDropdowns();

            if (!isOpen) {
              dropdown.classList.add('show');
            }
          });
        }
      });

      document.addEventListener('click', function (event) {
        closeAllDropdowns();
      });
    }
  }


  function closeAllDropdowns() {
    var dropdowns = document.querySelectorAll('.dropdown-menu');

    dropdowns.forEach(function (dropdown) {
      dropdown.classList.remove('show');
    });
  }

  handleDropdowns();

  window.addEventListener('resize', function () {
    screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    isMobile = screenWidth <= 992;

    closeAllDropdowns();
    handleDropdowns();
  });
});










function initializeMobileMenu() {
  if (window.innerWidth < 992) {
    var menuBar = document.getElementById("menuBar");
    var navbarCollapse = document.querySelector(".navbar-collapse");

    menuBar.addEventListener("click", function () {
      navbarCollapse.style.display = navbarCollapse.style.display === "block" ? "none" : "block";
    });

    var dropdowns = document.querySelectorAll(".dropdown");
    for (var i = 0; i < dropdowns.length; i++) {
      dropdowns[i].classList.remove("dropdown-hover");
      dropdowns[i].addEventListener("click", function (e) {
        var dropdownContent = this.children[0];
        dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
      });
    }
  } else {
    var dropdowns = document.querySelectorAll(".dropdown");
    for (var i = 0; i < dropdowns.length; i++) {
      dropdowns[i].classList.add("dropdown-hover");
    }
  }
}

window.addEventListener("load", initializeMobileMenu);
window.addEventListener("resize", initializeMobileMenu);












// // The typewriter element
// var typeWriterElement = document.getElementById('typewriter');

// // The TextArray: 
// var textArray = ["Hey, I'm Rishi.","I like JavaScript.","I Love to Develop."];

// // You can also do this by transfering it through a data-attribute
// // var textArray = typeWriterElement.getAttribute('data-array');


// // function to generate the backspace effect 
// function delWriter(text, i, cb) {
// 	if (i >= 0 ) {
// 		typeWriterElement.innerHTML = text.substring(0, i--);
// 		// generate a random Number to emulate backspace hitting.
//  		var rndBack = 10 + Math.random() * 100;
// 		setTimeout(function() {
// 			delWriter(text, i, cb);
// 		},rndBack); 
// 	} else if (typeof cb == 'function') {
// 		setTimeout(cb,1000);
// 	}
// };

// // function to generate the keyhitting effect
// function typeWriter(text, i, cb) {
// 	if ( i < text.length+1 ) {
// 		typeWriterElement.innerHTML = text.substring(0, i++);
// 		// generate a random Number to emulate Typing on the Keyboard.
// 		var rndTyping = 250 - Math.random() * 100;
// 		setTimeout( function () { 
// 			typeWriter(text, i++, cb)
// 		},rndTyping);
// 	} else if (i === text.length+1) {
// 		setTimeout( function () {
// 			delWriter(text, i, cb)
// 		},1000);
// 	}
// };

// // the main writer function
// function StartWriter(i) {
// 	if (typeof textArray[i] == "undefined") {
// 		setTimeout( function () {
// 			StartWriter(0)
// 		},1000);
// 	} else if(i < textArray[i].length+1) {
// 		typeWriter(textArray[i], 0, function () {
// 			StartWriter(i+1);
// 		});
// 	}  
// };
// // wait one second then start the typewriter
// setTimeout( function () {
// 	StartWriter(0);
// },1000);