<?php include __DIR__ . '/layouts/header.php';?>
<body class="booking-page">

<div class="booking-hero booking-hero--photo">
    <div class="booking-hero__overlay"></div>
    <div class="booking-hero__inner">
        <h1><?= $lang['booking_title'] ?></h1>
        <p><?= $lang['booking_subtitle'] ?></p>
    </div>
</div>

<section class="booking container">

    <!-- ШАГ 1 -->
    <div class="booking__step" id="step1-search">

        <div class="booking__step-label"><?= $lang['booking_step1'] ?></div>
        <h2 class="booking__step-title"><?= $lang['booking_step1_title'] ?></h2>

        <form id="bookingSearchForm" class="booking-search">

            <div class="booking-search__row">
                <div class="booking-field">
                    <label for="checkin"><?= $lang['booking_checkin'] ?></label>
                    <input type="date" id="checkin" name="checkin" required>
                </div>

                <div class="booking-field">
                    <label for="checkout"><?= $lang['booking_checkout'] ?></label>
                    <input type="date" id="checkout" name="checkout" required>
                </div>
            </div>

            <div class="booking-search__rooms-wrapper" id="roomsWrapper">
                <div class="booking-room" data-room-index="1">
                    <div class="booking-room__header">
                        <h3 class="booking-room__title"><?= $lang['booking_room'] ?> 1</h3>
                    </div>

                    <div class="booking-room__grid">
                        <div class="booking-field">
                            <label><?= $lang['booking_adults'] ?></label>
                            <select name="adults[]" required>
                                <option value="1">1 <?= $lang['booking_adult'] ?></option>
                                <option value="2" selected>2 <?= $lang['booking_adults2'] ?></option>
                                <option value="3">3 <?= $lang['booking_adults2'] ?></option>
                                <option value="4">4 <?= $lang['booking_adults2'] ?></option>
                            </select>
                        </div>

                        <div class="booking-field">
                            <label><?= $lang['booking_children'] ?></label>
                            <select name="children[]">
                                <option value="0" selected><?= $lang['booking_children0'] ?></option>
                                <option value="1">1 <?= $lang['booking_child'] ?></option>
                                <option value="2">2 <?= $lang['booking_children2'] ?></option>
                                <option value="3">3 <?= $lang['booking_children2'] ?></option>
                                <option value="4">4 <?= $lang['booking_children2'] ?></option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="button" class="booking-add-room" id="addRoomBtn">
                    + <?= $lang['booking_add_room'] ?>
                </button>
            </div>

            <p class="booking__hint booking__hint--small">
                <?= $lang['booking_hint'] ?>
            </p>

            <div class="booking-search__actions">
                <button type="submit" class="btn booking-search__submit">
                    <?= $lang['booking_find_rooms'] ?>
                </button>
                <div class="booking-search__error" id="searchError"></div>
            </div>

        </form>
    </div>

    <!-- ШАГ 2 -->
    <div class="booking__step booking__step--hidden" id="step2-categories">
        <div class="booking__step-label"><?= $lang['booking_step2'] ?></div>
        <h2 class="booking__step-title"><?= $lang['booking_step2_title'] ?></h2>
        <p class="booking__hint" id="step2DatesInfo"></p>
        <div class="booking-categories" id="categoriesContainer"></div>
    </div>

    <!-- ШАГ 3 -->
    <div class="booking__step booking__step--hidden" id="step3-services">
        <div class="booking__step-label"><?= $lang['booking_step3'] ?></div>
        <h2 class="booking__step-title"><?= $lang['booking_step3_title'] ?></h2>

        <p class="booking__hint"><?= $lang['booking_services_hint'] ?></p>

        <div class="booking-services" id="servicesContainer"></div>
    </div>

    <!-- ШАГ 4 -->
    <div class="booking__step booking__step--hidden" id="step4-contact">
        <div class="booking__step-label"><?= $lang['booking_step4'] ?></div>
        <h2 class="booking__step-title"><?= $lang['booking_step4_title'] ?></h2>

        <div class="booking-summary" id="bookingSummary"></div>

        <form id="bookingContactForm" class="booking-contact">

            <!-- скрытые поля -->
            <input type="hidden" id="contactCheckin" name="checkin">
            <input type="hidden" id="contactCheckout" name="checkout">
            <input type="hidden" id="contactNights" name="nights">
            <input type="hidden" id="contactGuests" name="guests">
            <input type="hidden" id="contactRooms" name="rooms">
            <input type="hidden" id="contactCategory" name="category">
            <input type="hidden" id="contactTotalPrice" name="total_price">
            <input type="hidden" id="contactPricePerRoom" name="price_per_room">

            <div class="booking-contact__grid">
                <div class="booking-field">
                    <label for="clientName"><?= $lang['booking_name'] ?> *</label>
                    <input type="text" id="clientName" name="clientName" required>
                </div>

                <div class="booking-field">
                    <label for="clientPhone"><?= $lang['booking_phone'] ?> *</label>
                    <input type="tel" id="clientPhone" name="clientPhone" required>
                </div>

                <div class="booking-field">
                    <label for="clientEmail">E-mail</label>
                    <input type="email" id="clientEmail" name="clientEmail">
                </div>

                <div class="booking-field booking-field--full">
                    <label for="clientComment"><?= $lang['booking_comment'] ?></label>
                    <textarea id="clientComment" name="clientComment" rows="3"
                              placeholder="<?= $lang['booking_comment_placeholder'] ?>"></textarea>
                </div>
            </div>

            <div class="booking-contact__actions">
                <button type="submit" class="btn booking-contact__submit">
                    <?= $lang['booking_reserve'] ?>
                </button>
                <div class="booking-contact__status" id="contactStatus"></div>
            </div>

        </form>
    </div>

