var _ = require('lodash');

var page = $('.page[data-page="news"]');

if (page.length > 0) {
    var filter = $('[data-element="filter"]', page);
    var filterScrollbar = $('[data-element="filter.scrollbar"]', filter);

    filterScrollbar.scrollbar();
}
