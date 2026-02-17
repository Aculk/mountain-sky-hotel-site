<?php include __DIR__ . '/layouts/header.php';?>
<body class="rest-page">

<!-- ========================= HERO ========================= -->
<section class="rest-hero">
    <div class="rest-hero__overlay"></div>

    <div class="rest-hero__inner">
        <div class="rest-hero__time"><?= $lang['rest_work_time'] ?></div>

        <h1 class="rest-hero__title"><?= $lang['rest_title'] ?></h1>

        <div class="rest-hero__divider"></div>

        <p class="rest-hero__subtitle">
            <?= $lang['rest_subtitle'] ?>
        </p>
    </div>
</section>


<!-- ========================= DISHES / ATMOSPHERE ========================= -->
<section class="rest-section center">
    <h2 class="rest-section__title"><?= $lang['rest_atmo_title'] ?></h2>

    <p class="rest-section__subtitle">
        <?= $lang['rest_atmo_subtitle'] ?>
    </p>

    <div class="rest-section__images arc-top">
        <img src="/assets/img/rest/atmo1.jpg" alt="">
    </div>
</section>


<!-- ========================= MODERN KITCHEN ========================= -->
<section class="rest-block">
    <div class="rest-block__header">
        <h2><?= $lang['rest_kitchen_title'] ?></h2>

        <a href="/coming-soon.php" class="rest-btn"><?= $lang['rest_menu_btn'] ?> →</a>
    </div>

    <div class="rest-gallery" data-slider="kitchen">
        <div class="rest-gallery-track">
            <img src="/assets/img/rest/k1.jpg">
            <img src="/assets/img/rest/k2.jpg">
            <img src="/assets/img/rest/k3.jpg">
        </div>

        <div class="rest-arrow prev">&#10094;</div>
        <div class="rest-arrow next">&#10095;</div>
    </div>
</section>


<!-- ========================= BUFFET LINE ========================= -->
<section class="rest-line">
    <div class="rest-line__img">
        <img src="/assets/img/rest/line1.jpg">
    </div>

    <div class="rest-line__content">
        <h2><?= $lang['rest_buffet_title'] ?></h2>

        <p><?= $lang['rest_buffet_text'] ?></p>

        <div class="rest-line__time">
            <strong><?= $lang['rest_breakfast'] ?></strong><br>
            <?= $lang['rest_breakfast_time'] ?>
        </div>
    </div>
</section>


<!-- ========================= BAR ========================= -->
<section class="rest-bar">
    <div class="rest-bar__content">
        <h2><?= $lang['rest_bar_title'] ?></h2>

        <p><?= $lang['rest_bar_text'] ?></p>

        <a href="/coming-soon.php" class="rest-bar__menu-link"><?= $lang['rest_bar_menu'] ?></a>
    </div>

    <div class="rest-gallery" data-slider="bar">
        <div class="rest-gallery-track">
            <img src="/assets/img/rest/bar1.jpg">
            <img src="/assets/img/rest/bar2.jpg">
            <img src="/assets/img/rest/bar3.jpg">
        </div>

        <div class="rest-arrow prev">&#10094;</div>
        <div class="rest-arrow next">&#10095;</div>
    </div>
</section>


<!-- ========================= RELAX & SPA BLOCK ========================= -->
<section class="rest-spa">
    <div class="rest-spa__overlay"></div>

    <div class="rest-spa__inner">
        <h2>RELAX & SPA</h2>

        <p><?= $lang['rest_spa_text'] ?></p>

        <a href="/spa.php" class="rest-btn-white"><?= $lang['rest_spa_btn'] ?> →</a>
    </div>
</section>


<?php include __DIR__ . '/layouts/footer.php';?>

<script src="/assets/js/rest.js" defer></script>
<script src="/assets/js/main.js"></script>
<script type="module" defer>
    import n8nChatUiWidget from 'https://proxy.n8nchatui.com/api/embed/zLLseg';
    n8nChatUiWidget.load();
</script>
</body>
</html>
