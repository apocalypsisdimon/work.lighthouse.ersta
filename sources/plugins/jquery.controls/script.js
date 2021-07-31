var _ = require('lodash');
var $ = require('jquery');
var controls = {};
var loader;

loader = require.context('./controls', true, /\.js$/);
loader.keys().forEach(function (key) {
    var control = loader(key);

    if (_.isNil(control.name))
        return;

    controls[control.name] = control.default;
});

$.fn.control = function (name, options) {
    var self = this;
    var control;

    if (_.isNil(controls[name]))
        return self;

    control = controls[name];

    this.each(function (index, item) {
        if (!_.isNil(item._control))
            return;

        item._control = control.call($([item]), _.merge({}, options));
    });

    return this;
};

$.fn.control.controls = controls;
