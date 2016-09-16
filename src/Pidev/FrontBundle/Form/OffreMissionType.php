<?php

namespace Pidev\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreMissionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lieuMission')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('horaireGarde')
            ->add('nombreEnfant')
            ->add('sexe','choice' , array(
                'choices' => array(
                    'homme' =>'homme' , 
                    'femme' =>'femme'))
                )
            ->add('idService','entity', array(
            'class' => 'PidevFrontBundle:Service',
            'property'=>'typeservice',
            'label' => 'Service  :'
        ))
            
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\FrontBundle\Entity\OffreMission'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_frontbundle_offremission';
    }
}
