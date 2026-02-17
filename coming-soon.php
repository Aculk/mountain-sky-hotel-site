<?php include __DIR__ . '/layouts/header.php';?>
<body class="coming-soon-page">

<section class="coming-hero">
    <div class="coming-hero__overlay"></div>

    <div class="coming-hero__inner">
        <h1><?= $lang['coming_title'] ?></h1>
        <p><?= $lang['coming_subtitle'] ?></p>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php';?>

<script src="/assets/js/main.js"></script>
<script type="module" defer>
    import n8nChatUiWidget from 'https://proxy.n8nchatui.com/api/embed/zLLseg';
    n8nChatUiWidget.load();
</script>
</body>
</html>
