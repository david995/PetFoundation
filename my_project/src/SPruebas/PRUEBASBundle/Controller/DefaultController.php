<?php

namespace SPruebas\PRUEBASBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SPruebas\PRUEBASBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;




class DefaultController extends Controller
{
    public function formAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Escribe aquí');
        $task->setDueDate(new \DateTime('today'));

        $form = $this->createFormBuilder($task)
        ->add('task', 'text')
        ->add('dueDate', 'date')
        ->getForm();

            if ($request->isMethod('POST')) {
        $form->bind($request);

        if ($form->isValid()) {
            // realiza alguna acción, tal como guardar la tarea en la base de datos

            return $this->redirect($this->generateUrl('task_success'));
        }
    } 
        

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    
    }
    
    public function registerAction()
    {
        
        return $this->render('FOSUserBundle/Resources/:views/Registration:register.html.twig');
    }
    
    public function loginAction()
    {
        
        return $this->render('FOSUserBundle/Resources/:views/Security:login.html.twig');
    }
    
    public function indexAction()
    {
        
        
        //return $this->render('SPruebasPRUEBASBundle:Default:index.html.twig');
        return $this->render('SPruebasPRUEBASBundle:Default:contenidoindex.html.twig');
    }
}
