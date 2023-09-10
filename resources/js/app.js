import './bootstrap';
import 'flowbite';

// Navbar Fixed
window.onscroll = function(){
    const header = document.querySelector('header');
    const nav = document.querySelector('nav');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav){
        header.classList.add('navbar-fixed');
        nav.classList.add('nav-fixed');
    } else{
        header.classList.remove('navbar-fixed');
        nav.classList.remove('nav-fixed');
    }
}

// Show Password
document.addEventListener("DOMContentLoaded", function () {
    const showPasswordCheckbox = document.getElementById("show");
    const passwordInput = document.getElementById("password");

    showPasswordCheckbox.addEventListener("change", function () {
        if (showPasswordCheckbox.checked) {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
});

// let defaultTransform = 0;
// function goNext() {
//     defaultTransform = defaultTransform - 398;
//     var slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }
// next.addEventListener("click", goNext);
// function goPrev() {
//     var slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
//     else defaultTransform = defaultTransform + 398;
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }
// prev.addEventListener("click", goPrev);

// let defaultTransform = 0;
// const slideWidth = 315; // Lebar slider dalam piksel

// function goNext() {
//     defaultTransform = defaultTransform - slideWidth; // Mengurangkan slideWidth dari defaultTransform
//     const slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) >= slider.scrollWidth / 1) defaultTransform = 0;
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }

// next.addEventListener("click", goNext);

// function goPrev() {
//     const slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
//     else defaultTransform = defaultTransform + slideWidth; // Menambahkan slideWidth ke defaultTransform
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }

// prev.addEventListener("click", goPrev);



// let sliderContainer = document.getElementById('sliderContainer');
// let sliderer = document.getElementById('sliderer');
// let cards= sliderer.getElementsByTagName('li');

// let elementsToShow = 3;

// let sliderContainerWidth = sliderContainer.clientWidth;

// let cardWidth = sliderContainerWidth/elementsToShow;

// sliderer.style.width = cards.length*cardWidth+'px';

// for(let i = 0; i < Array.length; i++){
//     const element = cards[i];
//     element.style.width = cardWidth +'px';
// }

// function prev(){
// sliderer.style.marginLeft = ((+sliderer.style.marginLeft.slice(0,-2))-cardWidth)+'px';
// }

// function next(){
//     sliderer.style.marginLeft = ((+sliderer.style.marginLeft.slice(0,-2))+cardWidth)+'px';
// }

// Hamburger
// const hamburger = document.querySelector('#hamburger');
// const navMenu = document.querySelector('#nav-menu');

// hamburger.addEventListener('click', function(){
//     hamburger.classList.toggle('hamburger-active');
//     navMenu.classList.toggle('hidden');
// });


// document.addEventListener("DOMContentLoaded", function() {
//     const hamburgerButton = document.getElementById("hamburger");
//     const mobileMenu = document.getElementById("mobile-menu");
//     const navMenu = document.querySelector('#nav-menu');
    
//     hamburgerButton.addEventListener("click", function() {
//         mobileMenu.classList.toggle("hidden");
//         navMenu.classList.toggle('hidden');
//     });
// });

// document.addEventListener("DOMContentLoaded", function() {
//     const hamburgerButton = document.getElementById("hamburger");
//     const navMenu = document.getElementById("nav-menu");

//     hamburgerButton.addEventListener("click", function() {
//         navMenu.classList.toggle("hidden");
//     });
// });