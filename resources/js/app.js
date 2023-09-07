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