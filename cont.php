<?php include __DIR__ . '/layouts/header.php';?>
<body class="cont-page">

<!-- ===================== HERO ===================== -->
<section class="cont-hero">
    <div class="cont-hero__overlay"></div>

    <!-- Декоративный фон -->
    <img class="cont-hero__pattern" src="/assets/img/cont/pattern.svg" alt="pattern">

    <div class="cont-hero__inner">
        <h1><?= $lang['cont_title'] ?></h1>

        <div class="cont-contacts">
            <div class="cont-block">
                <div class="cont-label">🍽 <?= $lang['cont_restaurant'] ?></div>
                <div class="cont-phone">+995 591 07 70 00</div>
            </div>

            <div class="cont-block">
                <div class="cont-label">🛎 <?= $lang['cont_reception'] ?></div>
                <div class="cont-phone">+995 591 07 70 00</div>
            </div>

            <div class="cont-block">
                <div class="cont-label">✉ <?= $lang['cont_email_label'] ?></div>
                <div class="cont-email">mountainsky@gmail.com</div>
            </div>
        </div>

        <div class="cont-socials">
            <a href="https://www.instagram.com/mountainsky.resort" class="soc"><?= $lang['cont_instagram'] ?></a>
            <a href="#" class="soc"><?= $lang['cont_viber'] ?></a>
            <a href="#" class="soc"><?= $lang['cont_whatsapp'] ?></a>
            <a href="#" class="soc"><?= $lang['cont_telegram'] ?></a>
        </div>
    </div>
</section>

<!-- ===================== HOW TO FIND ===================== -->
<section class="cont-map">
    <h2><?= $lang['cont_how_find'] ?></h2>

    <div class="cont-map__inner">
        <div class="location-label">📍 <?= $lang['cont_location'] ?></div>

        <div class="location-address"><?= $lang['cont_address'] ?></div>

        <a href="https://maps.app.goo.gl/bGnQB4VzmvXuXzK88" class="route-btn" target="_blank">
            <?= $lang['cont_route_btn'] ?> →
        </a>

        <div class="map-wrapper">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.880711390705!2d42.49217879327867!3d41.63670981011139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x405d4a5e3c905f27%3A0xd9d9ed59747b588b!2sGoderdzis%20Ugheltekhili!5e0!3m2!1sru!2sge!4v1765131384465!5m2!1sru!2sge" 
                allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php';?>

<script src="/assets/js/cont.js"></script>
<script src="/assets/js/main.js"></script>
<script type="module" defer>
    import n8nChatUiWidget from 'https://proxy.n8nchatui.com/api/embed/zLLseg';
    n8nChatUiWidget.load();
</script>
</body>
</html>
