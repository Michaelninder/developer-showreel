const scrollToTopBtn = document.getElementById('scoll-to-top-btn');
const navbar = document.querySelector('.navbar');

document.addEventListener('click', scrollToTopBtn = {
    window.scrollY = 0;
    navbar.classList.remove('scrolled');
});


document.addEventListener('DOMContentLoaded', function () {
    if (navbar) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }
});