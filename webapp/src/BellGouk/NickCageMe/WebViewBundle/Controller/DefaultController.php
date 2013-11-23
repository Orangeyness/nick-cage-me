<?php

namespace BellGouk\NickCageMe\WebViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NickCageMeBundle:Default:index.html.twig', ['name' => 'World']);
    }
}
