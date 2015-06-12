<?php

namespace Sulu\Bundle\MultivariateTestingBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class RestController
{
    /**
     * @var array
     */
    private $mapping;

    /**
     * @param SearchManagerInterface $searchManager
     */
    public function __construct(
        array $mapping
    ) {
        $this->mapping = $mapping;
    }

    public function variationsAction($uuid = null)
    {
        return new JsonResponse(array(
            '_embedded' => array(
                'items' => array(
                    array(
                        'name' => 'variation1',
                    ),
                    array(
                        'name' => 'variation2',
                    ),
                ),
            )
        ));
    }
}
