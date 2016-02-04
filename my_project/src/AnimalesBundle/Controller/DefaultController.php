<?php

namespace AnimalesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnimalesBundle:Default:index.html.twig');
    }
}
