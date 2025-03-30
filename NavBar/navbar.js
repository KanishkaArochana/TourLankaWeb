// Select menu button and navbar
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

// Toggle menu on click
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

// Close menu when a link is clicked
document.querySelectorAll('.header .navbar a').forEach(link => {
    link.addEventListener('click', () => {
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    });
});
