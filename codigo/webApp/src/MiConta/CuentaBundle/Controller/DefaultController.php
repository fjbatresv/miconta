<?php

namespace MiConta\CuentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MiContaCuentaBundle:Default:index.html.twig', array('name' => $name));
    }
}
