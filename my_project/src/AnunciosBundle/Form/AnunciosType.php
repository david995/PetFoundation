<?php

namespace AnunciosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnunciosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array('label'=>'Nombre del animal:', 'attr' => array('class' => 'form-control','placeholder' => '...')))
            ->add('tipo','text',array('label'=>'Tipo de animal:', 'attr' => array('class' => 'form-control','placeholder' => '...')))
            ->add('raza','text',array('label'=>'Raza:', 'attr' => array('class' => 'form-control','placeholder' => '...')))
            ->add('sexo','choice',array('label'=>'Sexo:', 'attr' => array('class' => 'form-control'), 'choices' => array('m' => 'Macho', 'f' => 'Hembra')))
            ->add('nacimiento','date',array('label'=>'Nacimiento:','attr' => array('class' => 'form-control'),'years'=>range(date('Y')-50,date('Y')), 'attr' => array('width' => '100%', 'style' =>'padding:7px')))
            ->add('propietario','text',array('label'=>'Propietario:', 'attr' => array('class' => 'form-control','placeholder' => '...')))
            ->add('pedigri','checkbox',array('label'=>'¿Pedigrí? '))
            ;
                    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AnunciosBundle\Entity\Anuncios'
        ));
    }
}
