/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

require.config({
    paths: {
        sulumultivariatetesting: '../../sulumultivariatetesting/js',
    }
});

define(['config'], function(Config) {
    return {

        name: "Sulu Multivariate Testing Bundle",

        initialize: function(app) {

            'use strict';

            var sandbox = app.sandbox;

            app.components.addSource('sulumultivariatetesting', '/bundles/sulumultivariatetesting/js/components');
            
            // show form for new content with a parent page
            sandbox.mvc.routes.push({
                route: 'content/contents/:webspace/:language/add::id/:content',
                callback: function(webspace, language, id, content) {
                    this.html(
                        '<div data-aura-component="variations@sulumultivariatetesting" data-aura-webspace="' + webspace + '" data-aura-language="' + language + '" data-aura-content="' + content + '" data-aura-parent="' + id + '"/>'
                    );
                }
            });
        }
    };
});
