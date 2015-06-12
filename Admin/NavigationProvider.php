<?php

/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\MultivariateTestingBundle\Admin;

use Sulu\Bundle\AdminBundle\Navigation\ContentNavigationItem;
use Sulu\Bundle\AdminBundle\Navigation\ContentNavigationProviderInterface;
use Sulu\Component\Content\Structure;
use Sulu\Component\Security\Authorization\SecurityCheckerInterface;

class NavigationProvider implements ContentNavigationProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getNavigationItems(array $options = array())
    {
        $mvTesting = new ContentNavigationItem('content-navigation.contents.multivariate_testing');
        $mvTesting->setId('mv-testing');
        $mvTesting->setAction('mv-testing');
        $mvTesting->setComponent('variants@sulumultivariatetesting');
        $mvTesting->setDisplay(array('edit'));

        $navigation = array($mvTesting);

        return $navigation;
    }
}
