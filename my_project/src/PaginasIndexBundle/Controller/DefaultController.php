<?php

namespace PaginasIndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaginasIndexBundle:Default:index.html.twig');
    }
    public function camadasAction()
    {
        return $this->render('PaginasIndexBundle:Default:Contenido_camadas.html.twig');
    }
    public function protectorasAction()
    {
        return $this->render('PaginasIndexBundle:Default:Contenido_protectoras.html.twig');
    }
    public function sebuscaAction()
    {
        return $this->render('PaginasIndexBundle:Default:Contenido_sebusca.html.twig');
    }
    public function adopcionesAction()
    {
        return $this->render('PaginasIndexBundle:Default:Contenido_adopciones.html.twig');
    }
}
