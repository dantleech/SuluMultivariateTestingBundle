<?php
/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\MultivariateTestingBundle\Structure;

use PHPCR\NodeInterface;
use Sulu\Component\Content\StructureExtension\StructureExtension;

/**
 * extends structure with seo content.
 */
class MultivariateTestingExtension extends StructureExtension
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'mv_testing';

    /**
     * {@inheritdoc}
     */
    public function save(NodeInterface $node, $data, $webspaceKey, $languageCode)
    {
        $this->saveProperty($node, $data, 'multivariate_testing_variations');
    }

    /**
     * {@inheritdoc}
     */
    public function load(NodeInterface $node, $webspaceKey, $languageCode)
    {
        return array(
            'multivariate_testing_variations' => $this->loadProperty($node, 'multivariate_testing_variations'),
        );
    }
}

