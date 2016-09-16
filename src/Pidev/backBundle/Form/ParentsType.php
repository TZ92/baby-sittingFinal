<?php

namespace Pidev\backBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParentsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cinParent')
            ->add('nomParent')
            ->add('prenomParent')
            ->add('villeParent')
            ->add('adresseParent')
            ->add('numtelParent')
            ->add('mailParent')
            ->add('nbEnfant')
            ->add('mdp')
            ->add('infoEnfant')
            ->add('description')
            ->add('dateInscri')
            ->add('dateMaj')
            ->add('enable')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\backBundle\Entity\Parents'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_backbundle_parents';
    }
}
