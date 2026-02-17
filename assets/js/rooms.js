document.addEventListener("DOMContentLoaded", () => {

    const ROOMS = [
        {
            code: "R-STD",
            name: ROOMS_LANG.std_name,
            params: ROOMS_LANG.std_params,
            desc: ROOMS_LANG.std_desc,
            img: [
                "/assets/img/rooms/R-STD/1.jpg",
                "/assets/img/rooms/R-STD/2.jpg",
                "/assets/img/rooms/R-STD/3.jpg",
                "/assets/img/rooms/R-STD/4.jpg"
            ]
        },
        {
            code: "R-PLUS-S",
            name: ROOMS_LANG.plus_s_name,
            params: ROOMS_LANG.plus_s_params,
            desc: ROOMS_LANG.plus_s_desc,
            img: [
                "/assets/img/rooms/R-PLUS-S/1.jpg",
                "/assets/img/rooms/R-PLUS-S/2.jpg",
                "/assets/img/rooms/R-PLUS-S/3.jpg",
                "/assets/img/rooms/R-PLUS-S/4.jpg"
            ]
        },
        {
            code: "R-PLUS-D",
            name: ROOMS_LANG.plus_d_name,
            params: ROOMS_LANG.plus_d_params,
            desc: ROOMS_LANG.plus_d_desc,
            img: [
                "/assets/img/rooms/R-PLUS-D/1.jpg",
                "/assets/img/rooms/R-PLUS-D/2.jpg",
                "/assets/img/rooms/R-PLUS-D/3.jpg",
                "/assets/img/rooms/R-PLUS-D/4.jpg"
            ]
        },
        {
            code: "R-LUX",
            name: ROOMS_LANG.lux_name,
            params: ROOMS_LANG.lux_params,
            desc: ROOMS_LANG.lux_desc,
            img: [
                "/assets/img/rooms/R-LUX/1.jpg",
                "/assets/img/rooms/R-LUX/2.jpg",
                "/assets/img/rooms/R-LUX/3.jpg",
                "/assets/img/rooms/R-LUX/4.jpg"
            ]
        }
    ];

    const listEl = document.getElementById("roomsList");

    ROOMS.forEach((room, index) => {
        const id = index + 1;

        const html = `
            <div class="room-card">

                <div class="room-card__gallery">
                    <div class="swiper roomMain-${id}">
                        <div class="swiper-wrapper">
                            ${room.img.map(src => `
                                <div class="swiper-slide">
                                    <img src="${src}" alt="${room.name}">
                                </div>`).join("")}
                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="swiper roomThumbs-${id} roomThumbs">
                        <div class="swiper-wrapper">
                            ${room.img.map(src => `
                                <div class="swiper-slide">
                                    <img src="${src}" alt="${room.name}">
                                </div>`).join("")}
                        </div>
                    </div>
                </div>

                <div class="room-card__info">
                    <h2>${room.name}</h2>

                    <div class="room-card__params">
                        ${room.params.map(p => `<span>${p}</span>`).join("")}
                    </div>

                    <div class="room-card__desc">${room.desc}</div>

                    <div class="room-card__actions">
                        <a href="/booking.php" class="btn">${ROOMS_LANG.btn_book}</a>
                        <a href="/coming-soon.php" class="btn-outline">${ROOMS_LANG.btn_more}</a>
                    </div>
                </div>

            </div>
        `;

        listEl.insertAdjacentHTML("beforeend", html);

        const thumbs = new Swiper(`.roomThumbs-${id}`, {
            slidesPerView: 4,
            spaceBetween: 10,
            watchSlidesProgress: true,
        });

        new Swiper(`.roomMain-${id}`, {
            spaceBetween: 10,
            navigation: {
                nextEl: `.roomMain-${id} .swiper-button-next`,
                prevEl: `.roomMain-${id} .swiper-button-prev`,
            },
            thumbs: {
                swiper: thumbs,
            }
        });
    });

});
