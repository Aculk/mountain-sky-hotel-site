<?php
// Определяем язык
$currentLang = $_SESSION['lang'] ?? 'ru';

$texts = [
    'ru' => [
        'menu_rooms'    => 'Номера',
        'menu_spa'      => 'SPA & Relax',
        'menu_rest'     => 'Ресторан и бар',
        'menu_about'    => 'О нас',
        'menu_contacts' => 'Контакты',
        'menu_booking'  => 'Забронировать',
        'footer_book_room'  => 'ЗАБРОНИРОВАТЬ НОМЕР',
        'footer_reception'  => 'РЕЦЕПЦИЯ',
        'footer_restaurant' => 'РЕСТОРАН',
        'footer_write_us'   => 'НАПИСАТЬ НАМ',
        'footer_where'      => 'ГДЕ МЫ НАХОДИМСЯ?',
        'footer_address'    => 'Годердзи, Mountain Sky Hotel',
        'footer_special'    => 'СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ',
        'footer_privacy'    => 'ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ',
        'footer_offer'      => 'ДОГОВОР ПУБЛИЧНОЙ ОФЕРТЫ',
        // ABOUT PAGE — RU
        'about_meta_title' => 'О нас',

        'about_hero_pretitle' => 'ГОРНЫЙ ОТЕЛЬ В СЕРДЦЕ КУРОРТА',
        'about_hero_subtitle' => 'Просторные номера, панорамные виды на горы и SPA-комплекс для полной перезагрузки.',

        'about_location_title' => 'УДОБНОЕ РАСПОЛОЖЕНИЕ',
        'about_location_subtitle' => 'Отель расположен в нескольких минутах ходьбы от подъёмников и основных развлечений курорта.',
        'about_location_text' =>
            'Вы сможете легко добраться до горнолыжных трасс, прогулочных маршрутов и уютных кафе. Вечером вас ждёт тишина, чистый воздух и ощущение уюта в окружении горных пейзажей.',
        'about_location_alt' => 'Вид на горы вокруг отеля Mountain Sky',

        'about_features_title' => 'ИДЕАЛЬНОЕ МЕСТО ДЛЯ ОТДЫХА',
        'about_features_subtitle' => 'Mountain Sky сочетает в себе комфорт современного отеля и атмосферу уединённого горного отдыха.',

        'about_feature1_alt' => 'Ресторан и бар',
        'about_feature1_title' => 'РЕСТОРАН И БАР',
        'about_feature1_text' => 'Авторская кухня, локальные продукты и винная карта — идеальное завершение дня в горах.',

        'about_feature2_alt' => 'SPA & Relax',
        'about_feature2_title' => 'SPA & RELAX',
        'about_feature2_text' => 'Бассейн, джакузи, сауны и зоны релакса помогут восстановить силы после активного дня.',

        'about_feature3_alt' => 'Парковка и зарядка',
        'about_feature3_title' => 'ПАРКОВКА И ЗАРЯДКА',
        'about_feature3_text' => 'Удобная парковка рядом с отелем, а также зарядка для электромобилей гостей.',

        'about_feature4_alt' => 'Детская комната',
        'about_feature4_title' => 'ДЕТСКАЯ КОМНАТА',
        'about_feature4_text' => 'Игровое пространство для самых маленьких гостей, чтобы отдых был комфортным для всей семьи.',

        'about_feature_link' => 'ПОДРОБНЕЕ',

        'about_activities_title' => 'АКТИВНЫЙ ОТДЫХ РЯДОМ С ОТЕЛЕМ',
        'about_activities_subtitle' => 'Зимой и летом курорт предлагает множество развлечений — выбирайте то, что ближе именно вам.',

        'about_act1_alt' => 'Прокат лыж',
        'about_act1_title' => 'ПРОКАТ ЛЫЖ',

        'about_act2_alt' => 'Прокат квадроциклов',
        'about_act2_title' => 'ПРОКАТ КВАДРОЦИКЛОВ',

        'about_act3_alt' => 'Походы в горы',
        'about_act3_title' => 'ПОХОДЫ В ГОРЫ',

        'about_act4_alt' => 'Рафтинг',
        'about_act4_title' => 'РАФТИНГ',

        'about_comfort_title' => 'СЕРВИС И КОМФОРТ',
        'about_comfort_subtitle' => 'Мы уделяем внимание деталям, чтобы вы чувствовали себя как дома с первого дня пребывания.',

        'about_comfort1_alt' => 'Терраса отеля Mountain Sky',
        'about_comfort2_alt' => 'Сервис и уборка в отеле',
        'about_comfort3_alt' => 'Комфортные номера Mountain Sky',

        'about_final_title' => 'ОТДЫХАЙТЕ ВМЕСТЕ С MOUNTAIN SKY',
        'about_final_subtitle' => 'Забронируйте номер сейчас и откройте для себя атмосферу настоящего горного отеля.',

        'booking_meta_title' => 'Бронирование – Mountain Sky',
        'booking_title' => 'БРОНИРОВАНИЕ',
        'booking_subtitle' => 'Выберите даты, категорию номера, дополнительные услуги и оставьте заявку онлайн',

        'booking_step1' => 'Шаг 1',
        'booking_step1_title' => 'Выберите даты заезда, выезда и гостей',

        'booking_checkin' => 'Дата заезда',
        'booking_checkout' => 'Дата выезда',

        'booking_room' => 'Номер',

        'booking_adults' => 'Взрослые',
        'booking_adult' => 'взрослый',
        'booking_adults2' => 'взрослых',

        'booking_children' => 'Дети',
        'booking_child' => 'ребёнок',
        'booking_children0' => 'без детей',
        'booking_children2' => 'детей',

        'booking_add_room' => 'Добавить ещё номер',

        'booking_hint' => 'Максимум 4 взрослых и 4 ребёнка на каждый номер. Всего можно забронировать до 4 номеров.',

        'booking_find_rooms' => 'Найти номера',

        'booking_step2' => 'Шаг 2',
        'booking_step2_title' => 'Выберите категорию номера',

        'booking_step3' => 'Шаг 3',
        'booking_step3_title' => 'Выберите дополнительные услуги',
        'booking_services_hint' => 'Завтрак, SPA и парковка уже включены в проживание.',

        'booking_step4' => 'Шаг 4',
        'booking_step4_title' => 'Оформление брони',

        'booking_name' => 'Имя',
        'booking_phone' => 'Телефон',
        'booking_comment' => 'Комментарий к брони',
        'booking_comment_placeholder' => 'Например: поздний заезд, детская кроватка и т.д.',

        'booking_reserve' => 'Забронировать',

        /* ---------------------
       ОБЩИЕ ТЕКСТЫ BOOKING
    ---------------------- */

        'booking_step1' => 'Шаг 1',
        'booking_step1_title' => 'Выберите даты заезда, выезда и гостей',

        'booking_checkin' => 'Дата заезда',
        'booking_checkout' => 'Дата выезда',

        'booking_room' => 'Номер',
        'booking_adults' => 'Взрослые',
        'booking_adult' => 'взрослый',
        'booking_adults2' => 'взрослых',
        'booking_children' => 'Дети',
        'booking_child' => 'ребёнок',
        'booking_children0' => 'без детей',
        'booking_children2' => 'детей',

        'booking_add_room' => 'Добавить ещё номер',
        'booking_hint' => 'Максимум 4 взрослых и 4 ребёнка на каждый номер. Всего можно забронировать до 4 номеров.',
        'booking_find_rooms' => 'Найти номера',

        'booking_step2' => 'Шаг 2',
        'booking_step2_title' => 'Выберите категорию номера',
        'loading' => 'Загружаем...',

        'booking_step3' => 'Шаг 3',
        'booking_step3_title' => 'Выберите дополнительные услуги',
        'booking_services_hint' =>
            'Завтрак, SPA и парковка уже включены. Вы можете добавить дополнительную кровать.',

        'booking_step4' => 'Шаг 4',
        'booking_step4_title' => 'Оформление брони',

        'booking_name' => 'Имя *',
        'booking_phone' => 'Телефон *',
        'booking_comment' => 'Комментарий к брони',
        'booking_comment_placeholder' => 'Например: поздний заезд, детская кроватка и т.д.',
        'booking_reserve' => 'Забронировать',

        /* ---- КНОПКИ ---- */

        'booking_btn_select' => 'Выбрать',
        'booking_btn_unavailable' => 'Недоступно',
        'booking_btn_no_rooms' => 'Нет доступных номеров',
        'btn_next' => 'Продолжить',

        /* ---- ОШИБКИ ---- */

        'booking_err_dates' => 'Укажите даты заезда и выезда.',
        'booking_err_checkout' => 'Дата выезда должна быть позже даты заезда.',
        'booking_err_no_rooms' => 'Добавьте хотя бы один номер.',
        'booking_err_required' => 'Заполните обязательные поля.',
        'booking_err_network' => 'Ошибка сети. Проверьте подключение к интернету.',

        /* ---- СТАТУСЫ ---- */

        'booking_sending' => 'Отправляем бронирование...',
        'booking_success' => 'Бронь успешно отправлена! Мы свяжемся с вами.',
        'booking_fail' => 'Ошибка при отправке брони. Попробуйте ещё раз.',

        /* ---------------------
        ИТОГИ (ШАГ 4)
        ---------------------- */

        'summary_details' => 'Детали бронирования',
        'summary_dates' => 'Даты',
        'summary_rooms' => 'Количество номеров',
        'summary_guests' => 'Гости',
        'summary_room' => 'Номер',
        'summary_category' => 'Категория',
        'summary_base_price' => 'Стоимость проживания',
        'summary_extrabed' => 'Дополнительная кровать',
        'summary_services' => 'Услуги',
        'summary_total' => 'Итоговая стоимость',
        'summary_currency_notice' => '*Оплата производится в GEL',

        'service_included' => 'Включено',
        'service_included_badge' => 'Услуга включена',
        'service_free' => 'Бесплатно',
        'service_added' => 'добавлено',
        'service_not_added' => 'не добавлено',
        'service_add' => 'Добавить',
        'service_remove' => 'Убрать',

        /* ---------------------
        УСЛУГИ
        ---------------------- */

        'service_breakfast_title' => 'Завтрак',
        'service_breakfast_desc' =>
            'В стоимость номеров входит завтрак в формате «шведский стол».',
        'service_breakfast_meta' => 'Для гостей за каждую ночь',

        'service_spa_title' => 'SPA',
        'service_spa_desc' =>
            'Пользование SPA-зоной: бассейн, сауны, джакузи.',
        'service_spa_meta' => 'Для гостей за каждую ночь',

        'service_parking_title' => 'Бесплатный паркинг',
        'service_parking_desc' =>
            'Современная парковка для гостей отеля.',
        'service_parking_meta' => 'Для всех гостей',

        'service_extrabed_title' => 'Дополнительная кровать',
        'service_extrabed_desc' =>
            'Установка дополнительной кровати в номер.',
        'service_extrabed_meta' => 'За каждый выбранный номер',
        'service_extrabed_price' => '130 GEL',

        /* ---------------------
        КАТЕГОРИИ НОМЕРОВ
        ---------------------- */

        'category_std_name' => 'Стандарт',
        'category_std_desc' =>
            'Уютный стандартный номер в фирменном стиле Mountain Sky.',
        'category_std_meta' => ['до 2 гостей', '30 м²', '1 комната'],
        'category_std_amen' => ['Wi-Fi', 'Телевизор', 'Сейф', 'Холодильник'],

        'category_plus1_name' => 'Стандарт Плюс с раздельными кроватями',
        'category_plus1_desc' =>
            'Комфортный номер с двумя раздельными кроватями.',
        'category_plus1_meta' => ['до 3 гостей', '35 м²', '1 комната'],
        'category_plus1_amen' => ['Wi-Fi', 'Телевизор', 'Сейф', 'Рабочее место'],

        'category_plusd_name' => 'Стандарт Плюс с двуспальной кроватью',
        'category_plusd_desc' =>
            'Просторный номер с большой двуспальной кроватью.',
        'category_plusd_meta' => ['до 3 гостей', '35 м²', '1 комната'],
        'category_plusd_amen' => ['Wi-Fi', 'Телевизор', 'Сейф', 'Чайный набор'],

        'category_lux_name' => 'Люкс',
        'category_lux_desc' =>
            'Максимальный комфорт и пространство с отдельной зоной отдыха.',
        'category_lux_meta' => ['до 4 гостей', '70 м²', '2 комнаты'],
        'category_lux_amen' => ['Wi-Fi', 'Гостиная зона', 'Сейф', 'Мини-бар'],

        'coming_meta_title' => 'Скоро будет — Mountain Sky Hotel & Spa',
        'coming_title' => 'СКОРО БУДЕТ',
        'coming_subtitle' => 'Мы работаем над запуском этой страницы.',

        'cont_meta_title' => 'Контакты — Mountain Sky Hotel & Spa',
        'cont_title' => 'КОНТАКТЫ',

        'cont_restaurant' => 'РЕСТОРАН',
        'cont_reception' => 'РЕЦЕПЦИЯ',
        'cont_email_label' => 'НАПИСАТЬ НАМ',

        'cont_instagram' => 'Instagram',
        'cont_viber' => 'Viber',
        'cont_whatsapp' => 'WhatsApp',
        'cont_telegram' => 'Telegram',

        'cont_how_find' => 'КАК НАС НАЙТИ?',
        'cont_location' => 'РАСПОЛОЖЕНИЕ',
        'cont_address' => 'Годердзи',
        'cont_route_btn' => 'ПРОЛОЖИТЬ МАРШРУТ',

        'home_meta_title' => 'Mountain Sky Hotel',

        'home_hero_text' => 'Современный отель с неповторимым стилем,<br>расположенный в сердце Грузии',

        'home_comfort_title' => 'СОЗДАН ДЛЯ ТЕХ,<br>КТО ЦЕНИТ КОМФОРТ',
        'home_comfort_subtitle' => 'Место, где каждый может почувствовать райское удовольствие<br>и полностью перезагрузиться в окружении гор.',

        'home_benefit1' => 'Мы расположены в самом Годердзи, в 100 м от подъемника №1.',
        'home_benefit2' => 'Идеальное место для отдыха и перезагрузки.',
        'home_benefit3' => 'Забота, комфорт и атмосфера горного курорта.',

        'home_rooms_count' => '64 НОМЕРА',
        'home_rooms_title' => 'ПОСЕТИТЕ НАС',
        'home_rooms_btn' => 'ЗАБРОНИРОВАТЬ',

        'home_room_std' => 'НОМЕР СТАНДАРТ',
        'home_room_plus_s' => 'СТАНДАРТ ПЛЮС С РАЗДЕЛЬНЫМИ КРОВАТЯМИ',
        'home_room_plus_d' => 'СТАНДАРТ ПЛЮС С ДВУХСПАЛЬНОЙ КРОВАТЬЮ',
        'home_room_lux' => 'НОМЕР ЛЮКС',

        'home_spa_subtitle' => 'Погрузитесь в атмосферу отдыха и обновления.',
        'home_spa_opt1' => 'ОДИН БОЛЬШОЙ БАССЕЙН',
        'home_spa_opt2' => 'ФИНСКАЯ И РИМСКАЯ БАНИ',
        'home_spa_opt3' => 'ДЖАКУЗИ С ПОДОГРЕВОМ',
        'home_spa_btn' => 'Подробнее',

        'home_rest_pretitle' => 'СОЧЕТАНИЕ ВКУСА И АТМОСФЕРЫ',
        'home_rest_title' => 'РЕСТОРАН И БАР',
        'home_rest_text1' => 'Полезный завтрак или семейный обед — всё доступно в нашем ресторане.',
        'home_rest_text2' => 'Мы гордимся качеством сервиса, блюдами и уютной атмосферой.',
        'home_rest_btn' => 'Меню ресторана',

        'home_offers_title' => 'СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ',
        'home_offer1_title' => 'Happy Birthday',
        'home_offer1_text' => 'Скидка 10% на меню ресторана для именинников.',
        'home_offer2_title' => 'Подарочные сертификаты',
        'home_offer2_text' => 'Идеальный подарок для близких.',
        'home_offer_btn' => 'Подробнее',


        'rest_meta_title' => 'Ресторан — Mountain Sky Hotel',

        'rest_work_time' => 'ЧАСЫ РАБОТЫ С 11:00 ДО 23:00',
        'rest_title' => 'РЕСТОРАН',
        'rest_subtitle' => 'Широкий ассортимент завтраков, питательные обеды, изысканные ужины — всё это возможно в нашем ресторане на территории отеля.',

        'rest_atmo_title' => 'ВКУСНЫЕ БЛЮДА В<br>УЮТНОЙ АТМОСФЕРЕ',
        'rest_atmo_subtitle' => 'Наш ресторан — идеальное место для семейных встреч и романтических ужинов.',

        'rest_kitchen_title' => 'СОВРЕМЕННАЯ КУХНЯ',
        'rest_menu_btn' => 'МЕНЮ РЕСТОРАНА',

        'rest_buffet_title' => 'ШВЕДСКАЯ<br>ЛИНИЯ',
        'rest_buffet_text' => 'Завтраки сервируются в формате «шведского стола» и предлагают широкое разнообразие холодных и горячих закусок, блюд, десертов и напитков.',
        'rest_breakfast' => 'ЗАВТРАК',
        'rest_breakfast_time' => 'ЕЖЕДНЕВНО 8:00 — 11:00',

        'rest_bar_title' => 'БАР',
        'rest_bar_text' => 'Большой выбор алкоголя, фирменные настойки, классические и авторские коктейли — каждый найдет любимый вкус.',
        'rest_bar_menu' => 'БАРНОЕ МЕНЮ',

        'rest_spa_text' => 'Погрузитесь в безграничный релакс и отдохните от рутины в нашем SPA комплексе.',
        'rest_spa_btn' => 'ПОДРОБНЕЕ',

                // rooms.php
        'rooms_meta_title' => 'Номера – Mountain Sky Hotel',
        'rooms_title' => 'НОМЕРА',
        'rooms_subtitle' => 'Выберите подходящий тип номера и комфортно отдохните в Mountain Sky',

        'rooms_final_title' => 'ОТДЫХАЙТЕ ВМЕСТЕ С НАМИ',
        'rooms_book_btn' => 'Забронировать',
        'rooms_btn_more' => 'Подробнее',
        'rooms_btn_book' => 'Забронировать',

        // Room STD
        'room_std_name' => 'Стандарт',
        'room_std_params' => ['до 2 гостей', '30 м²', '1 комната'],
        'room_std_desc' => 'Уютный номер с панорамным видом на горы, идеален для пары. Современный интерьер и мягкое освещение.',

        // Room PLUS-S
        'room_plus_s_name' => 'Стандарт Плюс (2 односпальные)',
        'room_plus_s_params' => ['до 3 гостей', '35 м²', '1 комната'],
        'room_plus_s_desc' => 'Идеален для друзей или семьи. Светлый интерьер, две удобные кровати, просторная ванная.',

        // Room PLUS-D
        'room_plus_d_name' => 'Стандарт Плюс (двуспальная)',
        'room_plus_d_params' => ['до 3 гостей', '35 м²', '1 комната'],
        'room_plus_d_desc' => 'Номер с большой двуспальной кроватью и улучшенной отделкой. Подходит для пары или одного гостя.',

        // Room LUX
        'room_lux_name' => 'Люкс',
        'room_lux_params' => ['до 4 гостей', '70 м²', '2 комнаты'],
        'room_lux_desc' => 'Просторный двухкомнатный номер с гостиной, премиальной мебелью и расширенной ванной комнатой.',

        'spa_meta_title' => 'SPA & Relax — Mountain Sky Hotel',

        'spa_work_time' => 'ЧАСЫ РАБОТЫ С 10:00 ДО 21:00',
        'spa_title' => 'SPA & RELAX',
        'spa_subtitle' => 'Погрузитесь в безграничный релакс и отдохните от обыденной рутины в нашем SPA комплексе',
        'spa_btn_booking' => 'ЗАБРОНИРОВАТЬ',

        'spa_pool_title' => 'БАССЕЙН И ДЖАКУЗИ',
        'spa_pool_desc' => 'Нашим гостям доступны: джакузи с тёплыми гидромассажными струями и просторный бассейн с подогревом — идеальное место для плавания и расслабления.',

        'spa_sauna_title' => 'ФИНСКАЯ САУНА',
        'spa_sauna_desc' => 'Горячий воздух расслабляет мышцы, очищает кожу и дарит глубокое чувство восстановления.',

        'spa_final_rest_title' => 'РЕСТОРАН',
        'spa_final_rest_desc' => 'Полезный завтрак, семейный обед или романтический ужин — всё это возможно в нашем роскошном ресторане.',
        'spa_final_btn_more' => 'ПОДРОБНЕЕ →',



    ],

    'en' => [
        'menu_rooms'    => 'Rooms',
        'menu_spa'      => 'SPA & Relax',
        'menu_rest'     => 'Restaurant & Bar',
        'menu_about'    => 'About Us',
        'menu_contacts' => 'Contacts',
        'menu_booking'  => 'Book Now',
        'footer_book_room'  => 'BOOK A ROOM',
        'footer_reception'  => 'RECEPTION',
        'footer_restaurant' => 'RESTAURANT',
        'footer_write_us'   => 'WRITE TO US',
        'footer_where'      => 'WHERE ARE WE?',
        'footer_address'    => 'Goderdzi, Mountain Sky Hotel',
        'footer_special'    => 'SPECIAL OFFERS',
        'footer_privacy'    => 'PRIVACY POLICY',
        'footer_offer'      => 'PUBLIC OFFER AGREEMENT',
        // ABOUT PAGE — EN
        'about_meta_title' => 'About Us',

        'about_hero_pretitle' => 'MOUNTAIN HOTEL IN THE HEART OF THE RESORT',
        'about_hero_subtitle' => 'Spacious rooms, panoramic mountain views, and a SPA complex for complete relaxation.',

        'about_location_title' => 'CONVENIENT LOCATION',
        'about_location_subtitle' => 'The hotel is located just a few minutes from the ski lifts and main resort attractions.',
        'about_location_text' =>
            'You can easily reach ski slopes, hiking trails, and cozy cafés. In the evening, enjoy silence, fresh air, and a sense of comfort surrounded by mountain scenery.',
        'about_location_alt' => 'Mountain view around Mountain Sky Hotel',

        'about_features_title' => 'THE PERFECT PLACE TO RELAX',
        'about_features_subtitle' => 'Mountain Sky combines the comfort of a modern hotel with the atmosphere of peaceful mountain rest.',

        'about_feature1_alt' => 'Restaurant & Bar',
        'about_feature1_title' => 'RESTAURANT & BAR',
        'about_feature1_text' => 'Signature cuisine, local ingredients, and a curated wine list — an ideal end to your day in the mountains.',

        'about_feature2_alt' => 'SPA & Relax',
        'about_feature2_title' => 'SPA & RELAX',
        'about_feature2_text' => 'A pool, jacuzzi, saunas, and relaxation areas will help you restore energy after an active day.',

        'about_feature3_alt' => 'Parking & Charging',
        'about_feature3_title' => 'PARKING & CHARGING',
        'about_feature3_text' => 'Convenient parking near the hotel and charging stations for guests’ electric vehicles.',

        'about_feature4_alt' => 'Kids Room',
        'about_feature4_title' => 'KIDS ROOM',
        'about_feature4_text' => 'A play area for the youngest guests to make your family vacation comfortable and enjoyable.',

        'about_feature_link' => 'LEARN MORE',

        'about_activities_title' => 'ACTIVE LEISURE NEAR THE HOTEL',
        'about_activities_subtitle' => 'The resort offers plenty of activities all year round — choose what suits you most.',

        'about_act1_alt' => 'Ski Rental',
        'about_act1_title' => 'SKI RENTAL',

        'about_act2_alt' => 'Quad Bike Rental',
        'about_act2_title' => 'QUAD BIKE RENTAL',

        'about_act3_alt' => 'Mountain Hiking',
        'about_act3_title' => 'MOUNTAIN HIKING',

        'about_act4_alt' => 'Rafting',
        'about_act4_title' => 'RAFTING',

        'about_comfort_title' => 'SERVICE & COMFORT',
        'about_comfort_subtitle' => 'We pay attention to details so you feel at home from the first day of your stay.',

        'about_comfort1_alt' => 'Mountain Sky Hotel Terrace',
        'about_comfort2_alt' => 'Hotel service and cleaning',
        'about_comfort3_alt' => 'Comfortable rooms at Mountain Sky',

        'about_final_title' => 'RELAX WITH MOUNTAIN SKY',
        'about_final_subtitle' => 'Book your room now and experience the atmosphere of a true mountain hotel.',

        'booking_meta_title' => 'Booking – Mountain Sky',
        'booking_title' => 'BOOKING',
        'booking_subtitle' => 'Select dates, room category, additional services and submit your request online.',

        'booking_step1' => 'Step 1',
        'booking_step1_title' => 'Select check-in, check-out dates and guests',

        'booking_checkin' => 'Check-in date',
        'booking_checkout' => 'Check-out date',

        'booking_room' => 'Room',

        'booking_adults' => 'Adults',
        'booking_adult' => 'adult',
        'booking_adults2' => 'adults',

        'booking_children' => 'Children',
        'booking_child' => 'child',
        'booking_children0' => 'no children',
        'booking_children2' => 'children',

        'booking_add_room' => 'Add another room',

        'booking_hint' => 'Maximum of 4 adults and 4 children per room. Up to 4 rooms allowed per booking.',

        'booking_find_rooms' => 'Find rooms',

        'booking_step2' => 'Step 2',
        'booking_step2_title' => 'Choose a room category',

        'booking_step3' => 'Step 3',
        'booking_step3_title' => 'Choose additional services',
        'booking_services_hint' => 'Breakfast, SPA and parking are already included.',

        'booking_step4' => 'Step 4',
        'booking_step4_title' => 'Booking details',

        'booking_name' => 'Name',
        'booking_phone' => 'Phone',
        'booking_comment' => 'Booking comment',
        'booking_comment_placeholder' => 'For example: late arrival, baby crib, etc.',

        'booking_reserve' => 'Reserve',

        /* GENERAL */

        'booking_step1' => 'Step 1',
        'booking_step1_title' => 'Choose check-in, check-out and guests',

        'booking_checkin' => 'Check-in date',
        'booking_checkout' => 'Check-out date',

        'booking_room' => 'Room',
        'booking_adults' => 'Adults',
        'booking_adult' => 'adult',
        'booking_adults2' => 'adults',
        'booking_children' => 'Children',
        'booking_child' => 'child',
        'booking_children0' => 'no children',
        'booking_children2' => 'children',

        'booking_add_room' => 'Add another room',
        'booking_hint' =>
            'Maximum 4 adults and 4 children per room. Up to 4 rooms may be booked.',
        'booking_find_rooms' => 'Find rooms',

        'booking_step2' => 'Step 2',
        'booking_step2_title' => 'Choose a room category',
        'loading' => 'Loading...',

        'booking_step3' => 'Step 3',
        'booking_step3_title' => 'Select additional services',
        'booking_services_hint' =>
            'Breakfast, SPA and parking are already included. You may add an extra bed.',

        'booking_step4' => 'Step 4',
        'booking_step4_title' => 'Finish reservation',

        'booking_name' => 'Name *',
        'booking_phone' => 'Phone *',
        'booking_comment' => 'Reservation comment',
        'booking_comment_placeholder' => 'Example: late check-in, baby crib, etc.',
        'booking_reserve' => 'Reserve',

        /* BUTTONS */
        'booking_btn_select' => 'Select',
        'booking_btn_unavailable' => 'Unavailable',
        'booking_btn_no_rooms' => 'No rooms available',
        'btn_next' => 'Continue',

        /* ERRORS */
        'booking_err_dates' => 'Enter check-in and check-out dates.',
        'booking_err_checkout' => 'Check-out must be later than check-in.',
        'booking_err_no_rooms' => 'Add at least one room.',
        'booking_err_required' => 'Fill in required fields.',
        'booking_err_network' => 'Network error. Please check your connection.',

        /* STATUS */
        'booking_sending' => 'Sending reservation...',
        'booking_success' => 'Reservation sent! We will contact you soon.',
        'booking_fail' => 'Reservation error. Please try again.',

        /* SUMMARY (STEP 4) */

        'summary_details' => 'Reservation details',
        'summary_dates' => 'Dates',
        'summary_rooms' => 'Rooms',
        'summary_guests' => 'Guests',
        'summary_room' => 'Room',
        'summary_category' => 'Category',
        'summary_base_price' => 'Accommodation price',
        'summary_extrabed' => 'Extra bed',
        'summary_services' => 'Services',
        'summary_total' => 'Total price',
        'summary_currency_notice' => '*Payment is made in GEL',

        'service_included' => 'Included',
        'service_included_badge' => 'Included',
        'service_free' => 'Free',
        'service_added' => 'added',
        'service_not_added' => 'not added',
        'service_add' => 'Add',
        'service_remove' => 'Remove',

        /* SERVICES */

        'service_breakfast_title' => 'Breakfast',
        'service_breakfast_desc' =>
            'Buffet breakfast is included.',
        'service_breakfast_meta' => 'Per night for guests',

        'service_spa_title' => 'SPA',
        'service_spa_desc' =>
            'SPA access: pool, saunas, jacuzzi.',
        'service_spa_meta' => 'Per night for guests',

        'service_parking_title' => 'Free parking',
        'service_parking_desc' =>
            'Modern parking for all hotel guests.',
        'service_parking_meta' => 'For all guests',

        'service_extrabed_title' => 'Extra bed',
        'service_extrabed_desc' =>
            'Installation of an additional bed in the room.',
        'service_extrabed_meta' => 'Per selected room',
        'service_extrabed_price' => '130 GEL',

        /* ROOM CATEGORIES */

        'category_std_name' => 'Standard',
        'category_std_desc' => 'A cozy room in Mountain Sky signature style.',
        'category_std_meta' => ['up to 2 guests', '30 m²', '1 room'],
        'category_std_amen' => ['Wi-Fi', 'TV', 'Safe', 'Fridge'],

        'category_plus1_name' => 'Standard Plus (twin beds)',
        'category_plus1_desc' => 'Comfortable room with two separate beds.',
        'category_plus1_meta' => ['up to 3 guests', '35 m²', '1 room'],
        'category_plus1_amen' => ['Wi-Fi', 'TV', 'Safe', 'Work desk'],

        'category_plusd_name' => 'Standard Plus (double bed)',
        'category_plusd_desc' => 'Spacious room with a large double bed.',
        'category_plusd_meta' => ['up to 3 guests', '35 m²', '1 room'],
        'category_plusd_amen' => ['Wi-Fi', 'TV', 'Safe', 'Tea set'],

        'category_lux_name' => 'Suite',
        'category_lux_desc' =>
            'Maximum comfort: increased space and a separate living area.',
        'category_lux_meta' => ['up to 4 guests', '70 m²', '2 rooms'],
        'category_lux_amen' => ['Wi-Fi', 'Living area', 'Safe', 'Mini-bar'],

        'coming_meta_title' => 'Coming Soon — Mountain Sky Hotel & Spa',
        'coming_title' => 'COMING SOON',
        'coming_subtitle' => 'We are working on launching this page.',

        'cont_meta_title' => 'Contacts — Mountain Sky Hotel & Spa',
        'cont_title' => 'CONTACTS',

        'cont_restaurant' => 'RESTAURANT',
        'cont_reception' => 'RECEPTION',
        'cont_email_label' => 'WRITE TO US',

        'cont_instagram' => 'Instagram',
        'cont_viber' => 'Viber',
        'cont_whatsapp' => 'WhatsApp',
        'cont_telegram' => 'Telegram',

        'cont_how_find' => 'HOW TO FIND US?',
        'cont_location' => 'LOCATION',
        'cont_address' => 'Goderdzi',
        'cont_route_btn' => 'GET DIRECTIONS',

        'home_meta_title' => 'Mountain Sky Hotel',

        'home_hero_text' => 'A modern hotel with a unique style,<br>located in the heart of Georgia',

        'home_comfort_title' => 'CREATED FOR THOSE<br>WHO VALUE COMFORT',
        'home_comfort_subtitle' => 'A place where you feel paradise pleasure<br>and fully recharge among the mountains.',

        'home_benefit1' => 'Located in Goderdzi, just 100 m from Lift #1.',
        'home_benefit2' => 'The perfect place to relax and recharge.',
        'home_benefit3' => 'Care, comfort and atmosphere of a mountain resort.',

        'home_rooms_count' => '64 ROOMS',
        'home_rooms_title' => 'VISIT US',
        'home_rooms_btn' => 'BOOK NOW',

        'home_room_std' => 'STANDARD ROOM',
        'home_room_plus_s' => 'STANDARD PLUS (TWIN BEDS)',
        'home_room_plus_d' => 'STANDARD PLUS (DOUBLE BED)',
        'home_room_lux' => 'LUXURY ROOM',

        'home_spa_subtitle' => 'Immerse yourself in relaxation and renewal.',
        'home_spa_opt1' => 'LARGE HEATED POOL',
        'home_spa_opt2' => 'FINNISH & ROMAN SAUNAS',
        'home_spa_opt3' => 'HOT JACUZZI',
        'home_spa_btn' => 'Learn more',

        'home_rest_pretitle' => 'FINE TASTE & ATMOSPHERE',
        'home_rest_title' => 'RESTAURANT & BAR',
        'home_rest_text1' => 'Healthy breakfast, family lunch or romantic dinner — everything is possible.',
        'home_rest_text2' => 'We pride ourselves on service, cuisine and atmosphere.',
        'home_rest_btn' => 'Restaurant menu',

        'home_offers_title' => 'SPECIAL OFFERS',
        'home_offer1_title' => 'Happy Birthday',
        'home_offer1_text' => '10% discount on restaurant menu for birthdays.',
        'home_offer2_title' => 'Gift Certificates',
        'home_offer2_text' => 'A perfect gift idea!',
        'home_offer_btn' => 'Learn more',


        'rest_meta_title' => 'Restaurant — Mountain Sky Hotel',

        'rest_work_time' => 'OPENING HOURS 11:00 — 23:00',
        'rest_title' => 'RESTAURANT',
        'rest_subtitle' => 'A wide variety of breakfasts, wholesome lunches and elegant dinners — all available in our hotel restaurant.',

        'rest_atmo_title' => 'DELICIOUS DISHES IN<br>A COZY ATMOSPHERE',
        'rest_atmo_subtitle' => 'Our restaurant is a perfect place for family gatherings and romantic dinners.',

        'rest_kitchen_title' => 'MODERN CUISINE',
        'rest_menu_btn' => 'RESTAURANT MENU',

        'rest_buffet_title' => 'BUFFET LINE',
        'rest_buffet_text' => 'Breakfast is served buffet-style, offering a wide selection of cold and hot dishes, diet options, desserts and drinks.',
        'rest_breakfast' => 'BREAKFAST',
        'rest_breakfast_time' => 'DAILY 8:00 — 11:00',

        'rest_bar_title' => 'BAR',
        'rest_bar_text' => 'A wide selection of alcohol, signature infusions, classic and author cocktails — everyone will find their favorite taste.',
        'rest_bar_menu' => 'BAR MENU',

        'rest_spa_text' => 'Immerse yourself in deep relaxation and unwind in our SPA complex.',
        'rest_spa_btn' => 'LEARN MORE',

        'rooms_meta_title' => 'Rooms – Mountain Sky Hotel',
        'rooms_title' => 'ROOMS',
        'rooms_subtitle' => 'Choose the perfect room type and enjoy a comfortable stay at Mountain Sky',

        'rooms_final_title' => 'RELAX WITH US',
        'rooms_book_btn' => 'Book Now',
        'rooms_btn_more' => 'Learn More',
        'rooms_btn_book' => 'Book Now',

        'room_std_name' => 'Standard',
        'room_std_params' => ['up to 2 guests', '30 m²', '1 room'],
        'room_std_desc' => 'A cozy room with panoramic mountain views. Ideal for couples, modern interior and warm lighting.',

        'room_plus_s_name' => 'Standard Plus (2 single beds)',
        'room_plus_s_params' => ['up to 3 guests', '35 m²', '1 room'],
        'room_plus_s_desc' => 'Perfect for friends or family. Bright interior, two separate beds, spacious bathroom.',

        'room_plus_d_name' => 'Standard Plus (double bed)',
        'room_plus_d_params' => ['up to 3 guests', '35 m²', '1 room'],
        'room_plus_d_desc' => 'A stylish room with a large double bed and upgraded interior. Ideal for couples.',

        'room_lux_name' => 'Luxury Suite',
        'room_lux_params' => ['up to 4 guests', '70 m²', '2 rooms'],
        'room_lux_desc' => 'A spacious two-room suite with premium furniture, living area and panoramic views.',

        'spa_meta_title' => 'SPA & Relax — Mountain Sky Hotel',

        'spa_work_time' => 'OPEN FROM 10:00 TO 21:00',
        'spa_title' => 'SPA & RELAX',
        'spa_subtitle' => 'Immerse yourself in complete relaxation and unwind from daily routine in our SPA complex.',
        'spa_btn_booking' => 'BOOK NOW',

        'spa_pool_title' => 'POOL & JACUZZI',
        'spa_pool_desc' => 'Guests can enjoy a hot jacuzzi with hydromassage streams and a heated spacious pool — perfect for swimming or relaxing.',

        'spa_sauna_title' => 'FINNISH SAUNA',
        'spa_sauna_desc' => 'Hot dry air relaxes muscles, cleanses the skin, and provides deep recovery.',

        'spa_final_rest_title' => 'RESTAURANT',
        'spa_final_rest_desc' => 'Healthy breakfast, family lunch, or romantic dinner — everything is possible in our luxurious restaurant.',
        'spa_final_btn_more' => 'LEARN MORE →',


    ],

    'ge' => [
        'menu_rooms'    => 'ოთახები',
        'menu_spa'      => 'SPA & დასვენება',
        'menu_rest'     => 'რესტორანი და ბარი',
        'menu_about'    => 'ჩვენ შესახებ',
        'menu_contacts' => 'კონტაქტი',
        'menu_booking'  => 'დაჯავშნა',
        'footer_book_room'  => 'ოთახის დაჯავშნა',
        'footer_reception'  => 'რეცეფცია',
        'footer_restaurant' => 'რესტორანი',
        'footer_write_us'   => 'მოგვწერეთ',
        'footer_where'      => 'სად ვართ?',
        'footer_address'    => 'გოდერძი Mountain Sky Hotel',
        'footer_special'    => 'სპეციალური შეთავაზებები',
        'footer_privacy'    => 'კონფიდენციალურობის პოლიტიკა',
        'footer_offer'      => 'საჯარო შეთავაზების ხელშეკრულება',
        // ABOUT PAGE — GE
        'about_meta_title' => 'ჩვენს შესახებ',

        'about_hero_pretitle' => 'სადღეგრძელო სასტუმრო კურორტის გულში',
        'about_hero_subtitle' => '广阔ი ოთახები, მთების პანორამული ხედები და SPA კომპლექსი სრული განტვირთვისთვის.',

        'about_location_title' => 'მოსახერხებელი მდებარეობა',
        'about_location_subtitle' => 'სასტუმრო მდებარეობს საკონკურსო სავარძლებიდან და კურორტის მთავარი ატრაქციონებიდან რამდენიმე წუთის სავალზე.',
        'about_location_text' =>
            'თქვენ მარტივად შეძლებთ მიაღწიოთ საბაგირო გზებს, სასეირნო მარშრუტებსა და მყუდრო კაფეებს. საღამოს კი გელოდებათ სიჩუმე, სუფთა ჰაერი და მთის პეიზაჟების ფონზე სიმყუდროვე.',
        'about_location_alt' => 'Mountain Sky Hotel-ის ირგვლივ მთების ხედები',

        'about_features_title' => 'იდეალური ადგილი დასვენებისთვის',
        'about_features_subtitle' => 'Mountain Sky აერთიანებს თანამედროვე სასტუმროს комფორტს და მშვიდი მთის დასვენების ატმოსფეროს.',

        'about_feature1_alt' => 'რესტორანი და ბარი',
        'about_feature1_title' => 'რესტორანი და ბარი',
        'about_feature1_text' => 'გურმანული блюда, ადგილობრივი პროდუქტი და ღვინის ბარათი — იდეალური დასასვენებელი დღე მთებში.',

        'about_feature2_alt' => 'SPA & Relax',
        'about_feature2_title' => 'SPA & Relax',
        'about_feature2_text' => 'აუზი, ჯაკუზი, საუნები და რელაქსაციის ზონები დაგეხმარებათ ძალების აღდგენაში აქტიური დღის შემდეგ.',

        'about_feature3_alt' => 'ს парковკა და დამუხტვა',
        'about_feature3_title' => 'პარკინგი და დამუხტვა',
        'about_feature3_text' => 'მოსახერხებელი პარკინგი სასტუმროში და ელექტრომობილების დამუხტვის სადგური.',

        'about_feature4_alt' => 'ბავშვთა ოთახი',
        'about_feature4_title' => 'ბავშვთა ოთახი',
        'about_feature4_text' => 'სათამაშო ზონა ყველაზე პატარა სტუმრებისთვის, რათა დასვენება კომფორტული იყოს მთელი ოჯახისთვის.',

        'about_feature_link' => 'დეტალურად',

        'about_activities_title' => 'აქტიური დასვენება სასტუმროს ახლოს',
        'about_activities_subtitle' => 'ზამთარსა და ზაფხულში კურორტი უამრავ აქტივობას გთავაზობთ — აირჩიეთ ის, რაც თქვენ გხიბლავთ.',

        'about_act1_alt' => 'თხილამურების ქირაობა',
        'about_act1_title' => 'თხილამურების ქირაობა',

        'about_act2_alt' => 'კვადროციკლების ქირაობა',
        'about_act2_title' => 'კვადროციკლების ქირაობა',

        'about_act3_alt' => 'ლაშქრობები მთებში',
        'about_act3_title' => 'ლაშქრობა მთებში',

        'about_act4_alt' => 'რაფტინგი',
        'about_act4_title' => 'რაფტინგი',

        'about_comfort_title' => 'სერვისი და კომფორტი',
        'about_comfort_subtitle' => 'ჩვენ ვაქცევთ ყურადღებას დეტალებს, რათა თავი იგრძნოთ სახლში პირველივე დღიდან.',

        'about_comfort1_alt' => 'Mountain Sky Terrace',
        'about_comfort2_alt' => 'სერვისი და დასუფთავება',
        'about_comfort3_alt' => 'კომფორტული ნომრები Mountain Sky-ში',

        'about_final_title' => 'დაისვენეთ Mountain Sky-თან ერთად',
        'about_final_subtitle' => 'დაჯავშნეთ ნომერი ახლა და აღმოაჩინეთ ნამდვილი მთის სასტუმროს ატმოსფერო.',

        'booking_meta_title' => 'დაჯავშნა – Mountain Sky',
        'booking_title' => 'დაჯავშნა',
        'booking_subtitle' => 'აირჩიეთ თარიღები, ნომრის კატეგორია, დამატებითი მომსახურებები და გააგზავნეთ შეკვეთა ონლაინ.',

        'booking_step1' => 'ნაბიჯი 1',
        'booking_step1_title' => 'აირჩიეთ ჩასვლის, გასვლის თარიღები და სტუმრები',

        'booking_checkin' => 'ჩასვლის თარიღი',
        'booking_checkout' => 'გასვლის თარიღი',

        'booking_room' => 'ნომერი',

        'booking_adults' => 'ზრდასრულები',
        'booking_adult' => 'ზრდასრული',
        'booking_adults2' => 'ზრდასრული',

        'booking_children' => 'ბავშვები',
        'booking_child' => 'ბავშვი',
        'booking_children0' => 'ბავშვების გარეშე',
        'booking_children2' => 'ბავშვი',

        'booking_add_room' => 'დაამატეთ კიდევ ერთი ნომერი',

        'booking_hint' => 'მაქსიმუმ 4 ზრდასრული და 4 ბავშვი თითოეულ ნომერზე. ჯამში შესაძლებელია 4 ნომრის დაჯავშნა.',

        'booking_find_rooms' => 'ნომრების მოძებნა',

        'booking_step2' => 'ნაბიჯი 2',
        'booking_step2_title' => 'აირჩიეთ ნომრის კატეგორია',

        'booking_step3' => 'ნაბიჯი 3',
        'booking_step3_title' => 'დამატებითი მომსახურებების არჩევა',
        'booking_services_hint' => 'საუზმე, SPA და პარკინგი უკვე შედის ფასში.',

        'booking_step4' => 'ნაბიჯი 4',
        'booking_step4_title' => 'დაჯავშნის დეტალები',

        'booking_name' => 'სახელი',
        'booking_phone' => 'ტელეფონი',
        'booking_comment' => 'კომენტარი',
        'booking_comment_placeholder' => 'მაგალითად: გვიანი ჩასვლა, საბავშვო საწოლი და ა.შ.',

        'booking_reserve' => 'დაჯავშნა',

        /* GENERAL */

        'booking_step1' => 'ნაბიჯი 1',
        'booking_step1_title' => 'აირჩიეთ ჩასვლის და გასვლის თარიღები და სტუმრები',

        'booking_checkin' => 'ჩასვლის თარიღი',
        'booking_checkout' => 'გასვლის თარიღი',

        'booking_room' => 'ნომერი',
        'booking_adults' => 'ზრდასრული',
        'booking_adult' => 'ზრდასრული',
        'booking_adults2' => 'ზრდასრული',
        'booking_children' => ' ბავშვები',
        'booking_child' => 'ბავშვი',
        'booking_children0' => 'ბავშვების გარეშე',
        'booking_children2' => 'ბავშვი',

        'booking_add_room' => 'სხვა ნომრის დამატება',
        'booking_hint' =>
            'მაქსიმუმ 4 ზრდასრული და 4 ბავშვი თითოეულ ნომერზე. ჯამში შესაძლებელია 4 ნომრის დაჯავშნა.',
        'booking_find_rooms' => 'ნომრების ძიება',

        'booking_step2' => 'ნაბიჯი 2',
        'booking_step2_title' => 'აირჩიეთ ნომრის კატეგორია',
        'loading' => 'იტვირთება...',

        'booking_step3' => 'ნაბიჯი 3',
        'booking_step3_title' => 'დამატებითი სერვისები',
        'booking_services_hint' =>
            'დასაუზმებელი, SPA და პარკინგი უკვე შედის. შეგიძლიათ დაამატოთ დამატებითი საწოლი.',

        'booking_step4' => 'ნაბიჯი 4',
        'booking_step4_title' => 'დაჯავშნის დასრულება',

        'booking_name' => 'სახელი *',
        'booking_phone' => 'ტელეფონი *',
        'booking_comment' => 'კომენტარი',
        'booking_comment_placeholder' => 'მაგალითად: გვიანი ჩასვლა, საბავშვო საწოლი და ა.შ.',
        'booking_reserve' => 'დაჯავშნა',

        /* BUTTONS */

        'booking_btn_select' => 'არჩევა',
        'booking_btn_unavailable' => 'ხელმიუწვდომელია',
        'booking_btn_no_rooms' => 'ნომრები არ არის',
        'btn_next' => 'გაგრძელება',

        /* ERRORS */

        'booking_err_dates' => 'მიუთითეთ თარიღები.',
        'booking_err_checkout' => 'გასვლა უნდა იყოს უფრო გვიან.',
        'booking_err_no_rooms' => 'დაამატეთ მინიმუმ ერთი ნომერი.',
        'booking_err_required' => 'შეავსეთ აუცილებელი ველები.',
        'booking_err_network' => 'ქსელის შეცდომა.',

        /* STATUS */

        'booking_sending' => 'იგზავნება...',
        'booking_success' => 'წარმატებით გაიგზავნა! მალე დაგიკავშირდებით.',
        'booking_fail' => 'შეცდომა. სცადეთ თავიდან.',

        /* SUMMARY */

        'summary_details' => 'დეტალები',
        'summary_dates' => 'თარიღები',
        'summary_rooms' => 'ნომრები',
        'summary_guests' => 'სტუმრები',
        'summary_room' => 'ნომერი',
        'summary_category' => 'კატეგორია',
        'summary_base_price' => 'ფასი',
        'summary_extrabed' => 'დამატებითი საწოლი',
        'summary_services' => 'სერვისები',
        'summary_total' => 'სრული ფასი',
        'summary_currency_notice' => '*გადახდა ხორციელდება ლარში',

        'service_included' => 'შედის',
        'service_included_badge' => 'შედის',
        'service_free' => 'უფასო',
        'service_added' => 'დამატებულია',
        'service_not_added' => 'არ არის დამატებული',
        'service_add' => 'დამატება',
        'service_remove' => 'ამოღება',

        /* SERVICES */

        'service_breakfast_title' => 'საუზმე',
        'service_breakfast_desc' =>
            'შედის “შვედურ მაგიდაში” საუზმე.',
        'service_breakfast_meta' => 'ღამე თითო სტუმარზე',

        'service_spa_title' => 'SPA',
        'service_spa_desc' =>
            'ბასეინი, საუნები და ჯაკუზი.',
        'service_spa_meta' => 'ღამე თითო სტუმარზე',

        'service_parking_title' => 'პარკინგი',
        'service_parking_desc' =>
            'თანამედროვე პარკინგი სტუმრებისთვის.',
        'service_parking_meta' => 'ყველა სტუმრისთვის',

        'service_extrabed_title' => 'დამატებითი საწოლი',
        'service_extrabed_desc' =>
            'დამატებითი საწოლის დაყენება.',
        'service_extrabed_meta' => 'თითოეულ ნომერზე',
        'service_extrabed_price' => '130 GEL',

        /* ROOM CATEGORIES */

        'category_std_name' => 'სტანდარტი',
        'category_std_desc' => 'კომფორტული ნომერი “Mountain Sky”-ის სტილში.',
        'category_std_meta' => ['2 სტუმრამდე', '30 მ²', '1 ოთახი'],
        'category_std_amen' => ['Wi-Fi', 'ტელევიზორი', 'სეიფი', 'მაცივარი'],

        'category_plus1_name' => 'სტანდარტ პლუს ორმა საწოლით',
        'category_plus1_desc' => 'ოთახი ორი განცალკევებული საწოლით.',
        'category_plus1_meta' => ['3 სტუმრამდე', '35 მ²', '1 ოთახი'],
        'category_plus1_amen' => ['Wi-Fi', 'ტელევიზორი', 'სეიფი', 'სამუშაო მაგიდა'],

        'category_plusd_name' => 'სტანდარტ პლუს ორმაგი საწოლით',
        'category_plusd_desc' => 'უფრო ფართო ნომერი ორმაგი საწოლით.',
        'category_plusd_meta' => ['3 სტუმრამდე', '35 მ²', '1 ოთახი'],
        'category_plusd_amen' => ['Wi-Fi', 'ტელევიზორი', 'სეიფი', 'ჩაის ნაკრები'],

        'category_lux_name' => 'ლუქსი',
        'category_lux_desc' =>
            'მაქსიმალური კომფორტი და ცალკე მისაღები.',
        'category_lux_meta' => ['4 სტუმრამდე', '70 მ²', '2 ოთახი'],
        'category_lux_amen' => ['Wi-Fi', 'მისაღები', 'სეიფი', 'მინი ბარი'],

        'coming_meta_title' => 'მალე იქნება — Mountain Sky Hotel & Spa',
        'coming_title' => 'მალე იქნება',
        'coming_subtitle' => 'ჩვენ ვმუშაობთ ამ გვერდის გახსნაზე.',

        'cont_meta_title' => 'კონტაქტი — Mountain Sky Hotel & Spa',
        'cont_title' => 'კონტაქტი',

        'cont_restaurant' => 'რესტორანი',
        'cont_reception' => 'რეცეფცია',
        'cont_email_label' => 'მოგვწერეთ',

        'cont_instagram' => 'ინსტაგრამი',
        'cont_viber' => 'ვაიბერი',
        'cont_whatsapp' => 'ვოტსაპი',
        'cont_telegram' => 'ტელეგრამი',

        'cont_how_find' => 'როგორ გვიპოვოთ?',
        'cont_location' => 'მდებარეობა',
        'cont_address' => 'გოდერძი',
        'cont_route_btn' => 'მარშრუტის აგება',

        'home_meta_title' => 'Mountain Sky Hotel',

        'home_hero_text' => 'თანამედროვე სასტუმრო უნიკალური სტილით,<br>გულის შუაგულში — საქართველოში',

        'home_comfort_title' => 'შექმნილია მათთვის,<br>ვინც კომფორტს აფასებს',
        'home_comfort_subtitle' => 'ადგილი, სადაც თითოეული სტუმარი განიტვირთება<br>და თავს იგრძნობს მთების სამოთხეში.',

        'home_benefit1' => 'ვიმყოფებით გოდერძიში, №1 საბაგიროდან 100 მეტრში.',
        'home_benefit2' => 'იდეალური სივრცე დასვენებისა და ენერგიის აღდგენისთვის.',
        'home_benefit3' => 'ზრუნვა, კომფორტი და მთის კურორტის ატმოსფერო.',

        'home_rooms_count' => '64 ნომერი',
        'home_rooms_title' => 'ეწვიეთ ჩვენ',
        'home_rooms_btn' => 'დაჯავშნა',

        'home_room_std' => 'სტანდარტული ნომერი',
        'home_room_plus_s' => 'სტანდარტ პლუს — ორ ცალკე საწოლით',
        'home_room_plus_d' => 'სტანდარტ პლუს — ორადგილიანი საწოლით',
        'home_room_lux' => 'ლუქსი',

        'home_spa_subtitle' => 'განიტვირთეთ და დატკბით სრულყოფილი დასვენებით.',
        'home_spa_opt1' => 'ერთი დიდი აუზი',
        'home_spa_opt2' => 'ფინური და რომაული საუნები',
        'home_spa_opt3' => 'დაცხობილი ჯაკუზი',
        'home_spa_btn' => 'ვრცლად',

        'home_rest_pretitle' => 'გემოსა და ესთეტიკის შერწყმა',
        'home_rest_title' => 'რესტორანი და ბარი',
        'home_rest_text1' => 'ჯანსაღი საუზმე, ოჯახური სადილი ან რომანტიკული ვახშამი — ყველაფერი შესაძლებლია.',
        'home_rest_text2' => 'ვამაყობთ მაღალი ხარისხის მომსახურებით და გასინჯული კერძებით.',
        'home_rest_btn' => 'რეს­ტორანის მენიუ',

        'home_offers_title' => 'სპეციალური შეთავაზებები',
        'home_offer1_title' => 'Happy Birthday',
        'home_offer1_text' => '10% ფასდაკლება რესტორნის მენიუზე იუბილარებისთვის.',
        'home_offer2_title' => 'საჩუქრები',
        'home_offer2_text' => 'იდეა იდეალური საჩუქრისთვის!',
        'home_offer_btn' => 'ვრცლად',

        'rest_meta_title' => 'რესტორანი — Mountain Sky Hotel',

        'rest_work_time' => 'სამუშაო საათები 11:00 — 23:00',
        'rest_title' => 'რესტორანი',
        'rest_subtitle' => 'დიდი არჩევანი საუზმეების, არომატული სადილების და ელეგანტური ვახშმების — ყველაფერი ჩვენი სასტუმროს რესტორანში.',

        'rest_atmo_title' => 'გემრიელი блюда<br>კომფორტულ გარემოში',
        'rest_atmo_subtitle' => 'ჩვენი რესტორანი იდეალური ადგილია ოჯახური შეხვედრებისთვის და რომანტიკული ვახშმებისთვის.',

        'rest_kitchen_title' => 'თანამედროვე кухня',
        'rest_menu_btn' => 'რესტორნის მენიუ',

        'rest_buffet_title' => 'შვედური<br>ხაზი',
        'rest_buffet_text' => 'საუზმეები შვედური ტიპისაა — დიდი არჩევანი ცივი და ცხელი კერძების, დესერტებისა და სასმელების.',
        'rest_breakfast' => 'საუზმე',
        'rest_breakfast_time' => 'ყოველდღე 8:00 — 11:00',

        'rest_bar_title' => 'ბარი',
        'rest_bar_text' => 'ალკოჰოლის ფართო არჩევანი, ხელნაკეთი ნაყენი და კოქტეილები — ყველას იპოვის საკუთარ გემოს.',
        'rest_bar_menu' => 'ბარის მენიუ',

        'rest_spa_text' => 'მიეცით თავს განტვირთვა და დაისვენეთ ჩვენი SPA კომპლექსში.',
        'rest_spa_btn' => 'ვრცლად',


        'rooms_meta_title' => 'ნომრები – Mountain Sky Hotel',
        'rooms_title' => 'ნომრები',
        'rooms_subtitle' => 'აირჩიეთ თქვენთვის იდეალური ნომერი და დატკბით კომფორტული დასვენებით Mountain Sky-ში',

        'rooms_final_title' => 'დაისვენეთ ჩვენთან ერთად',
        'rooms_book_btn' => 'დაჯავშნა',
        'rooms_btn_more' => 'ვრცლად',
        'rooms_btn_book' => 'დაჯავშნა',

        'room_std_name' => 'სტანდარტი',
        'room_std_params' => ['მდე 2 სტუმარი', '30 მ²', '1 ოთახი'],
        'room_std_desc' => 'მყუდრო ნომერი მთების ხედით. იდეალურია წყვილებისთვის.',

        'room_plus_s_name' => 'სტანდარტ პლუს (2 საწოლი)',
        'room_plus_s_params' => ['მდე 3 სტუმარი', '35 მ²', '1 ოთახი'],
        'room_plus_s_desc' => 'იდეალურია მეგობრებისთვის ან ოჯახისთვის. ორი საწოლი და ნათელი ინტერიერი.',

        'room_plus_d_name' => 'სტანდარტ პლუს (ორმაგი საწოლი)',
        'room_plus_d_params' => ['მდე 3 სტუმარი', '35 მ²', '1 ოთახი'],
        'room_plus_d_desc' => 'სტილური ნომერი ორმაგი საწოლით და თანამედროვე ინტერიერით.',

        'room_lux_name' => 'ლუქსი',
        'room_lux_params' => ['მდე 4 სტუმარი', '70 მ²', '2 ოთახი'],
        'room_lux_desc' => ' просторный двухкомнатный люкс with premium comfort და საოცარი ხედებით.',

        'spa_meta_title' => 'SPA & Relax — Mountain Sky Hotel',

        'spa_work_time' => 'სამუშაო დრო: 10:00 - 21:00',
        'spa_title' => 'SPA & RELAX',
        'spa_subtitle' => 'მოქსოვით სითბოსა და სიმშვიდეში — დაისვენეთ და სრულად განიტვირთეთ ჩვენს SPA კომპლექსში.',
        'spa_btn_booking' => 'დაჯავშნა',

        'spa_pool_title' => 'აუზი და ჯაკუზი',
        'spa_pool_desc' => 'სტუმრებს ხელმისაწვდომია ცხელი ჯაკუზი ჰიდრომასაჟით და გამათბობელი დიდი აუზი — იდეალური ადგილია დასვენებისა და ცურვისთვის.',

        'spa_sauna_title' => 'ფინური საუნა',
        'spa_sauna_desc' => 'ცხელი ჰავა ამშვიდებს კუნთებს, ასუფთავებს კანს და უზრუნველყოფს ღრმა განტვირთვას.',

        'spa_final_rest_title' => 'რესტორანი',
        'spa_final_rest_desc' => 'ჯანმრთელი საუზმე, ოჯახური ლანჩი ან რომანტიკული ვახშამი — ყველაფერი შესაძლებელია ჩვენს ელეგანტურ რესტორანში.',
        'spa_final_btn_more' => 'ვრცლად →',



    ]
];

$lang = $texts[$currentLang] ?? $texts['ru'];
