<?php

namespace ImagenesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImagenesBundle:Default:index.html.twig');
    }
}
