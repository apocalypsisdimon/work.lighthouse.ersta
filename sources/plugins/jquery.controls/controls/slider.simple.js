var _ = require('lodash');

export var name = 'slider-simple';
export default function (options) {
    var self = this;
    var carousel = self.find('.control-items').owlCarousel(_.merge(options, {
        'nav': false,
        'dots': false
    }));

    var navigation = self.find('.control-navigation');
    var navigationButtons = navigation.find('.control-navigation-button');

    navigationButtons.on('click', function () {
        var action = this.getAttribute('data-action');

        if (action === 'slide.previous') {
            carousel.trigger('prev.owl.carousel');
        } else if (action === 'slide.next') {
            carousel.trigger('next.owl.carousel');
        }
    });

    return self;
}
