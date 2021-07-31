var _ = require('lodash');

export var name = 'block-items-2';
export default function () {
    var self = this;
    var carousel = self.find('.block-items').owlCarousel({
        'items': 1,
        'margin': 40,
        'loop': false,
        'nav': false,
        'dots': false,
        'responsive': {
            '768': {
                'items': 2
            },
            '1320': {
                'items': 2,
                'stagePadding': 156
            }
        },
        'stagePadding': 0
    });

    return self;
}
