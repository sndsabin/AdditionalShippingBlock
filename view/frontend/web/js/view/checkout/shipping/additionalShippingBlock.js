define([
    'uiComponent'
], function (Component) {
    'use strict';
    var blockPlacement = window.checkoutConfig.additionalShippingBlockConfig.blockPlacement || 'shippingAdditional';

    return Component.extend({
        displayArea: blockPlacement
    });
});