<?php

namespace PetsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use PetsBundle\Form\AnimalesType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class AnunciosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder
            ->add('categoria', 'choice',array(
                'choices'=>array(
                    'Camadas' =>'Camadas',
                    'Adopciones' =>'Adopciones',
                    'Se busca' =>'Se busca',
                    'Protectoras' =>'Protectoras'
                    
                    ),
                ))
            ->add('titulo')
            ->add('animal')
            ->add('animal', AnimalesType::class, array('by_reference'  => false))
            /*->add('user') //ya funciona   */
            ;
        
         
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PetsBundle\Entity\Anuncios'
        ));
    }
}
?>