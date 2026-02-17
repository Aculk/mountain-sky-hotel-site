// about.js — лёгкие эффекты для страницы "О нас"

document.addEventListener("DOMContentLoaded", () => {
    // Плавный скролл к якорям (если будешь добавлять ссылки-якоря)
    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach(link => {
        link.addEventListener("click", (e) => {
            const targetId = link.getAttribute("href").substring(1);
            const target = document.getElementById(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    });

    // Лёгкий fade-in для секций при скролле
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                }
            });
        },
        { threshold: 0.15 }
    );

    document
        .querySelectorAll(".about-location, .about-features, .about-activities, .about-comfort, .about-final")
        .forEach(section => {
            section.classList.add("will-animate");
            observer.observe(section);
        });
});
