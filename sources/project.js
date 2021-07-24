var _ = require('lodash');

// Главная страница

(function () {
    var page = $('.page[data-page="main"]');

    var qualityBlock = $('.block[data-block="quality"]', page);
    var qualitySlider = $('[data-control="slider.simple"]', qualityBlock).control('slider-simple', {
        'autoHeight': true,
        'items': 1
    });

    var teamBlock = $('.block[data-block="team"]', page);
    var teamSlider = $('[data-control="slider.simple"]', teamBlock).control('slider-simple', {
        'items': 1,
        'loop': true,
        'margin': 24,
        'stagePadding': 64,
        'responsive': {
            '768': {
                'items': 2,
                'stagePadding': 86
            },
            '1320': {
                'items': 3,
                'margin': 56,
                'stagePadding': 106
            },
            '1520': {
                'items': 4
            }
        }
    });

    var awardsBlock = $('.block[data-block="awards"]', page);
    var awardsSlider = $('[data-control="slider.simple"]', awardsBlock).control('slider-simple', {
        'autoHeight': true,
        'items': 1
    });
})();
