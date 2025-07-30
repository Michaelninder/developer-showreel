(function() {
    const siteLoader = document.getElementById('site-loader');

    if (!siteLoader) {
        return;
    }

    const minLoadTime = 1000;
    const startTime = Date.now();

    const hideLoader = () => {
        siteLoader.classList.add('loaded');
    };

    window.addEventListener('load', () => {
        const elapsedTime = Date.now() - startTime;
        const remainingTime = minLoadTime - elapsedTime;

        if (remainingTime > 0) {
            setTimeout(hideLoader, remainingTime);
        } else {
            hideLoader();
        }
    });

    const fallbackTimeout = setTimeout(() => {
        const elapsedTime = Date.now() - startTime;
        const remainingTime = minLoadTime - elapsedTime;
        if (remainingTime > 0) {
            setTimeout(hideLoader, remainingTime);
        } else {
            hideLoader();
        }
    }, 5000);
})();