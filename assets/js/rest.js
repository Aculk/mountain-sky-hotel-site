document.addEventListener("DOMContentLoaded", () => {

    function initSlider(selector) {
        const slider = document.querySelector(`[data-slider="${selector}"]`);
        if (!slider) return;

        const track = slider.querySelector(".rest-gallery-track");
        const slides = track.children;
        const prev = slider.querySelector(".prev");
        const next = slider.querySelector(".next");

        let index = 0;

        function update() {
            track.style.transform = `translateX(-${index * 100}%)`;
        }

        prev.addEventListener("click", () => {
            index = index <= 0 ? slides.length - 1 : index - 1;
            update();
        });

        next.addEventListener("click", () => {
            index = index >= slides.length - 1 ? 0 : index + 1;
            update();
        });
    }

    initSlider("kitchen");
    initSlider("bar");

});

