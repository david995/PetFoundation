<?php

namespace AnunciosBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AnunciosBundle\Entity\Anuncios;

/**
 * Anuncios controller.
 *
 */
class AnunciosController extends Controller
{
    /**
     * Lists all Anuncios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $anuncios = $em->getRepository('AnunciosBundle:Anuncios')->findAll();

        return $this->render('anuncios/index.html.twig', array(
            'anuncios' => $anuncios,
        ));
    }

    /**
     * Finds and displays a Anuncios entity.
     *
     */
    public function showAction(Anuncios $anuncio)
    {

        return $this->render('anuncios/show.html.twig', array(
            'anuncio' => $anuncio,
        ));
    }
}
