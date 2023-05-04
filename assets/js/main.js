// disable right click
/*document.addEventListener('contextmenu', event => event.preventDefault());

document.onkeydown = function (e) {

    // disable F12 key
    if (e.keyCode == 123) {
        return false;
    }

    // disable I key
    if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        return false;
    }

    // disable J key
    if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        return false;
    }

    // disable U key
    if (e.ctrlKey && e.keyCode == 85) {
        return false;
    }
}*/


// Get the container element
let btnContainer = document.getElementById("myNav");

// Get all buttons with class="btn" inside the container
let btns = btnContainer.getElementsByClassName("nav-item");

// Loop through the buttons and add the active class to the current/clicked button
for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        let current = document.getElementsByClassName("active-nav");

        // If there's no active class
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active-nav", "");
        }

        // Add the active class to the current/clicked button
        this.className += " active-nav";
    });
}

(function () {
    "use strict";

    var carousels = function () {
        $(".owl-carousel1").owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                680: {
                    items: 2,
                    nav: false,
                    loop: false
                },
                1000: {
                    items: 3,
                    nav: true
                }
            }
        });
    };

    (function ($) {
        carousels();
    })(jQuery);
})();

$(document).ready(function () {
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});

let countDownDate = new Date("Jul 25, 2023 16:37:52").getTime();

let myfunc = setInterval(function() {
    let now = new Date().getTime();
    let timeleft = countDownDate - now;

    let days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    let hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

    document.getElementById("hours").innerHTML = hours + "h"
    document.getElementById("mins").innerHTML = minutes + "m"
    document.getElementById("secs").innerHTML = seconds + "s"

    if (timeleft < 0) {
        clearInterval(myfunc);
        document.getElementById("hours").innerHTML = ""
        document.getElementById("mins").innerHTML = ""
        document.getElementById("secs").innerHTML = ""
    }
}, 1000)

