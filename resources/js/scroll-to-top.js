document.addEventListener('DOMContentLoaded', function () {
    const scrollToTopBtn = document.getElementById('scroll-to-top-btn');
    const navbar = document.querySelector('.navbar');

    const toggleScrollToTopVisibility = () => {
        if (window.scrollY > 200) {
            scrollToTopBtn.classList.remove('hidden');
        } else {
            scrollToTopBtn.classList.add('hidden');
        }
    };

    const handleNavbarScroll = () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };

    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        window.addEventListener('scroll', toggleScrollToTopVisibility);
        toggleScrollToTopVisibility();
    }

    if (navbar) {
        window.addEventListener('scroll', handleNavbarScroll);
        handleNavbarScroll();
    }
});