</section>

<?php include __DIR__ . '/layouts/footer.php';?>

<script>
const LANG_BOOKING = {
    // --- базовые подписи (шаг 1) ---
    room: "<?= $lang['booking_room'] ?>",
    adults: "<?= $lang['booking_adults'] ?>",
    adult: "<?= $lang['booking_adult'] ?>",
    adults2: "<?= $lang['booking_adults2'] ?>",
    children: "<?= $lang['booking_children'] ?>",
    child: "<?= $lang['booking_child'] ?>",
    children0: "<?= $lang['booking_children0'] ?>",
    children2: "<?= $lang['booking_children2'] ?>",

    add_room: "<?= $lang['booking_add_room'] ?>",
    hint_max: "<?= $lang['booking_hint'] ?>",
    find_rooms_btn: "<?= $lang['booking_find_rooms'] ?>",

    // кнопки / загрузка
    loading: "<?= $lang['loading'] ?>",
    btn_next: "<?= $lang['btn_next'] ?>",
    btn_select: "<?= $lang['booking_btn_select'] ?>",
    btn_unavailable: "<?= $lang['booking_btn_unavailable'] ?>",
    btn_no_rooms: "<?= $lang['booking_btn_no_rooms'] ?>",

    // ошибки
    err_dates: "<?= $lang['booking_err_dates'] ?>",
    err_checkout: "<?= $lang['booking_err_checkout'] ?>",
    err_no_rooms: "<?= $lang['booking_err_no_rooms'] ?>",
    err_required: "<?= $lang['booking_err_required'] ?>",
    err_network: "<?= $lang['booking_err_network'] ?>",

    // статусы
    sending: "<?= $lang['booking_sending'] ?>",
    success: "<?= $lang['booking_success'] ?>",
    fail: "<?= $lang['booking_fail'] ?>",

    // SUMMARY (шаг 4)
    summary_details: "<?= $lang['summary_details'] ?>",
    summary_dates: "<?= $lang['summary_dates'] ?>",
    summary_rooms: "<?= $lang['summary_rooms'] ?>",
    summary_guests: "<?= $lang['summary_guests'] ?>",
    summary_room: "<?= $lang['summary_room'] ?>",
    summary_category: "<?= $lang['summary_category'] ?>",
    summary_base_price: "<?= $lang['summary_base_price'] ?>",
    summary_extrabed: "<?= $lang['summary_extrabed'] ?>",
    summary_services: "<?= $lang['summary_services'] ?>",
    summary_total: "<?= $lang['summary_total'] ?>",
    summary_currency_notice: "<?= $lang['summary_currency_notice'] ?>",

    // услуги — общие статусы
    service_included: "<?= $lang['service_included'] ?>",
    service_included_badge: "<?= $lang['service_included_badge'] ?>",
    service_free: "<?= $lang['service_free'] ?>",
    service_added: "<?= $lang['service_added'] ?>",
    service_not_added: "<?= $lang['service_not_added'] ?>",
    service_add: "<?= $lang['service_add'] ?>",
    service_remove: "<?= $lang['service_remove'] ?>",

    // услуги — конкретные
    service_breakfast_title: "<?= $lang['service_breakfast_title'] ?>",
    service_breakfast_desc: "<?= $lang['service_breakfast_desc'] ?>",
    service_breakfast_meta: "<?= $lang['service_breakfast_meta'] ?>",

    service_spa_title: "<?= $lang['service_spa_title'] ?>",
    service_spa_desc: "<?= $lang['service_spa_desc'] ?>",
    service_spa_meta: "<?= $lang['service_spa_meta'] ?>",

    service_parking_title: "<?= $lang['service_parking_title'] ?>",
    service_parking_desc: "<?= $lang['service_parking_desc'] ?>",
    service_parking_meta: "<?= $lang['service_parking_meta'] ?>",

    service_extrabed_title: "<?= $lang['service_extrabed_title'] ?>",
    service_extrabed_desc: "<?= $lang['service_extrabed_desc'] ?>",
    service_extrabed_meta: "<?= $lang['service_extrabed_meta'] ?>",
    service_extrabed_price: "<?= $lang['service_extrabed_price'] ?>",

    // КАТЕГОРИИ НОМЕРОВ
    category_std_name: "<?= $lang['category_std_name'] ?>",
    category_std_desc: "<?= $lang['category_std_desc'] ?>",
    category_std_meta: <?= json_encode($lang['category_std_meta']) ?>,
    category_std_amen: <?= json_encode($lang['category_std_amen']) ?>,

    category_plus1_name: "<?= $lang['category_plus1_name'] ?>",
    category_plus1_desc: "<?= $lang['category_plus1_desc'] ?>",
    category_plus1_meta: <?= json_encode($lang['category_plus1_meta']) ?>,
    category_plus1_amen: <?= json_encode($lang['category_plus1_amen']) ?>,

    category_plusd_name: "<?= $lang['category_plusd_name'] ?>",
    category_plusd_desc: "<?= $lang['category_plusd_desc'] ?>",
    category_plusd_meta: <?= json_encode($lang['category_plusd_meta']) ?>,
    category_plusd_amen: <?= json_encode($lang['category_plusd_amen']) ?>,

    category_lux_name: "<?= $lang['category_lux_name'] ?>",
    category_lux_desc: "<?= $lang['category_lux_desc'] ?>",
    category_lux_meta: <?= json_encode($lang['category_lux_meta']) ?>,
    category_lux_amen: <?= json_encode($lang['category_lux_amen']) ?>
};
</script>


<script src="/assets/js/booking.js"></script>
<script src="/assets/js/main.js"></script>
<script type="module" defer>
    import n8nChatUiWidget from 'https://proxy.n8nchatui.com/api/embed/zLLseg';
    n8nChatUiWidget.load();
</script>
</body>
</html>
