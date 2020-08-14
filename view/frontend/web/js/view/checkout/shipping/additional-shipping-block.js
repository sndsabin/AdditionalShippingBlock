define([
    'uiComponent'
], function (Component) {
    'use strict';
    var isEnabled = window.checkoutConfig.additionalShippingBlockConfig.isEnabled;
    var html = window.checkoutConfig.additionalShippingBlockConfig.blockContent;

    return Component.extend({
        defaults: {
            template: 'SNDSABIN_AdditionalShippingBlock/checkout/shipping/additional-shipping-block'
        },
        isEnabled: isEnabled,
        html: html
    });
});