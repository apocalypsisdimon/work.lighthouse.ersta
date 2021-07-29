var loader;

// Загрузка скриптов страниц
loader = require.context('project/pages', true, /\.js$/);
loader.keys().forEach(function (key) {
    setTimeout(function () {
        loader(key);
    }, 0);
});
