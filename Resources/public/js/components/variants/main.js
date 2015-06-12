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

        templates: ['/admin/sulumultivariatetesting/template/contact/list'],

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
            //// get content data
            //this.sandbox.emit('sulu.content.contents.get-data', function(data) {
                //this.render(data);
            //}.bind(this));
        },

        render: function(data) {
            this.sandbox.dom.html(this.$el, this.renderTemplate('/admin/content/template/content/mv_testing', {
            }));
        },

    }
});
