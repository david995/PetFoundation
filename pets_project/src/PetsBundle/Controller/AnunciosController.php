<?php

namespace PetsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PetsBundle\Entity\Anuncios;
use PetsBundle\Form\AnunciosType;
use PetsBundle\Entity\Animales;
use AppBundle\Entity\User;

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
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();

        switch ($page) {
            case "Camadas":
                $anuncios = $em->getRepository('PetsBundle:Anuncios')->findAllCamadasDesc();
                
                return $this->render('PetsBundle:anuncios:index.html.twig', array(
                    'anuncios' => $anuncios,
                    'category' => 'litters',
                ));
            break;
            
            case "Adopciones":
                $anuncios = $em->getRepository('PetsBundle:Anuncios')->findAllAdopcionesDesc();
            
                return $this->render('PetsBundle:anuncios:index.html.twig', array(
                    'anuncios' => $anuncios,
                    'category' => 'adoptions',
                ));
            break;
            
            case "SeBusca":
                $anuncios = $em->getRepository('PetsBundle:Anuncios')->findAllSeBuscaDesc();
            
                return $this->render('PetsBundle:anuncios:index.html.twig', array(
                    'anuncios' => $anuncios,
                    'category' => 'wanted',
                ));
            break;
            
            /*case "Donaciones":
                $anuncios = $em->getRepository('PetsBundle:Anuncios')->findAll();
            
                return $this->render('PetsBundle:anuncios:index.html.twig', array(
                    'anuncios' => $anuncios,
                ));
            break;*/
            
            case "Protectoras":
                $anuncios = $em->getRepository('PetsBundle:Anuncios')->findAllProtectorasDesc();
            
                return $this->render('PetsBundle:anuncios:index.html.twig', array(
                    'anuncios' => $anuncios,
                    'category' => 'animal_shelter',
                ));
            break;
            
            default:
                return $this->redirectToRoute('pets_homepage');
            break;
        }
        
        /*if(!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            return $this->redirectToRoute('pets_homepage');
        }else{
        
        }*/
        
        
    }

    /**
     * Creates a new Anuncios entity.
     *
     */
    public function newAction(Request $request)
    {
        $anuncio = new Anuncios();
        $animal = new Animales();
        $user = new User();
        
        $anuncio->setUser($this->getUser());
        $animal->setAnuncio($anuncio);
        $anuncio->setAnimal($animal);
        $form = $this->createForm('PetsBundle\Form\AnunciosType', $anuncio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anuncio);
            $em->flush();

           // return $this->redirectToRoute('anuncios_show', array('id' => $anuncio->getId()));
            return $this->redirectToRoute('pets_homepage');
        }


        return $this->render('PetsBundle:anuncios:new.html.twig', array(
            'anuncio' => $anuncio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Anuncios entity.
     *
     */
    public function showAction(Anuncios $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);

        return $this->render('PetsBundle:anuncios:show.html.twig', array(
            'anuncio' => $anuncio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Anuncios entity.
     *
     */
    public function editAction(Request $request, Anuncios $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);
        $editForm = $this->createForm('PetsBundle\Form\AnunciosType', $anuncio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anuncio);
            $em->flush();

            return $this->redirectToRoute('anuncios_edit', array('id' => $anuncio->getId()));
        }

        return $this->render('PetsBundle:anuncios:edit.html.twig', array(
            'anuncio' => $anuncio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Anuncios entity.
     *
     */
    public function deleteAction(Request $request, Anuncios $anuncio)
    {
        $form = $this->createDeleteForm($anuncio);
        $form->handleRequest($request);
         $animal = new Animales();
        if ($form->isSubmitted() && $form->isValid()) {
      #      $em = $this->getDoctrine()->getManager();
      #      $em->remove($anuncio);
      #      $em->flush();
      
      $stmt = $this->getDoctrine()->getEntityManager()
        ->getConnection()
        ->prepare("update symfony.anuncios set anuncio_id=NULL, animal_id=NULL where anuncios.id=".$anuncio->getId());
        $stmt->execute();
    $anun = $this->getDoctrine()->getEntityManager()
        ->getConnection()
        ->prepare("delete from symfony.anuncios where anuncios.id=".$anuncio->getId());
        $anun->execute();
        }

        return $this->redirectToRoute('pets_homepage');
    }

    /**
     * Creates a form to delete a Anuncios entity.
     *
     * @param Anuncios $anuncio The Anuncios entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Anuncios $anuncio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anuncios_delete', array('id' => $anuncio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function getName()
    {
        return 'animal';
    }
    
    
    
}
