


// $(document).ready(function () {
//     function isElementInViewport(el) {
//         var rect = el.getBoundingClientRect();
//         return (
//             rect.top >= 0 &&
//             rect.left >= 0 &&
//             rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//             rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//         );
//     }

//     function addAnimationClass() {
//         var element = $(".animate_custom_left");

//         if (isElementInViewport(element[0])) {
//             element.addClass("animate__animated animate__fadeInLeft");
//         } else {
//             element.removeClass("animate__animated animate__fadeInLeft");
//         }
//     }
//     $(window).on("scroll", addAnimationClass);
//     addAnimationClass();
// });


$(document).ready(function () {
    var animationClasses = [
        "animate__animated animate__fadeInLeft animate__slower	5s",
        "animate__animated animate__fadeInRight animate__slower	5s",
        "animate__animated animate__fadeInUp animate__slower	5s",
        "animate__animated animate__fadeInDown animate__slower	5s",
        "animate__animated animate__fadeInLeft animate__slower	5s",
        "animate__animated animate__fadeInRight animate__slower	5s",
        "animate__animated animate__fadeInUp animate__slower	5s",
        "animate__animated animate__fadeInDown animate__slower	5s",
    ];

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function addAnimationClass(element, animationClass) {
        if (isElementInViewport(element[0])) {
            element.addClass(animationClass);
            element.removeClass("animate_custom_left");
        } else {
           
            element.removeClass(animationClass);
        }
    }

    $(".animate_custom_left").each(function (index) {
        var element = $(this);
        var animationClass = animationClasses[index % animationClasses.length];
        addAnimationClass(element, animationClass);
        $(window).on("scroll", function () {
            addAnimationClass(element, animationClass);
        });
    });
});
