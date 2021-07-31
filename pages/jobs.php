<?php include(__DIR__.'/../parts/header.php') ?>
<?php

$items = [[
    'name' => 'Бренд-менеджер',
    'properties' => [[
        'name' => 'График работы',
        'value' => 'Полный день, Полная занятость'
    ], [
        'name' => 'Опыт работы',
        'value' => 'от 3 лет в сфере маркетинга (бренд-менеджмент, трейд-маркетинг, реклама)'
    ], [
        'name' => 'Образование',
        'value' => 'Высшее образование (маркетинг, экономика)'
    ], [
        'name' => 'Важно',
        'value' => 'Погружение в тему здорового питания и образа жизни, «гореть темой» и быть готовым к большому объему работы'
    ]]
], [
    'name' => 'Бренд-менеджер',
    'properties' => [[
        'name' => 'График работы',
        'value' => 'Полный день, Полная занятость'
    ], [
        'name' => 'Опыт работы',
        'value' => 'от 3 лет в сфере маркетинга (бренд-менеджмент, трейд-маркетинг, реклама)'
    ], [
        'name' => 'Образование',
        'value' => 'Высшее образование (маркетинг, экономика)'
    ], [
        'name' => 'Важно',
        'value' => 'Погружение в тему здорового питания и образа жизни, «гореть темой» и быть готовым к большому объему работы'
    ]]
], [
    'name' => 'Бренд-менеджер',
    'properties' => [[
        'name' => 'График работы',
        'value' => 'Полный день, Полная занятость'
    ], [
        'name' => 'Опыт работы',
        'value' => 'от 3 лет в сфере маркетинга (бренд-менеджмент, трейд-маркетинг, реклама)'
    ], [
        'name' => 'Образование',
        'value' => 'Высшее образование (маркетинг, экономика)'
    ], [
        'name' => 'Важно',
        'value' => 'Погружение в тему здорового питания и образа жизни, «гореть темой» и быть готовым к большому объему работы'
    ]]
]];

?>
<div class="page template-delimiter" data-page="jobs">
    <div class="template-delimiter-wrapper">
        <div class="template-layout" data-template-layout="columns">
            <div class="template-layout-column">
                <div class="page-menu">
                    <div class="page-menu-items">
                        <div class="page-menu-item">
                            <a href="#" class="page-menu-item-wrapper">О компании</a>
                        </div>
                        <div class="page-menu-item" data-active="true">
                            <a href="#" class="page-menu-item-wrapper">Вакансии</a>
                        </div>
                        <div class="page-menu-item">
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
                        <option value="#" selected>Вакансии</option>
                        <option value="#">Контакты и обратная связь</option>
                        <option value="#">Доставка и оплата</option>
                    </select>
                </div>
                <h1 class="page-title">Вакансии</h1>
                <div class="page-items">
                    <?php foreach ($items as $item) { ?>
                        <div class="page-item">
                            <div class="page-item-wrapper">
                                <div class="page-item-title"><?= $item['name'] ?></div>
                                <div class="page-item-properties">
                                    <div class="page-item-properties-wrapper">
                                        <?php foreach ($item['properties'] as $property) { ?>
                                            <div class="page-item-property">
                                                <div class="page-item-property-wrapper">
                                                    <div class="page-item-property-title"><?= $property['name'] ?></div>
                                                    <div class="page-item-property-value"><?= $property['value'] ?></div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="page-item-controls">
                                    <div class="page-item-controls-wrapper">
                                        <div class="page-item-control">
                                            <button type="button" class="control" data-control="button" data-control-block="true">Отправить резюме</button>
                                        </div>
                                        <div class="page-item-control">
                                            <a href="#" class="control" data-control="button" data-control-block="true" data-control-scheme="transparent.1">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include(__DIR__.'/../parts/footer.php') ?>