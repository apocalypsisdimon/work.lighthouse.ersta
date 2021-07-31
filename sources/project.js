var Cookie = require('js-cookie');
var loader;

// Мобильное select-меню
var pageMobileMenu = $('#page-mobile-menu');

if (pageMobileMenu.length > 0) {
    pageMobileMenu.find('select').on('change', function (event, val) {
        document.location.href = this.value;
    });
}

// Cookies
var cookiesPopup = $('#cookies');

if (cookiesPopup.length > 0) {
    if (Cookie.get('CookiesConfirmed') !== 'true') {
        cookiesPopup.attr('data-active', 'true');
        cookiesPopup.find('[data-action="close"]').on('click', function () {
            cookiesPopup.removeAttr('data-active');
            Cookie.set('CookiesConfirmed', 'true', {
                'path': '/'
            });
        });
    }
}

// Загрузка скриптов страниц
loader = require.context('project/pages', true, /\.js$/);
loader.keys().forEach(function (key) {
    setTimeout(function () {
        loader(key);
    }, 0);
});
