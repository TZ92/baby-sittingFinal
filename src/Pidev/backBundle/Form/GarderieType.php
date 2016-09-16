<?php

namespace Pidev\backBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GarderieType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomGarderie')
            ->add('villeGarderie')
            ->add('adresseGarderie')
            ->add('numTel','text')
            ->add('contactGarderie','text')
            ->add('capaciteGarderie')
            ->add('descriptionGarderie')
            
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\backBundle\Entity\Garderie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_backbundle_garderie';
    }
}
