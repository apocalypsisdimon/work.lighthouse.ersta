var _ = require('lodash');

var page = $('.page[data-page="news.detail"]');

if (page.length > 0) {
    var items2Blocks = $('.block[data-block="items.2"]').control('block-items-2');
}
