<?php

namespace Sulu\Bundle\MultivariateTestingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TemplateController extends Controller
{
    public function variantsAction(Request $request)
    {
        return $this->render('SuluMultivariateTestingBundle:Template:variants.html.twig');
    }
}
