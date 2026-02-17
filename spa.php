<?php include __DIR__ . '/layouts/header.php';?>
<body class="spa-page">

<!-- ====================== HERO ====================== -->
<section class="spa-hero">
    <div class="spa-hero__overlay"></div>

    <div class="spa-hero__inner">

        <div class="spa-hero__time">
            <?= $lang['spa_work_time'] ?>
        </div>

        <h1 class="spa-hero__title">
            <?= $lang['spa_title'] ?>
        </h1>

        <p class="spa-hero__subtitle">
            <?= $lang['spa_subtitle'] ?>
        </p>

        <a href="/booking.php" class="spa-hero__btn">
            <?= $lang['spa_btn_booking'] ?>
        </a>

    </div>
</section>



<!-- ====================== БАССЕЙН ====================== -->
<section class="spa-section spa-section--light">
    <div class="spa-section__content">
        <h2><?= $lang['spa_pool_title'] ?></h2>

        <p><?= $lang['spa_pool_desc'] ?></p>

        <a href="/booking.php" class="btn-outline-gold">
            <?= $lang['spa_btn_booking'] ?>
        </a>
    </div>

    <div class="spa-section__media" data-slider="pool">
        <div class="swiper spa-slider-track">
            <img src="/assets/img/spa/pool1.jpg" alt="SPA Pool">
            <img src="/assets/img/spa/pool2.jpg" alt="SPA Pool">
            <img src="/assets/img/spa/pool3.jpg" alt="SPA Pool">
        </div>

        <div class="spa-arrow prev">&#10094;</div>
        <div class="spa-arrow next">&#10095;</div>
    </div>
</section>



<!-- ====================== САУНА ====================== -->
<section class="spa-section reverse spa-section--light">
    <div class="spa-section__content">
        <h2><?= $lang['spa_sauna_title'] ?></h2>

        <p><?= $lang['spa_sauna_desc'] ?></p>

        <a href="/booking.php" class="btn-outline-gold">
            <?= $lang['spa_btn_booking'] ?>
        </a>
    </div>

    <div class="spa-section__media" data-slider="sauna">
        <div class="swiper spa-slider-track">
            <img src="/assets/img/spa/sauna1.jpg" alt="Sauna">
            <img src="/assets/img/spa/sauna2.jpg" alt="Sauna">
            <img src="/assets/img/spa/sauna3.jpg" alt="Sauna">
        </div>

        <div class="spa-arrow prev">&#10094;</div>
        <div class="spa-arrow next">&#10095;</div>
    </div>
</section>



<!-- ====================== FINAL ====================== -->
<section class="spa-final">
    <div class="spa-final__overlay"></div>

    <div class="spa-final__inner">
        <h2><?= $lang['spa_final_rest_title'] ?></h2>

        <p><?= $lang['spa_final_rest_desc'] ?></p>

        <a href="/rest.php" class="btn-gold-outline">
            <?= $lang['spa_final_btn_more'] ?>
        </a>
    </div>
</section>


<?php include __DIR__ . '/layouts/footer.php';?>

<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/spa.js" defer></script>
<script type="module" defer>
    import n8nChatUiWidget from 'https://proxy.n8nchatui.com/api/embed/zLLseg';
    n8nChatUiWidget.load();
</script>
</body>
</html>
