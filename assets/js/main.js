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
        let current = document.getElementsByClassName("active");

        // If there's no active class
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }

        // Add the active class to the current/clicked button
        this.className += " active";
    });
}

let currentSlide = 0;

const slides = document.querySelectorAll(".ngt-review-panel-outer .ngt-review-panel-inner");

for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
}

slides[currentSlide].style.display = "block";

function showSlide() {
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.transition = 'all 0.1s ease-out 0.1s';
        slides[i].style.display = "none";
    }

    slides[currentSlide].style.display = "block";
    slides[currentSlide].style.transition = 'all 1s ease-in 0.1s';

    currentSlide+=1;

    if(slides.length==currentSlide){
        currentSlide = 0;
    }
}

setInterval(showSlide, 5000);

