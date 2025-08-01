const socialToggle = document.getElementById("socialToggle");
const socialBar = document.getElementById("socialBar");

const siteLoader = document.getElementById("site-loader");
const observer = new MutationObserver(() => {
    if (siteLoader.classList.contains("loaded")) {
        socialToggle.classList.remove("hidden");
        observer.disconnect();
    }
});

if (siteLoader) {
    observer.observe(siteLoader, { attributes: true, attributeFilter: ["class"] });
}

if (socialToggle && socialBar) {
    socialToggle.addEventListener("click", () => {
        socialBar.classList.toggle("active");
    });
}

