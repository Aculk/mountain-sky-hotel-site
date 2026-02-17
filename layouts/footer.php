<?php include_once __DIR__ . '/lang.php'; ?>

<footer class="footer">
    <div class="footer__inner">

        <!-- Верхняя часть футера -->
        <div class="footer__top">

            <!-- Левая колонка: логотип + кнопка -->
            <div class="footer__col footer__col--left">
                <div class="footer__brand">
                    <a href="/index.php" class="footer__logo-link">
                        <img src="/assets/img/logo.png"
                             alt="Mountain Sky"
                             class="footer__logo">
                    </a>
                    <div class="footer__brand-text">
                        <span class="footer__brand-name">Mountain Sky</span>
                        <span class="footer__brand-subtitle">HOTEL &amp; SPA RESORT</span>
                    </div>
                </div>

                <a href="/booking.php" class="btn footer__book-btn">
                    <?= $lang['footer_book_room'] ?>
                </a>
            </div>

            <!-- Центральная колонка: контакты -->
            <div class="footer__col footer__col--contacts">

                <div class="footer-contact">
                    <div class="footer-contact__label">
                        <span class="footer-contact__icon">
                            <img src="/assets/img/icon-phone-placeholder.svg" alt="">
                        </span>
                        <?= $lang['footer_reception'] ?>
                    </div>
                    <a href="tel:+995558670270" class="footer-contact__value">
                        +995 591 07 70 00
                    </a>
                </div>

                <div class="footer-contact">
                    <div class="footer-contact__label">
                        <span class="footer-contact__icon">
                            <img src="/assets/img/icon-phone-placeholder.svg" alt="">
                        </span>
                        <?= $lang['footer_restaurant'] ?>
                    </div>
                    <a href="tel:+995558670270" class="footer-contact__value">
                        +995 591 07 70 00
                    </a>
                </div>

                <div class="footer-contact">
                    <div class="footer-contact__label">
                        <span class="footer-contact__icon">
                            <img src="/assets/img/icon-mail-placeholder.svg" alt="">
                        </span>
                        <?= $lang['footer_write_us'] ?>
                    </div>
                    <a href="mailto:mountainsky@gmail.com" class="footer-contact__value">
                        mountainsky@gmail.com
                    </a>
                </div>

                <div class="footer-contact">
                    <div class="footer-contact__label">
                        <span class="footer-contact__icon">
                            <img src="/assets/img/icon-location-placeholder.svg" alt="">
                        </span>
                        <?= $lang['footer_where'] ?>
                    </div>
                    <div class="footer-contact__value footer-contact__value--address">
                        <?= $lang['footer_address'] ?>
                    </div>
                </div>

            </div>

            <!-- Правая колонка: меню -->
            <div class="footer__col footer__col--menu">
                <div class="footer-menu">
                    <div class="footer-menu__column">
                        <a href="/rooms.php" class="footer-menu__item"><?= $lang['menu_rooms'] ?></a>
                        <a href="/spa.php" class="footer-menu__item"><?= $lang['menu_spa'] ?></a>
                        <a href="/rest.php" class="footer-menu__item"><?= $lang['menu_rest'] ?></a>
                        <a href="/about.php" class="footer-menu__item"><?= $lang['menu_about'] ?></a>
                    </div>

                    <div class="footer-menu__column">
                        <a href="/cont.php" class="footer-menu__item"><?= $lang['menu_contacts'] ?></a>
                        <a href="/coming-soon.php" class="footer-menu__item"><?= $lang['footer_special'] ?></a>
                    </div>

                    <div class="footer-menu__column">
                        <a href="/coming-soon.php" class="footer-menu__item"><?= $lang['footer_privacy'] ?></a>
                        <a href="/coming-soon.php" class="footer-menu__item"><?= $lang['footer_offer'] ?></a>
                    </div>
                </div>
            </div>

        </div><!-- /.footer__top -->

        <!-- Нижняя часть футера -->
        <div class="footer__bottom">
            <div class="footer__bottom-left">
                ©MOUNTAIN SKY HOTEL &amp; SPA RESORT 2025
            </div>

            <div class="footer__bottom-center">
                <img src="/assets/img/icons/pay.png"
                     alt="Payments"
                     class="footer__payments">
            </div>

            <div class="footer__bottom-right">
                <a href="https://www.instagram.com/mountainsky.resort" class="footer-social">
                    <img src="/assets/img/icons/icon_1.svg" alt="Instagram">
                </a>
                <a href="#" class="footer-social">
                    <img src="/assets/img/icons/icon_2.svg" alt="Viber">
                </a>
                <a href="#" class="footer-social">
                    <img src="/assets/img/icons/icon_3.svg" alt="WhatsApp">
                </a>
                <a href="#" class="footer-social">
                    <img src="/assets/img/icons/icon_4.svg" alt="Telegram">
                </a>
            </div>
        </div><!-- /.footer__bottom -->

    </div><!-- /.footer__inner -->
</footer>
