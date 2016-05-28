<?php

namespace PetsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PetsBundle\Entity\Animales;
use PetsBundle\Form\AnimalesType;

/**
 * Animales controller.
 *
 */
class AnimalesController extends Controller
{
    /**
     * Lists all Animales entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $animales = $em->getRepository('PetsBundle:Animales')->findAll();
        
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
           return $this->render('PetsBundle:animales:index.html.twig', array(
            'animales' => $animales,
            ));
        }else{
            
            $this->get('ras_flash_alert.alert_reporter')->addError('Acceso denegado');
            
            return $this->redirectToRoute('pets_homepage');
        }
        
    }

    /**
     * Creates a new Animales entity.
     *
     */
    public function newAction(Request $request)
    {
        $animale = new Animales();
        $form = $this->createForm('AnimalesBundle\Form\AnimalesType', $animale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($animale);
            $em->flush();

            return $this->redirectToRoute('animales_show', array('id' => $animales->getId()));
        }

        return $this->render('animales/new.html.twig', array(
            'animale' => $animale,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Animales entity.
     *
     */
    public function showAction(Animales $animale)
    {
        $deleteForm = $this->createDeleteForm($animale);

        return $this->render('PetsBundle:animales:show.html.twig', array(
            'animale' => $animale,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Animales entity.
     *
     */
    public function editAction(Request $request, Animales $animale)
    {
        $deleteForm = $this->createDeleteForm($animale);
        $editForm = $this->createForm('PetsBundle\Form\AnimalesType', $animale);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($animale);
            $em->flush();

            return $this->redirectToRoute('animales_edit', array('id' => $animale->getId()));
        }

        return $this->render('PetsBundle:animales:edit.html.twig', array(
            'animale' => $animale,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Animales entity.
     *
     */
    public function deleteAction(Request $request, Animales $animale)
    {
        $form = $this->createDeleteForm($animale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($animale);
            $em->flush();
        }

        return $this->redirectToRoute('animales_index');
    }

    /**
     * Creates a form to delete a Animales entity.
     *
     * @param Animales $animale The Animales entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Animales $animale)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('animales_delete', array('id' => $animale->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
