<?php

namespace IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IndexBundle:Default:contenido_index.html.twig');
    }
    
    public function indexpAction()
    {
        return $this->render('IndexBundle:Default:index.html.twig');
    }
}
