            </div>
            <footer class="template-footer">
                <div class="template-footer-content template-delimiter">
                    <div class="template-footer-content-wrapper template-delimiter-wrapper">
                        <div class="template-footer-line"></div>
                        <div class="template-footer-top">
                            <div class="template-footer-information">
                                <div class="template-footer-information-items">
                                    <div class="template-footer-information-item">
                                        <a href="tel:+74956440008" class="template-footer-information-item-wrapper">
                                            <span class="template-footer-information-item-icon">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/phone.2.svg" alt="Телефон" />
                                            </span>
                                            <span class="template-footer-information-item-text">+7 495 644-00-08</span>
                                        </a>
                                    </div>
                                    <div class="template-footer-information-item">
                                        <a href="mailto:info@ersta.ru" class="template-footer-information-item-wrapper">
                                            <span class="template-footer-information-item-icon">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/email.svg" alt="Эл. почта" />
                                            </span>
                                            <span class="template-footer-information-item-text">info@ersta.ru</span>
                                        </a>
                                    </div>
                                    <div class="template-footer-information-item">
                                        <a href="#" class="template-footer-information-item-wrapper">
                                            <span class="template-footer-information-item-icon">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/instagram.svg" alt="Instagram" />
                                            </span>
                                            <span class="template-footer-information-item-text">@ersta.ru</span>
                                        </a>
                                    </div>
                                    <div class="template-footer-information-item">
                                        <a href="#" class="template-footer-information-item-wrapper">
                                            <span class="template-footer-information-item-icon">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/youtube.svg" alt="YouTube" />
                                            </span>
                                            <span class="template-footer-information-item-text">YouTube</span>
                                        </a>
                                    </div>
                                    <div class="template-footer-information-item">
                                        <span class="template-footer-information-item-wrapper">
                                            <span class="template-footer-information-item-text">Москва, 1-й Магистральный тупик, 5А. БЦ Магистраль Плаза</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="template-footer-menu">
                                <div class="template-footer-menu-items">
                                    <div class="template-footer-menu-item">
                                        <a href="#" class="template-footer-menu-item-wrapper">О компании</a>
                                    </div>
                                    <div class="template-footer-menu-item">
                                        <a href="#" class="template-footer-menu-item-wrapper">Вакансии</a>
                                    </div>
                                    <div class="template-footer-menu-item">
                                        <a href="#" class="template-footer-menu-item-wrapper">Контакты и обратная связь</a>
                                    </div>
                                    <div class="template-footer-menu-item">
                                        <a href="#" class="template-footer-menu-item-wrapper">Доставка и оплата</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="template-footer-partners">
                            <div class="template-footer-partners-items">
                                <?php for ($index = 0; $index < 11; $index++) { ?>
                                    <div class="template-footer-partners-item">
                                        <div class="template-footer-partners-item-wrapper">
                                            <img src="<?= SITE_TEMPLATE_PATH.'/assets/resources/pictures/partners/partner.'.($index + 1).'.png' ?>" alt="Партнёр" />
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="template-footer-policies">
                            <div class="template-footer-policies-items">
                                <div class="template-footer-policies-item">
                                    <span class="template-footer-policies-item-wrapper">© Ersta 2020</span>
                                </div>
                                <div class="template-footer-policies-item">
                                    <a href="#" class="template-footer-policies-item-wrapper">Политика конфиденциальности</a>
                                </div>
                                <div class="template-footer-policies-item">
                                    <a href="#" class="template-footer-policies-item-wrapper">Политика использования файлов cookie</a>
                                </div>
                                <div class="template-footer-policies-item">
                                    <a href="#" class="template-footer-policies-item-wrapper">Политика использования сайта</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>