document.querySelectorAll("[data-slider]").forEach(section => {

    const track = section.querySelector(".spa-slider-track");
    const slides = track.querySelectorAll("img");
    let index = 0;

    const update = () => {
        track.style.transform = `translateX(-${index * 100}%)`;
    };

    section.querySelector(".spa-arrow.next")?.addEventListener("click", () => {
        index = (index + 1) % slides.length;
        update();
    });

    section.querySelector(".spa-arrow.prev")?.addEventListener("click", () => {
        index = (index - 1 + slides.length) % slides.length;
        update();
    });
});
