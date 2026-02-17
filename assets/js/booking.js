document.addEventListener("DOMContentLoaded", () => {
    const T = LANG_BOOKING;

    const PRICE_API_URL =
        "https://script.google.com/macros/s/AKfycbyS-d_2uiCJrentwB0sM9zrsNxWUFmb13jKbUSMSEDZ-z2Vj6-RkBL_76D05utCQ2P0ug/exec";

    const AVAIL_API_URL =
        "https://script.google.com/macros/s/AKfycbwzMIiaqqgQJcXfnffVHZLQLJVXIrDxTZcDgBs3BgcpkkrJDDLP1JUfYjr0sFTKMTpC2g/exec";

    const EXTRABED_PRICE = 130;
    const MAX_ROOMS = 4;
    const SCRIPT_URL = "/api/save_booking.php";

    // ---------------------------------------------------------
    // КАТЕГОРИИ НОМЕРОВ (локализованы через LANG_BOOKING)
    // ---------------------------------------------------------

    const CATEGORIES = [
        {
            code: "R-STD",
            name: T.category_std_name,
            desc: T.category_std_desc,
            meta: T.category_std_meta,
            amenities: T.category_std_amen,
            gallery: [
                "/assets/img/rooms/R-STD/1.jpg",
                "/assets/img/rooms/R-STD/2.jpg",
                "/assets/img/rooms/R-STD/3.jpg",
                "/assets/img/rooms/R-STD/4.jpg"
            ]
        },
        {
            code: "R-PLUS-1+1",
            name: T.category_plus1_name,
            desc: T.category_plus1_desc,
            meta: T.category_plus1_meta,
            amenities: T.category_plus1_amen,
            gallery: [
                "/assets/img/rooms/R-PLUS-S/1.jpg",
                "/assets/img/rooms/R-PLUS-S/2.jpg",
                "/assets/img/rooms/R-PLUS-S/3.jpg",
                "/assets/img/rooms/R-PLUS-S/4.jpg"
            ]
        },
        {
            code: "R-PLUS-D",
            name: T.category_plusd_name,
            desc: T.category_plusd_desc,
            meta: T.category_plusd_meta,
            amenities: T.category_plusd_amen,
            gallery: [
                "/assets/img/rooms/R-PLUS-D/1.jpg",
                "/assets/img/rooms/R-PLUS-D/2.jpg",
                "/assets/img/rooms/R-PLUS-D/3.jpg",
                "/assets/img/rooms/R-PLUS-D/4.jpg"
            ]
        },
        {
            code: "R-LUX",
            name: T.category_lux_name,
            desc: T.category_lux_desc,
            meta: T.category_lux_meta,
            amenities: T.category_lux_amen,
            gallery: [
                "/assets/img/rooms/R-LUX/1.jpg",
                "/assets/img/rooms/R-LUX/2.jpg",
                "/assets/img/rooms/R-LUX/3.jpg",
                "/assets/img/rooms/R-LUX/4.jpg"
            ]
        }
    ];

    // ---------------------------------------------------------
    // УСЛУГИ
    // ---------------------------------------------------------

    const SERVICES = [
        {
            id: "breakfast",
            type: "included",
            title: T.service_breakfast_title,
            desc: T.service_breakfast_desc,
            meta: T.service_breakfast_meta,
            priceLabel: T.service_included,
            badge: T.service_included_badge
        },
        {
            id: "spa",
            type: "included",
            title: T.service_spa_title,
            desc: T.service_spa_desc,
            meta: T.service_spa_meta,
            priceLabel: T.service_included,
            badge: T.service_included_badge
        },
        {
            id: "parking",
            type: "included",
            title: T.service_parking_title,
            desc: T.service_parking_desc,
            meta: T.service_parking_meta,
            priceLabel: T.service_free,
            badge: T.service_included_badge
        },
        {
            id: "extrabed",
            type: "optional",
            title: T.service_extrabed_title,
            desc: T.service_extrabed_desc,
            meta: T.service_extrabed_meta,
            priceLabel: T.service_extrabed_price,
            addLabel: T.service_add,
            removeLabel: T.service_remove
        }
    ];

    // ---------------------------------------------------------
    // DOM
    // ---------------------------------------------------------

    const bookingSearchForm = document.getElementById("bookingSearchForm");
    const bookingContactForm = document.getElementById("bookingContactForm");

    const roomsWrapper = document.getElementById("roomsWrapper");
    const addRoomBtn = document.getElementById("addRoomBtn");
    const searchError = document.getElementById("searchError");

    const step2Block = document.getElementById("step2-categories");
    const step3Block = document.getElementById("step3-services");
    const step4Block = document.getElementById("step4-contact");

    const step2DatesInfo = document.getElementById("step2DatesInfo");
    const categoriesContainer = document.getElementById("categoriesContainer");
    const servicesContainer = document.getElementById("servicesContainer");
    const bookingSummary = document.getElementById("bookingSummary");
    const contactStatus = document.getElementById("contactStatus");

    const contactCheckin = document.getElementById("contactCheckin");
    const contactCheckout = document.getElementById("contactCheckout");
    const contactNights = document.getElementById("contactNights");
    const contactGuests = document.getElementById("contactGuests");
    const contactRooms = document.getElementById("contactRooms");
    const contactCategory = document.getElementById("contactCategory");
    const contactTotalPrice = document.getElementById("contactTotalPrice");

    let roomsCount = 1;
    let cachedSearchData = null;
    let selectedCategoryCode = null;
    let selectedBaseTotalUSD = 0;
    let selectedPricePerRoomUSD = 0;

    const optionalServicesSelected = new Set();

    // ---------------------------------------------------------
    // HELPERS
    // ---------------------------------------------------------

    const formatDateHuman = (str) => {
        if (!str) return "";
        const [y, m, d] = str.split("-");
        return `${d}.${m}.${y}`;
    };

    const calcNights = (inDate, outDate) =>
        Math.round((new Date(outDate) - new Date(inDate)) / 86400000);

    const scrollToBlock = (el) => {
        if (!el) return;
        el.scrollIntoView({ behavior: "smooth", block: "start" });
    };

    const renumberRooms = () => {
        roomsWrapper.querySelectorAll(".booking-room").forEach((r, i) => {
            r.dataset.roomIndex = i + 1;
            r.querySelector(".booking-room__title").textContent =
                `${T.room} ${i + 1}`;
        });
    };

    const createRoomElement = (index) => {
        const div = document.createElement("div");
        div.className = "booking-room";
        div.dataset.roomIndex = index;

        div.innerHTML = `
            <div class="booking-room__header">
                <h3 class="booking-room__title">${T.room} ${index}</h3>
                <button type="button" class="booking-room__remove" title="x">×</button>
            </div>
            <div class="booking-room__grid">
                <div class="booking-field">
                    <label>${T.adults}</label>
                    <select name="adults[]" required>
                        <option value="1">1 ${T.adult}</option>
                        <option value="2" selected>2 ${T.adults2}</option>
                        <option value="3">3 ${T.adults2}</option>
                        <option value="4">4 ${T.adults2}</option>
                    </select>
                </div>
                <div class="booking-field">
                    <label>${T.children}</label>
                    <select name="children[]">
                        <option value="0" selected>${T.children0}</option>
                        <option value="1">1 ${T.child}</option>
                        <option value="2">2 ${T.children2}</option>
                        <option value="3">3 ${T.children2}</option>
                        <option value="4">4 ${T.children2}</option>
                    </select>
                </div>
            </div>
        `;
        return div;
    };

    // ---------------------------------------------------------
    // API
    // ---------------------------------------------------------

    async function fetchAvailability(checkin, checkout, roomsCountLocal) {
        const url =
            `${AVAIL_API_URL}?check_in=${checkin}&check_out=${checkout}&rooms=${roomsCountLocal}`;
        try {
            const r = await fetch(url);
            const data = await r.json();
            return Array.isArray(data.categories) ? data.categories : [];
        } catch {
            return [];
        }
    }

    const buildAvailabilityMap = (apiData) => {
        const map = {
            "R-STD": false,
            "R-PLUS-1+1": false,
            "R-PLUS-D": false,
            "R-LUX": false
        };

        apiData.forEach((c) => {
            const id = String(c.id || "");
            if (!c.can_book_requested_rooms) return;

            if (id.startsWith("R-STD")) map["R-STD"] = true;
            if (id.startsWith("R-PLUS")) {
                map["R-PLUS-1+1"] = true;
                map["R-PLUS-D"] = true;
            }
            if (id.startsWith("R-LUX")) map["R-LUX"] = true;
        });

        return map;
    };

    async function fetchPrices(checkin, checkout) {
        const result = {};
        for (const cat of CATEGORIES) {
            const url =
                `${PRICE_API_URL}?check_in=${checkin}&check_out=${checkout}&category=${encodeURIComponent(cat.code)}`;
            try {
                const r = await fetch(url);
                const data = await r.json();
                result[cat.code] = Number(data.total_price) || null;
            } catch {
                result[cat.code] = null;
            }
        }
        return result;
    }

    // ---------------------------------------------------------
    // ДОБАВЛЕНИЕ / УДАЛЕНИЕ НОМЕРОВ
    // ---------------------------------------------------------

    addRoomBtn.textContent = `+ ${T.add_room}`;

    addRoomBtn.addEventListener("click", () => {
        if (roomsCount >= MAX_ROOMS) {
            alert(T.hint_max);
            return;
        }
        roomsCount++;
        roomsWrapper.insertBefore(createRoomElement(roomsCount), addRoomBtn);
        renumberRooms();
    });

    roomsWrapper.addEventListener("click", (e) => {
        if (e.target.classList.contains("booking-room__remove")) {
            const total = roomsWrapper.querySelectorAll(".booking-room").length;
            if (total <= 1) {
                alert(T.err_no_rooms);
                return;
            }
            e.target.closest(".booking-room").remove();
            roomsCount--;
            renumberRooms();
        }
    });

    // ---------------------------------------------------------
    // ШАГ 1 — ПОИСК
    // ---------------------------------------------------------

    bookingSearchForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        searchError.textContent = "";

        const checkin = bookingSearchForm.checkin.value;
        const checkout = bookingSearchForm.checkout.value;

        if (!checkin || !checkout) {
            searchError.textContent = T.err_dates;
            return;
        }

        const nights = calcNights(checkin, checkout);
        if (nights <= 0) {
            searchError.textContent = T.err_checkout;
            return;
        }

        const roomElems = roomsWrapper.querySelectorAll(".booking-room");
        if (!roomElems.length) {
            searchError.textContent = T.err_no_rooms;
            return;
        }

        const roomsData = [];
        let totalGuests = 0;

        roomElems.forEach((room) => {
            const a = Number(room.querySelector('select[name="adults[]"]').value);
            const c = Number(room.querySelector('select[name="children[]"]').value);
            roomsData.push({ adults: a, children: c, guests: a + c });
            totalGuests += a + c;
        });

        cachedSearchData = {
            checkin,
            checkout,
            nights,
            roomsData,
            totalGuests
        };

        selectedCategoryCode = null;
        selectedBaseTotalUSD = 0;
        selectedPricePerRoomUSD = 0;
        optionalServicesSelected.clear();

        bookingSummary.innerHTML = "";
        step3Block.classList.add("booking__step--hidden");
        step4Block.classList.add("booking__step--hidden");

        await renderStep2();
    });

    // ---------------------------------------------------------
    // ШАГ 2 — КАТЕГОРИИ
    // ---------------------------------------------------------

    async function renderStep2() {
        const { checkin, checkout, nights, roomsData, totalGuests } = cachedSearchData;
        const roomsCountLocal = roomsData.length;

        step2DatesInfo.textContent =
            `${formatDateHuman(checkin)} → ${formatDateHuman(checkout)}, ${nights} nights, ${roomsCountLocal} rooms, ${totalGuests} guests`;

        categoriesContainer.innerHTML = `<p>${T.loading}</p>`;

        const [avail, prices] = await Promise.all([
            fetchAvailability(checkin, checkout, roomsCountLocal),
            fetchPrices(checkin, checkout)
        ]);

        const map = buildAvailabilityMap(avail);
        categoriesContainer.innerHTML = "";

        CATEGORIES.forEach((cat) => {
            const price = prices[cat.code];
            const isAvailable = map[cat.code];

            const metaArr = Array.isArray(cat.meta) ? cat.meta : [];
            const amenArr = Array.isArray(cat.amenities) ? cat.amenities : [];

            const metaHtml = metaArr.map(m => `<span>${m}</span>`).join("");
            const amenitiesHtml = amenArr.map(a => `<span>${a}</span>`).join("");

            const thumbs = cat.gallery.map(src => `<img src="${src}" alt="">`).join("");

            const totalForRooms = price ? price * roomsCountLocal : null;

            const card = document.createElement("div");
            card.className = "room-card";

            card.innerHTML = `
                <div class="room-card__top">
                    <div class="room-card__gallery">
                        <div class="room-card__gallery-main">
                            <img src="${cat.gallery[0]}" alt="${cat.name}">
                        </div>
                        <div class="room-card__gallery-grid">${thumbs}</div>
                    </div>
                    <div class="room-card__body">
                        <div class="room-card__name">${cat.name}</div>
                        <div class="room-card__meta">${metaHtml}</div>
                        <div class="room-card__desc">${cat.desc}</div>
                        <div class="room-card__amenities">${amenitiesHtml}</div>
                    </div>
                </div>
                <div class="room-card__bottom">
                    <div class="room-card__price">
                        ${
                            price
                                ? `${totalForRooms} GEL<br><small>${price} GEL / room</small>`
                                : T.btn_unavailable
                        }
                    </div>
                    <button class="btn room-card__btn"
                        data-code="${cat.code}"
                        data-price="${price || ""}"
                        ${!isAvailable || !price ? "disabled" : ""}>
                        ${
                            !isAvailable
                                ? T.btn_no_rooms
                                : (!price ? T.btn_unavailable : T.btn_select)
                        }
                    </button>
                </div>
            `;

            categoriesContainer.appendChild(card);
        });

        step2Block.classList.remove("booking__step--hidden");
        scrollToBlock(step2Block);
    }

    categoriesContainer.addEventListener("click", (e) => {
        const btn = e.target.closest(".room-card__btn");
        if (btn && !btn.disabled) {
            selectedCategoryCode = btn.dataset.code;
            selectedPricePerRoomUSD = Number(btn.dataset.price);
            selectedBaseTotalUSD = selectedPricePerRoomUSD * cachedSearchData.roomsData.length;
            renderStep3();
        }

        const img = e.target.closest(".room-card__gallery-grid img");
        if (img) {
            const main = img.closest(".room-card").querySelector(".room-card__gallery-main img");
            main.src = img.src;
        }
    });

    // ---------------------------------------------------------
    // ШАГ 3 — СЕРВИСЫ
    // ---------------------------------------------------------

    function renderStep3() {
        servicesContainer.innerHTML = "";
        optionalServicesSelected.clear();

        SERVICES.forEach((s) => {
            const card = document.createElement("div");
            card.className = "service-card";
            card.dataset.id = s.id;

            let rightHtml = `<div class="service-card__price">${s.priceLabel}</div>`;

            if (s.type === "included") {
                rightHtml += `<div class="service-card__badge">${s.badge}</div>`;
            } else {
                rightHtml = `
                    <div class="service-card__price">${s.priceLabel}</div>
                    <button class="service-card__toggle">${s.addLabel}</button>
                `;
            }

            card.innerHTML = `
                <div class="service-card__left">
                    <div class="service-card__title">${s.title}</div>
                    <div class="service-card__desc">${s.desc}</div>
                    <div class="service-card__meta">${s.meta}</div>
                </div>
                <div class="service-card__right">
                    ${rightHtml}
                </div>
            `;

            servicesContainer.appendChild(card);
        });

        const nextBtn = document.createElement("button");
        nextBtn.className = "btn booking__continue-btn";
        nextBtn.textContent = T.btn_next;
        nextBtn.onclick = () => {
            step3Block.classList.add("booking__step--hidden");
            step4Block.classList.remove("booking__step--hidden");
            renderStep4();
            scrollToBlock(step4Block);
        };

        servicesContainer.appendChild(nextBtn);

        step3Block.classList.remove("booking__step--hidden");
        scrollToBlock(step3Block);
    }

    servicesContainer.addEventListener("click", (e) => {
        const btn = e.target.closest(".service-card__toggle");
        if (!btn) return;

        const card = btn.closest(".service-card");
        const id = card.dataset.id;
        const service = SERVICES.find(s => s.id === id);

        if (optionalServicesSelected.has(id)) {
            optionalServicesSelected.delete(id);
            btn.textContent = service.addLabel;
            btn.classList.remove("service-card__toggle--active");
        } else {
            optionalServicesSelected.add(id);
            btn.textContent = service.removeLabel;
            btn.classList.add("service-card__toggle--active");
        }

        renderStep4();
    });

    // ---------------------------------------------------------
    // ШАГ 4 — ИТОГ
    // ---------------------------------------------------------

    function calcTotalPrice() {
        const roomsCountLocal = cachedSearchData.roomsData.length;
        let total = selectedBaseTotalUSD;

        if (optionalServicesSelected.has("extrabed")) {
            total += EXTRABED_PRICE * roomsCountLocal;
        }

        return total;
    }

    function renderStep4() {
        const { checkin, checkout, nights, roomsData, totalGuests } = cachedSearchData;
        const roomsCountLocal = roomsData.length;

        let adults = 0, children = 0;
        roomsData.forEach(r => {
            adults += r.adults;
            children += r.children;
        });

        const cat = CATEGORIES.find(c => c.code === selectedCategoryCode);
        const addedExtra = optionalServicesSelected.has("extrabed");
        const finalTotal = calcTotalPrice();

        bookingSummary.innerHTML = `
            <div class="booking-summary__section">
                <h4>${T.summary_details}</h4>
                <p>${T.summary_dates}: ${formatDateHuman(checkin)} — ${formatDateHuman(checkout)} (${nights})</p>
                <p>${T.summary_rooms}: ${roomsCountLocal}</p>
                <p>${T.summary_guests}: ${totalGuests}</p>
            </div>

            <div class="booking-summary__section">
                <h4>${T.summary_room}</h4>
                <p>${T.summary_category}: ${cat.name}</p>
                <p>${T.summary_base_price}: ${selectedBaseTotalUSD} GEL</p>
                ${
                    addedExtra
                        ? `<p>${T.summary_extrabed}: +${EXTRABED_PRICE * roomsCountLocal} GEL</p>`
                        : ""
                }
            </div>

            <div class="booking-summary__section">
                <h4>${T.summary_services}</h4>
                <ul>
                    ${SERVICES.map(s =>
                        `<li>${s.title}: ${
                            s.type === "included"
                                ? T.service_included
                                : (optionalServicesSelected.has(s.id)
                                    ? T.service_added
                                    : T.service_not_added)
                        }</li>`
                    ).join("")}
                </ul>
            </div>

            <div class="booking-summary__total">
                <h4>${T.summary_total}</h4>
                <p class="booking-summary__total-price">${finalTotal} GEL</p>
                <p class="booking-summary__notice">${T.summary_currency_notice}</p>
            </div>
        `;

        contactCheckin.value = checkin;
        contactCheckout.value = checkout;
        contactNights.value = nights;
        contactGuests.value = totalGuests;
        contactRooms.value = roomsCountLocal;
        contactCategory.value = selectedCategoryCode;
        contactTotalPrice.value = finalTotal;
    }

    // ---------------------------------------------------------
    // ОТПРАВКА ФОРМЫ (шаг 4)
    // ---------------------------------------------------------

    bookingContactForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        contactStatus.textContent = T.sending;

        const name = bookingContactForm.clientName.value.trim();
        const phone = bookingContactForm.clientPhone.value.trim();

        if (!name || !phone) {
            contactStatus.textContent = T.err_required;
            return;
        }

        // актуализируем итог
        renderStep4();

        const payload = {
            clientName: name,
            clientPhone: phone,
            clientEmail: bookingContactForm.clientEmail.value.trim(),
            clientComment: bookingContactForm.clientComment.value.trim(),

            checkin: contactCheckin.value,
            checkout: contactCheckout.value,
            nights: contactNights.value,
            guests: contactGuests.value,
            rooms: contactRooms.value,
            category: contactCategory.value,
            total_price: contactTotalPrice.value
        };

        try {
            const resp = await fetch(SCRIPT_URL, {
                method: "POST",
                headers: { "Content-Type": "application/json;charset=utf-8" },
                body: JSON.stringify(payload)
            });

            const result = await resp.json();

            contactStatus.textContent =
                result.result === "success"
                    ? T.success
                    : T.fail;
        } catch (err) {
            contactStatus.textContent = T.err_network;
        }
    });
});
