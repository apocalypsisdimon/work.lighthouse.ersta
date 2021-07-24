<?php include(__DIR__.'/../parts/header.php') ?>
<?php

$items = [[
    'picture' => SITE_TEMPLATE_PATH.'/assets/resources/pictures/pages/news/items/news.1.png',
    'title' => 'Поддержка франчайзи на 360 градусов',
    'date' => '12 января 2021',
    'description' => 'Институты красоты BABOR: уникальные программы ухода за кожей и немецкое качество baborinstitut.ru. Франшиза салонов красоты BABOR: единственная франшиза салонов красоты с акцентом на косметологию. Поддержка франчайзи на 360 градусов, baborfranchise.ru'
], [
    'picture' => SITE_TEMPLATE_PATH.'/assets/resources/pictures/pages/news/items/news.2.png',
    'title' => 'Рады видеть вас в нашей команде',
    'date' => '12 января 2021',
    'description' => 'Моно и мультибрендовые интернет-магазины, skinbutik.ru. Образовательный проект Академия ERSTA: обучение владельцев и специалистов салонов красоты и клиник.'
], [
    'picture' => SITE_TEMPLATE_PATH.'/assets/resources/pictures/pages/news/items/news.3.png',
    'title' => 'Моно и мультибрендовые интернет-магазины, skinbutik.ru',
    'date' => '12 января 2021',
    'description' => 'Микронутриенты и БАДы с высокой биодоступностью: ADVANCED NUTRITION PROGRAMME (Великобритания), advancednutritionprogramme.ru и BIOGENA (Австрия), biogena-russia.ru. Клиника превентивной медицины BIOGENA CLINIC: продление активного трудоспособного возраста и повышение качества жизни, biogenaclinic.ru'
]];

$items = array_merge($items, $items, $items, $items);

?>
<div class="page template-delimiter" data-page="webinars">
    <div class="template-delimiter-wrapper">
        <div class="template-layout" data-template-layout="columns">
            <div class="template-layout-column">

            </div>
            <div class="template-layout-column">
                <h1 class="page-title">Вебинары</h1>
                <div class="page-filter">
                    <div class="page-filter-items">
                        <div class="page-filter-item" data-active="true">
                            <div class="page-filter-item-text">Анонсы вебинаров</div>
                        </div>
                        <div class="page-filter-item">
                            <div class="page-filter-item-text">Записи вебинаров</div>
                        </div>
                        <div class="page-filter-item">
                            <div class="page-filter-item-text">Теория и практика</div>
                        </div>
                        <div class="page-filter-item">
                            <div class="page-filter-item-text">Дистанционное обучение</div>
                        </div>
                    </div>
                </div>
                <div class="page-items">
                    <?php foreach ($items as $item) { ?>
                        <div class="page-item">
                            <div class="page-item-wrapper">
                                <a href="#" class="page-item-picture">
                                    <div class="page-item-picture-wrapper" style="background-image: url('<?= $item['picture'] ?>')"></div>
                                </a>
                                <div class="page-item-information">
                                    <a href="#" class="page-item-title"><?= $item['title'] ?></a>
                                    <div class="page-item-date"><?= $item['date'] ?></div>
                                    <div class="page-item-description"><?= $item['description'] ?></div>
                                    <div class="page-item-links">
                                        <a href="#" class="page-item-link">Узнать больше</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="page-navigation">
                    <div class="page-navigation-elements">
                        <div class="page-navigation-element" data-active="true" data-type="number">
                            <div class="page-navigation-element-wrapper">
                                <div class="page-navigation-element-text">1</div>
                            </div>
                        </div>
                        <div class="page-navigation-element" data-type="number">
                            <div class="page-navigation-element-wrapper">
                                <div class="page-navigation-element-text">2</div>
                            </div>
                        </div>
                        <div class="page-navigation-element" data-type="number">
                            <div class="page-navigation-element-wrapper">
                                <div class="page-navigation-element-text">3</div>
                            </div>
                        </div>
                        <div class="page-navigation-element" data-type="number">
                            <div class="page-navigation-element-wrapper">
                                <div class="page-navigation-element-text">4</div>
                            </div>
                        </div>
                        <div class="page-navigation-element" data-type="number">
                            <div class="page-navigation-element-wrapper">
                                <div class="page-navigation-element-text">5</div>
                            </div>
                        </div>
                        <div class="page-navigation-element" data-type="next">
                            <div class="page-navigation-element-wrapper">
                                <div class="page-navigation-element-text">Вперёд</div>
                                <div class="page-navigation-element-icon">
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8536 4.35355C12.0488 4.15829 12.0488 3.84171 11.8536 3.64645L8.67157 0.464466C8.47631 0.269204 8.15973 0.269204 7.96447 0.464466C7.7692 0.659728 7.7692 0.976311 7.96447 1.17157L10.7929 4L7.96447 6.82843C7.7692 7.02369 7.7692 7.34027 7.96447 7.53553C8.15973 7.7308 8.47631 7.7308 8.67157 7.53553L11.8536 4.35355ZM0 4.5H11.5V3.5H0V4.5Z" fill="#282D46"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-navigation-more">
                        <div class="page-navigation-more-button">Показать ещё</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include(__DIR__.'/../parts/footer.php') ?>