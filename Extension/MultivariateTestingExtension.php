<?php
/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\MultivariateTestingBundle\Extension;

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
    protected $properties = array(
        'mv_testing_variations',
    );

    /**
     * {@inheritdoc}
     */
    public function save(NodeInterface $node, $data, $webspaceKey, $languageCode)
    {
        $this->saveProperty($node, $data, 'mv_testing_variations');
    }

    /**
     * {@inheritdoc}
     */
    public function load(NodeInterface $node, $webspaceKey, $languageCode)
    {
        return array(
            'multivariate_testing_variations' => $this->loadProperty($node, 'mv_testing_variations'),
        );
    }
}

