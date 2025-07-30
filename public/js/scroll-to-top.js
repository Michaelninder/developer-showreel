const scrollToTopBtn = document.getElementById('scoll-to-top-btn');

document.addEventListener('click', scrollToTopBtn) {
    window.scrollY = 0;
};


document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar');
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