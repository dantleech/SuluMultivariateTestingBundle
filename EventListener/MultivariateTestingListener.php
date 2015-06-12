<?php

namespace Sulu\Bundle\MultivariateTestingBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class MultivariateTestingListener
{
    private $mapping = array();

    public function __construct(array $mapping)
    {
        $this->mapping = $mapping;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }

        $request = $event->getRequest();

        if (!$request->attributes->has('structure')) {
            return;
        }

        $structure = $request->attributes->get('structure');

        if (!isset($this->mapping[$structure->getKey()])) {
            return;
        }

        $variantTemplates = array($request->attributes->get('view'));
        $variantTemplates = array_merge($variantTemplates, $this->mapping[$structure->getKey()]);

        $templateIndex = rand(0, count($variantTemplates) - 1);
        $template = $variantTemplates[$templateIndex];

        $request->attributes->set('view', $template);
    }
}
