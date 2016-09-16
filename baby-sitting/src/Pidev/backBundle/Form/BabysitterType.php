<?php

namespace Pidev\backBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BabysitterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cinBabysitter')
            ->add('nomBabysitter')
            ->add('prenomBabysitter')
            ->add('sexeBabysitter')
            ->add('ville')
            ->add('adresseBabysitter')
            ->add('ageBabysitter')
            ->add('numtelBabysitter')
            ->add('mailBabysitter')
            ->add('imageBabysitter')
            ->add('mpBabysitter')
            ->add('niveauBabysitter')
            ->add('nbMissionBabysitter')
            ->add('nbEnfantBabysitter')
            ->add('distancemaxBabysitter')
            ->add('descriptionBabysitter')
            ->add('tarifHeur')
            ->add('enable')
            ->add('note')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\backBundle\Entity\Babysitter'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_backbundle_babysitter';
    }
}
