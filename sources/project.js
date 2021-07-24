var _ = require('lodash');

function controlSimpleSlider (node, options) {
    var instance = node.find('.control-items').owlCarousel(_.merge(options, {
        'nav': false,
        'dots': false
    }));

    node.find('.control-navigation-button').on('click', function () {
        var action = this.getAttribute('data-action');

        if (action === 'slide.previous') {
            instance.trigger('prev.owl.carousel');
        } else if (action === 'slide.next') {
            instance.trigger('next.owl.carousel');
        }
    });

    return instance;
}

// Главная страница

(function () {
    var page = $('.page[data-page="main"]');
    var qualityBlock = $('.block[data-block="quality"]', page);
    var qualitySlider = controlSimpleSlider($('[data-control="slider.simple"]', page), {
        'items': 1
    });
})();
