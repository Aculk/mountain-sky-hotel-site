<?php include __DIR__ . '/layouts/header.php';?>
<body>

<!-- ===================== HERO ===================== -->
<section class="hero">
    <div class="hero__bg"></div>

    <div class="hero__content">
        <img class="hero__logo" src="/assets/img/logo.png" alt="Mountain Sky Logo">

        <p class="hero__text">
            <?= $lang['home_hero_text'] ?>
        </p>
    </div>
</section>

<!-- ===================== COMFORT ===================== -->
<section class="comfort">

    <div class="comfort__video-wrapper">
        <video class="comfort__video" autoplay muted loop playsinline>
            <source src="/assets/video/advantages.mp4" type="video/mp4">
        </video>

        <div class="comfort__overlay"></div>

        <div class="comfort__title-block">
            <h2 class="comfort__title"><?= $lang['home_comfort_title'] ?></h2>
            <p class="comfort__subtitle"><?= $lang['home_comfort_subtitle'] ?></p>

            <div class="comfort__benefits">
                <p><?= $lang['home_benefit1'] ?></p>
                <p><?= $lang['home_benefit2'] ?></p>
                <p><?= $lang['home_benefit3'] ?></p>
            </div>
        </div>

        <div class="comfort__arc"></div>
    </div>

</section>

<!-- ===================== ROOMS ===================== -->
<section class="rooms-new">

    <div class="container">

        <div class="rooms-new__top">

            <div class="rooms-new__count">
                <?= $lang['home_rooms_count'] ?>
            </div>

            <h2 class="rooms-new__title"><?= $lang['home_rooms_title'] ?></h2>

            <a href="/booking.php" class="rooms-new__btn">
                <?= $lang['home_rooms_btn'] ?> →
            </a>

        </div>

        <div class="rooms-new__grid">

            <div class="room-new">
                <div class="room-new__img">
                    <img src="/assets/img/rooms/R-STD/1.jpg" alt="">
                </div>
                <h3 class="room-new__name"><?= $lang['home_room_std'] ?></h3>
            </div>

            <div class="room-new">
                <div class="room-new__img">
                    <img src="/assets/img/rooms/R-PLUS-S/3.jpg" alt="">
                </div>
                <h3 class="room-new__name"><?= $lang['home_room_plus_s'] ?></h3>
            </div>

            <div class="room-new">
                <div class="room-new__img">
                    <img src="/assets/img/rooms/R-PLUS-D/1.jpg" alt="">
                </div>
                <h3 class="room-new__name"><?= $lang['home_room_plus_d'] ?></h3>
            </div>

            <div class="room-new">
                <div class="room-new__img">
                    <img src="/assets/img/rooms/R-LUX/1.jpg" alt="">
                </div>
                <h3 class="room-new__name"><?= $lang['home_room_lux'] ?></h3>
            </div>

        </div>

    </div>

</section>

<div class="rooms-to-spa"></div>

<!-- ===================== SPA ===================== -->
<section class="spa">

    <div class="spa__bg"></div>

    <div class="container spa__inner">

        <h2 class="section-title spa__title">SPA & RELAX</h2>
        <p class="spa__subtitle"><?= $lang['home_spa_subtitle'] ?></p>

        <div class="spa__center-img">
            <img src="/assets/img/spa-center.jpg" alt="SPA">
        </div>

        <div class="spa__options">
            <div class="spa__option"><?= $lang['home_spa_opt1'] ?></div>
            <div class="spa__option"><?= $lang['home_spa_opt2'] ?></div>
            <div class="spa__option"><?= $lang['home_spa_opt3'] ?></div>
        </div>

        <a href="/spa.php" class="spa__btn"><?= $lang['home_spa_btn'] ?> →</a>

    </div>

</section>

<div class="spa-to-restaurant"></div>

<!-- ===================== RESTAURANT ===================== -->
<section class="restaurant">

    <div class="container restaurant__inner">

        <div class="restaurant__gallery">
            <div class="restaurant__img restaurant__img--big">
                <img src="/assets/img/restaurant1.jpg" alt="">
            </div>

            <div class="restaurant__img restaurant__img--small">
                <img src="/assets/img/restaurant2.jpg" alt="">
            </div>

            <div class="restaurant__img restaurant__img--small">
                <img src="/assets/img/restaurant3.jpg" alt="">
            </div>
        </div>

        <div class="restaurant__content">

            <p class="restaurant__pretitle"><?= $lang['home_rest_pretitle'] ?></p>

            <h2 class="section-title restaurant__title"><?= $lang['home_rest_title'] ?></h2>

            <p class="restaurant__text"><?= $lang['home_rest_text1'] ?></p>
            <p class="restaurant__text"><?= $lang['home_rest_text2'] ?></p>

            <a href="/coming-soon.php" class="btn restaurant__btn"><?= $lang['home_rest_btn'] ?> →</a>

        </div>

    </div>

</section>

<div class="restaurant-to-offers"></div>

<!-- ===================== OFFERS ===================== -->
<section class="offers">
    <div class="container">

        <h2 class="section-title offers__title"><?= $lang['home_offers_title'] ?></h2>

        <div class="offers__grid">

            <div class="offer-card">
                <img src="/assets/img/offer1.jpg" alt="">
                <div class="offer-card__content">
                    <h3 class="offer-card__title"><?= $lang['home_offer1_title'] ?></h3>
                    <p class="offer-card__text"><?= $lang['home_offer1_text'] ?></p>
                    <a href="coming-soon.php" class="offer-card__btn"><?= $lang['home_offer_btn'] ?> →</a>
                </div>
            </div>

            <div class="offers__divider"></div>

            <div class="offer-card">
                <img src="/assets/img/offer2.jpg" alt="">
                <div class="offer-card__content">
                    <h3 class="offer-card__title"><?= $lang['home_offer2_title'] ?></h3>
                    <p class="offer-card__text"><?= $lang['home_offer2_text'] ?></p>
                    <a href="coming-soon.php" class="offer-card__btn"><?= $lang['home_offer_btn'] ?> →</a>
                </div>
            </div>

        </div>

    </div>
</section>

<div class="offers-to-footer"></div>

<?php include __DIR__ . '/layouts/footer.php';?>

<script src="/assets/js/main.js"></script>
<script type="module" defer>
    import n8nChatUiWidget from 'https://proxy.n8nchatui.com/api/embed/zLLseg';
    n8nChatUiWidget.load();
</script>
</body>
</html>
