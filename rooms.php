<?php include __DIR__ . '/layouts/header.php'; ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<body>

<div class="page-rooms">

    <div class="rooms-hero">
        <div class="rooms-hero__overlay"></div>

        <div class="rooms-hero__inner">
            <h1><?= $lang['rooms_title'] ?></h1>
            <p><?= $lang['rooms_subtitle'] ?></p>
        </div>
    </div>

    <section class="container rooms-list" id="roomsList"></section>

    <div class="rooms-final">
        <div class="rooms-final__overlay"></div>
        <div class="rooms-final__inner">
            <img src="/assets/img/logo.png" class="rooms-final__logo">
            <div class="rooms-final__brand">MOUNTAIN SKY HOTEL & SPA</div>
            <h2><?= $lang['rooms_final_title'] ?></h2>

            <a href="/booking.php" class="btn rooms-final__btn">
                <?= $lang['rooms_book_btn'] ?>
            </a>
        </div>
    </div>

</div>

<?php include __DIR__ . '/layouts/footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const ROOMS_LANG = {
        std_name: "<?= $lang['room_std_name'] ?>",
        std_params: <?= json_encode($lang['room_std_params']) ?>,
        std_desc: "<?= $lang['room_std_desc'] ?>",

        plus_s_name: "<?= $lang['room_plus_s_name'] ?>",
        plus_s_params: <?= json_encode($lang['room_plus_s_params']) ?>,
        plus_s_desc: "<?= $lang['room_plus_s_desc'] ?>",

        plus_d_name: "<?= $lang['room_plus_d_name'] ?>",
        plus_d_params: <?= json_encode($lang['room_plus_d_params']) ?>,
        plus_d_desc: "<?= $lang['room_plus_d_desc'] ?>",

        lux_name: "<?= $lang['room_lux_name'] ?>",
        lux_params: <?= json_encode($lang['room_lux_params']) ?>,
        lux_desc: "<?= $lang['room_lux_desc'] ?>",

        btn_book: "<?= $lang['rooms_btn_book'] ?>",
        btn_more: "<?= $lang['rooms_btn_more'] ?>"
    };
</script>

<script src="/assets/js/rooms.js"></script>
<script src="/assets/js/main.js"></script>
<script type="module" defer>
    import n8nChatUiWidget from 'https://proxy.n8nchatui.com/api/embed/zLLseg';
    n8nChatUiWidget.load();
</script>
</body>
</html>
