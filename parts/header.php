<?php

define(SITE_TEMPLATE_PATH, '');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Страница</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/css/styles.css" />
        <script src="/assets/js/application.js"></script>
    </head>
    <body>
        <div id="application" class="template">
            <header class="template-header">
                <div class="template-header-background"></div>
                <div class="template-header-container template-delimiter">
                    <div class="template-header-container-wrapper template-delimiter-wrapper">
                        <div class="template-header--left">
                            <div class="template-header-sidebar">
                                <div class="template-header-sidebar-button">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.7C0 0.313401 0.313401 0 0.7 0H15.3C15.6866 0 16 0.313401 16 0.7C16 1.0866 15.6866 1.4 15.3 1.4H0.7C0.3134 1.4 0 1.0866 0 0.7ZM0 6.69902C0 6.31242 0.313401 5.99902 0.7 5.99902H7.3C7.6866 5.99902 8 6.31242 8 6.69902C8 7.08562 7.6866 7.39902 7.3 7.39902H0.7C0.313401 7.39902 0 7.08562 0 6.69902ZM0.7 11.998C0.313401 11.998 0 12.3114 0 12.698C0 13.0846 0.313401 13.398 0.7 13.398H11.3C11.6866 13.398 12 13.0846 12 12.698C12 12.3114 11.6866 11.998 11.3 11.998H0.7Z" fill="#282D46"/>
                                    </svg>
                                </div>
                            </div>
                            <a href="#" class="template-header-logotype">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/logotype.svg" alt="Логотип" />
                            </a>
                            <div class="template-header-menu">
                                <div class="template-header-menu-items">
                                    <div class="template-header-menu-item">
                                        <a href="#" class="template-header-menu-item-wrapper">Каталог</a>
                                    </div>
                                    <div class="template-header-menu-item">
                                        <a href="#" class="template-header-menu-item-wrapper">Акции</a>
                                    </div>
                                    <div class="template-header-menu-item">
                                        <a href="#" class="template-header-menu-item-wrapper">Обучение</a>
                                    </div>
                                    <div class="template-header-menu-item">
                                        <a href="#" class="template-header-menu-item-wrapper">Сертификаты</a>
                                    </div>
                                    <div class="template-header-menu-item">
                                        <a href="#" class="template-header-menu-item-wrapper">Новости</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="template-header--right">
                            <div class="template-header-phone">
                                <div class="template-header-phone-icon">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/phone.svg" alt="Телефон" />
                                </div>
                                <a href="tel:+74956440008" class="template-header-phone-text">+7 495 644-00-08</a>
                            </div>
                            <div class="template-header-profile">
                                <div class="template-header-profile-icon">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/profile.svg" alt="Профиль" />
                                </div>
                                <div class="template-header-profile-text">ВЯ</div>
                            </div>
                            <div class="template-header-basket">
                                <a href="#" class="template-header-basket-icon">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/basket.svg" alt="Профиль" />
                                    <span class="template-header-basket-icon-counter">
                                        <span class="template-header-basket-icon-counter-text">3</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="template-content">
