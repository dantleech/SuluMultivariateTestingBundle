/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

define([], function() {

    'use strict';

    return {
        view: true,

        layout: {
            changeNothing: true
        },

        templates: ['/admin/multivariatetesting/template/variants'],

        initialize: function() {
            this.load();
            this.bindCustomEvents();
            this.bindDomEvents();
        },

        bindCustomEvents: function() {
            // content save
            this.sandbox.on('sulu.header.toolbar.save', function() {
                this.submit();
            }, this);
        },

        bindDomEvents: function() {
        },

        submit: function() {
        },

        load: function() {
            this.sandbox.dom.html(this.$el, this.renderTemplate('/admin/multivariatetesting/template/variants'));

            this.sandbox.start([
                {
                    name: 'datagrid@husky',
                    options: {
                        url: '/admin/multivariatetesting/variations',
                        el: '#variant_list',
                    }
                }
            ]);
        }
    }
});
