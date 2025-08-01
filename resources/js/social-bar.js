document.addEventListener("DOMContentLoaded", () => {
    const socialToggle = document.getElementById("socialToggle");
    const socialBar = document.getElementById("socialBar");

    // Show/hide toggle button based on scroll position
    window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
            socialToggle.classList.remove("hidden");
        } else {
            socialToggle.classList.add("hidden");
            socialBar.classList.remove("active"); // Hide bar when scrolling to top
        }
    });

    // Toggle social bar visibility on click
    if (socialToggle && socialBar) {
        socialToggle.addEventListener("click", () => {
            socialBar.classList.toggle("active");
        });
    }
});
