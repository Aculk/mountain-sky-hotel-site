<?php include __DIR__ . '/layouts/header.php';?>
<body class="about-page">


<!-- ====================== HERO ====================== -->
<section class="about-hero">
    <div class="about-hero__overlay"></div>
    <div class="about-hero__pattern"></div>

    <div class="about-hero__inner">
        <div class="about-hero__pretitle"><?= $lang['about_hero_pretitle'] ?></div>

        <h1 class="about-hero__title">
            MOUNTAIN SKY<br>HOTEL & SPA
        </h1>

        <p class="about-hero__subtitle">
            <?= $lang['about_hero_subtitle'] ?>
        </p>

        <div class="about-hero__divider"></div>
    </div>
</section>


<!-- ====================== УДОБНОЕ РАСПОЛОЖЕНИЕ ====================== -->
<section class="about-location">
    <div class="about-location__arc"></div>

    <div class="about-location__inner">
        <h2 class="about-location__title"><?= $lang['about_location_title'] ?></h2>
        <p class="about-location__subtitle"><?= $lang['about_location_subtitle'] ?></p>

        <p class="about-location__text">
            <?= $lang['about_location_text'] ?>
        </p>

        <div class="about-location__image">
            <img src="/assets/img/about/location.jpg" alt="<?= $lang['about_location_alt'] ?>">
        </div>
    </div>
</section>


<!-- ====================== ИДЕАЛЬНОЕ МЕСТО ДЛЯ ОТДЫХА ====================== -->
<section class="about-features">
    <div class="about-section-header">
        <h2><?= $lang['about_features_title'] ?></h2>
        <p><?= $lang['about_features_subtitle'] ?></p>
    </div>

    <div class="about-features__grid">

        <!-- Карточка 1 -->
        <article class="about-feature-card">
            <div class="about-feature-card__image">
                <img src="/assets/img/about/feature-restaurant.jpg" alt="<?= $lang['about_feature1_alt'] ?>">
            </div>
            <h3 class="about-feature-card__title"><?= $lang['about_feature1_title'] ?></h3>
            <p class="about-feature-card__text"><?= $lang['about_feature1_text'] ?></p>
            <a href="/rest.php" class="about-feature-card__link"><?= $lang['about_feature_link'] ?></a>
        </article>

        <!-- Карточка 2 -->
        <article class="about-feature-card">
            <div class="about-feature-card__image">
                <img src="/assets/img/about/feature-spa.jpg" alt="<?= $lang['about_feature2_alt'] ?>">
            </div>
            <h3 class="about-feature-card__title"><?= $lang['about_feature2_title'] ?></h3>
            <p class="about-feature-card__text"><?= $lang['about_feature2_text'] ?></p>
            <a href="/spa.php" class="about-feature-card__link"><?= $lang['about_feature_link'] ?></a>
        </article>

        <!-- Карточка 3 -->
        <article class="about-feature-card">
            <div class="about-feature-card__image">
                <img src="/assets/img/about/feature-parking.jpg" alt="<?= $lang['about_feature3_alt'] ?>">
            </div>
            <h3 class="about-feature-card__title"><?= $lang['about_feature3_title'] ?></h3>
            <p class="about-feature-card__text"><?= $lang['about_feature3_text'] ?></p>
        </article>

        <!-- Карточка 4 -->
        <article class="about-feature-card">
            <div class="about-feature-card__image">
                <img src="/assets/img/about/feature-kids.jpg" alt="<?= $lang['about_feature4_alt'] ?>">
            </div>
            <h3 class="about-feature-card__title"><?= $lang['about_feature4_title'] ?></h3>
            <p class="about-feature-card__text"><?= $lang['about_feature4_text'] ?></p>
        </article>

    </div>
</section>


<!-- ====================== АКТИВНОСТИ ====================== -->
<section class="about-activities">
    <div class="about-section-header">
        <h2><?= $lang['about_activities_title'] ?></h2>
        <p><?= $lang['about_activities_subtitle'] ?></p>
    </div>

    <div class="about-activities__grid">

        <article class="about-activity-card">
            <div class="about-activity-card__image">
                <img src="/assets/img/about/activity-ski.jpg" alt="<?= $lang['about_act1_alt'] ?>">
            </div>
            <h3 class="about-activity-card__title"><?= $lang['about_act1_title'] ?></h3>
        </article>

        <article class="about-activity-card">
            <div class="about-activity-card__image">
                <img src="/assets/img/about/activity-quad.jpg" alt="<?= $lang['about_act2_alt'] ?>">
            </div>
            <h3 class="about-activity-card__title"><?= $lang['about_act2_title'] ?></h3>
        </article>

        <article class="about-activity-card">
            <div class="about-activity-card__image">
                <img src="/assets/img/about/activity-hiking.jpg" alt="<?= $lang['about_act3_alt'] ?>">
            </div>
            <h3 class="about-activity-card__title"><?= $lang['about_act3_title'] ?></h3>
        </article>

        <article class="about-activity-card">
            <div class="about-activity-card__image">
                <img src="/assets/img/about/activity-rafting.jpg" alt="<?= $lang['about_act4_alt'] ?>">
            </div>
            <h3 class="about-activity-card__title"><?= $lang['about_act4_title'] ?></h3>
        </article>

    </div>
</section>


<!-- ====================== СЕРВИС И КОМФОРТ ====================== -->
<section class="about-comfort">
    <div class="about-section-header">
        <h2><?= $lang['about_comfort_title'] ?></h2>
        <p><?= $lang['about_comfort_subtitle'] ?></p>
    </div>

    <div class="about-comfort__gallery">
        <div class="about-comfort__item">
            <img src="/assets/img/about/comfort-terrace.jpg" alt="<?= $lang['about_comfort1_alt'] ?>">
        </div>
        <div class="about-comfort__item">
            <img src="/assets/img/about/comfort-service.jpg" alt="<?= $lang['about_comfort2_alt'] ?>">
        </div>
        <div class="about-comfort__item">
            <img src="/assets/img/about/comfort-room.jpg" alt="<?= $lang['about_comfort3_alt'] ?>">
        </div>
    </div>
</section>


<!-- ====================== ФИНАЛЬНЫЙ БЛОК ====================== -->
<section class="about-final">
    <div class="about-final__overlay"></div>

    <div class="about-final__inner">

        <div class="about-final__logo-circle">
            <img src="/assets/img/logo.png" alt="Mountain Sky Logo" class="about-final__logo-img">
        </div>

        <h2 class="about-final__title"><?= $lang['about_final_title'] ?></h2>

        <p class="about-final__subtitle">
            <?= $lang['about_final_subtitle'] ?>
        </p>

        <a href="/booking.php" class="about-final__btn"><?= $lang['footer_book_room'] ?></a>
    </div>
</section>


<?php include __DIR__ . '/layouts/footer.php';?>

<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/about.js" defer></script>
<script type="module" defer>
    import n8nChatUiWidget from 'https://proxy.n8nchatui.com/api/embed/zLLseg';
    n8nChatUiWidget.load();
</script>

</body>
</html>
