<?php include(__DIR__.'/../parts/header.php') ?>
<div class="page template-delimiter" data-page="contacts">
    <div class="template-delimiter-wrapper">
        <div class="template-layout" data-template-layout="columns">
            <div class="template-layout-column">
                <div class="page-menu">
                    <div class="page-menu-items">
                        <div class="page-menu-item">
                            <a href="#" class="page-menu-item-wrapper">О компании</a>
                        </div>
                        <div class="page-menu-item">
                            <a href="#" class="page-menu-item-wrapper">Вакансии</a>
                        </div>
                        <div class="page-menu-item" data-active="true">
                            <a href="#" class="page-menu-item-wrapper">Контакты и обратная связь</a>
                        </div>
                        <div class="page-menu-item">
                            <a href="#" class="page-menu-item-wrapper">Доставка и оплата</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="template-layout-column">
                <div id="page-mobile-menu" class="page-mobile-menu">
                    <select class="control" data-control="select" data-control-block="true">
                        <option value="#">О компании</option>
                        <option value="#">Вакансии</option>
                        <option value="#" selected>Контакты и обратная связь</option>
                        <option value="#">Доставка и оплата</option>
                    </select>
                </div>
                <h1 class="page-title">Контакты</h1>
                <div class="page-items">
                    <div class="page-item">
                        <span class="page-item-wrapper">
                            <span class="page-item-icon">
                                <span class="page-item-icon-wrapper">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/location.svg" />
                                </span>
                            </span>
                            <span class="page-item-text">Москва, Россия, 123290, 1-й Магистральный тупик, 5А. БЦ Магистраль Плаза</span>
                        </span>
                    </div>
                    <div class="page-item">
                        <a href="tel:+74956440008" class="page-item-wrapper">
                            <span class="page-item-icon">
                                <span class="page-item-icon-wrapper">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/phone.2.svg" />
                                </span>
                            </span>
                            <span class="page-item-text">+7 495 644-00-08</span>
                        </a>
                    </div>
                    <div class="page-item">
                        <a href="mailto:info@ersta.ru" class="page-item-wrapper">
                            <span class="page-item-icon">
                                <span class="page-item-icon-wrapper">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/resources/icons/email.svg" />
                                </span>
                            </span>
                            <span class="page-item-text">info@ersta.ru</span>
                        </a>
                    </div>
                </div>
                <form class="page-form">
                    <div class="page-form-fields">
                        <div class="page-form-field">
                            <input type="text" class="control" data-control="input" data-control-block="true" placeholder="Имя" />
                        </div>
                        <div class="page-form-field">
                            <input type="text" class="control" data-control="input" data-control-block="true" placeholder="Электронная почта" />
                        </div>
                        <div class="page-form-field" data-size="full">
                            <select class="control" data-control="select" data-control-block="true">
                                <option>Тема сообщения</option>
                                <option>Тема сообщения 1</option>
                                <option>Тема сообщения 2</option>
                                <option>Тема сообщения 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="page-form-question">
                        <textarea class="control" data-control="textarea" data-control-block="true" placeholder="Сообщение"></textarea>
                    </div>
                    <div class="page-form-consent">
                        <label class="control" data-control="checkbox" data-control-block="true">
                            <input type="checkbox" class="control-input" />
                            <span class="control-selector"></span>
                            <span class="control-content">Cогласен с <a href="#" class="control" data-control="link">Условиями обработки персональных данных</a></span>
                        </label>
                    </div>
                    <div class="page-form-controls">
                        <div class="page-form-control">
                            <button type="submit" class="control" data-control="button" data-control-block="true">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include(__DIR__.'/../parts/footer.php') ?>