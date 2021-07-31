var loader;

// Мобильное select-меню
var pageMobileMenu = $('#page-mobile-menu');

if (pageMobileMenu.length > 0) {
    pageMobileMenu.find('select').on('change', function (event, val) {
        document.location.href = this.value;
    });
}

// Загрузка скриптов страниц
loader = require.context('project/pages', true, /\.js$/);
loader.keys().forEach(function (key) {
    setTimeout(function () {
        loader(key);
    }, 0);
});
