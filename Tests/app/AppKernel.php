<?php

namespace Sulu\Bundle\MultivariateTestingBundle\Tests\app;

class AppKernel extends SuluTestKernel
{

    public function registerBundles()
    {
        return array_merge(
            parent::registerBundles(),
            array(
                SuluMultivariateTestingBundle(),
            )
        );
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(SuluTestBundle::getConfigDir() . '/config.php');
        if (class_exists('Sulu\Bundle\SearchBundle\SuluSearchBundle')) {
            $loader->load(__DIR__ . '/config/config.yml');
        }
    }
}
}
