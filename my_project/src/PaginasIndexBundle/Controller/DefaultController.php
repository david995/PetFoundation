<?php

namespace PaginasIndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaginasIndexBundle:Default:index.html.twig');
    }
    
    public function camadasAction()
    { 
        $em = $this->getDoctrine()->getManager();
        
        $anuncios = $em->getRepository('AnunciosBundle:Anuncios')->findAllCamadasDesc('Camadas');
      
        return $this->render('PaginasIndexBundle:Default:Contenido_camadas.html.twig', array('anuncios' => $anuncios));
    }
    
    public function protectorasAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $anuncios = $em->getRepository('AnunciosBundle:Anuncios')->findAllProtectorasDesc('Protectoras');
      
        return $this->render('PaginasIndexBundle:Default:Contenido_protectoras.html.twig', array('anuncios' => $anuncios));
    }
    
    public function sebuscaAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $anuncios = $em->getRepository('AnunciosBundle:Anuncios')->findAllSeBuscaDesc('Se busca');
        
        return $this->render('PaginasIndexBundle:Default:Contenido_sebusca.html.twig', array('anuncios' => $anuncios));
    }
    
    
    public function adopcionesAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $anuncios = $em->getRepository('AnunciosBundle:Anuncios')->findAllAdopcionesDesc('Adopciones');
        
        return $this->render('PaginasIndexBundle:Default:Contenido_adopciones.html.twig', array('anuncios' => $anuncios));
    }
    
    
    public function buscadorAction(Request $request)
    {
        $stmt = $this->getDoctrine()->getEntityManager()->getConnection()->prepare(
            "SELECT
                anuncios.titulo,
                animales.descripcion,
                anuncios.Categoria,
                anuncios.anuncio_id,
                anuncios.animal_id,
                animales.Nombre,
                animales.Tipo,
                animales.Raza,
                animales.Sexo,
                animales.Nacimiento,
                animales.Propietario,
                animales.tlf
            FROM
                symfony.anuncios
            LEFT JOIN
                symfony.animales ON anuncios.animal_id=animales.id
            ORDER BY 
                anuncios.id DESC");
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        return $this->render('PaginasIndexBundle:Default:Contenido_buscador.html.twig', array('anuncios' => $result));
    }
    
    public function pruebabuscarAction()
    {
        
        $stmt = $this->getDoctrine()->getEntityManager()->getConnection()->prepare(
            "SELECT
                anuncios.titulo,
                animales.descripcion,
                anuncios.Categoria,
                anuncios.anuncio_id,
                anuncios.animal_id,
                animales.Nombre,
                animales.Tipo,
                animales.Raza,
                animales.Sexo,
                animales.Nacimiento,
                animales.Propietario,
                animales.tlf
            FROM
                symfony.anuncios
            LEFT JOIN
                symfony.animales ON anuncios.animal_id=animales.id
            WHERE
                Categoria='Camadas' 
            ORDER BY 
                anuncios.id DESC");
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        return $this->render('PaginasIndexBundle:Default:Contenido_pruebabuscar.html.twig', array('anuncios' => $result));
    }
    
}
