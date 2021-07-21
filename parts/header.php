<?php

define(SITE_TEMPLATE_PATH, '');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Страница</title>
        <link rel="stylesheet" href="/assets/css/styles.css" />
        <script async="async" src="/assets/js/application.js"></script>
    </head>
    <body>
        <div id="application" class="template">
            <header class="template-header">
                <div class="template-header-background"></div>
                <div class="template-header-container template-delimiter">
                    <div class="template-header--left">
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
            </header>
            <div class="template-content">
