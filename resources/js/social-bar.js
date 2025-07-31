document.addEventListener("DOMContentLoaded", () => {
    const socialToggle = document.getElementById("socialToggle");
    const socialBar = document.getElementById("socialBar");

    if (socialToggle && socialBar) {
        socialToggle.classList.remove('hidden');
        socialToggle.addEventListener("click", () => {
            if (socialBar.style.display === "flex") {
                socialBar.style.display = "none";
            } else {
                socialBar.style.display = "flex";
            }
        });
    }
});