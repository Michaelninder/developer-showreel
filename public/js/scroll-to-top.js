document.addEventListener('DOMContentLoaded', function () {
    const scrollToTopBtn = document.getElementById('scroll-to-top-btn');
    const navbar = document.querySelector('.navbar');

    // Function to handle the scroll-to-top button visibility
    const toggleScrollToTopVisibility = () => {
        if (window.scrollY > 200) {
            scrollToTopBtn.classList.remove('hidden');
        } else {
            scrollToTopBtn.classList.add('hidden');
        }
    };

    // Function to handle the navbar's scrolled state
    const handleNavbarScroll = () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };

    // Attach listeners if the elements exist
    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        window.addEventListener('scroll', toggleScrollToTopVisibility);
        toggleScrollToTopVisibility(); // Initial check
    }

    if (navbar) {
        window.addEventListener('scroll', handleNavbarScroll);
        handleNavbarScroll(); // Initial check
    }
});