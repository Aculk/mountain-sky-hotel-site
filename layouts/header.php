<?php
session_start();

// Переключение языка, если пришёл GET параметр
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

$currentLang = $_SESSION['lang'] ?? 'ru';

// подключаем перевод (ОБЯЗАТЕЛЬНО из /public_html)
include_once $_SERVER['DOCUMENT_ROOT'] . '/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= $currentLang ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $lang['site_title'] ?? 'Mountain Sky Hotel' ?></title>

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" type="image/png" href="/assets/img/logo.png">
</head>
<body>
<header class="header">
    <div class="header__inner">

        <!-- LEFT NAV (DESKTOP) -->
        <nav class="nav">
            <a href="/rooms.php"><?= $lang['menu_rooms'] ?></a>
            <a href="/spa.php"><?= $lang['menu_spa'] ?></a>
            <a href="/rest.php"><?= $lang['menu_rest'] ?></a>
            <a href="/about.php"><?= $lang['menu_about'] ?></a>
        </nav>

        <!-- LOGO -->
        <a href="/index.php" class="logo">
            <img src="/assets/img/logo.png" alt="Mountain Sky">
        </a>

        <!-- RIGHT SIDE -->
        <div class="header__right">

            <a href="/cont.php" class="contact-link"><?= $lang['menu_contacts'] ?></a>

            <div class="lang lang--js">
                <span class="lang__current"><?= strtoupper($currentLang) ?></span>

                <div class="lang__dropdown">
                    <a href="/api/lang.php?lang=ru">RU</a>
                    <a href="/api/lang.php?lang=en">EN</a>
                    <a href="/api/lang.php?lang=ge">GE</a>
                </div>
            </div>

            <a href="tel:+995591077000" class="phone">+995 591 07 70 00</a>

            <a href="/booking.php" class="btn-book"><?= $lang['menu_booking'] ?></a>

            <!-- BURGER -->
            <div class="burger">
                <span></span><span></span><span></span>
            </div>

        </div>
    </div>

    <!-- DARK OVERLAY -->
    <div class="menu-overlay"></div>

    <!-- MOBILE MENU -->
    <div class="mobile-menu">

        <div class="mobile-logo-wrapper">
            <img src="/assets/img/logo.png" class="mobile-logo" alt="Logo">
        </div>

        <nav class="mobile-nav">
            <a href="/rooms.php"><?= $lang['menu_rooms'] ?></a>
            <a href="/spa.php"><?= $lang['menu_spa'] ?></a>
            <a href="/rest.php"><?= $lang['menu_rest'] ?></a>
            <a href="/about.php"><?= $lang['menu_about'] ?></a>
            <a href="/cont.php"><?= $lang['menu_contacts'] ?></a>
        </nav>

        <a href="/booking.php" class="btn-book-mobile"><?= $lang['menu_booking'] ?></a>
    </div>

</header>
