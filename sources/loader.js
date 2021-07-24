var _ = require('lodash');
var libraries = require('./libraries.js');

require('styles/main.scss');

var loader;

// Загрузка плагинов (рекурсивно из директории plugins все файлы script.js)
loader = require.context('plugins', true, /script\.js$/);
loader.keys().forEach(function (key) {
    loader(key);
});

// Загрузка стилей плагинов (рекурсивно из директории plugins все файлы style.css и style.scss)
loader = require.context('plugins', true, /style\.(s?css)$/);
loader.keys().forEach(function (key) {
    loader(key);
});

module.exports = _.assign({}, libraries);

document.addEventListener('DOMContentLoaded', function () {
    require('./project.js');
});
