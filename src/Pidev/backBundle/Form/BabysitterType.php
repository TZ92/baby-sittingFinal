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
            ->add('sexeBabysitter','choice' , array(
                'choices' => array(
                    'homme' =>'homme' , 
                    'femme' =>'femme')))
            ->add('ville','choice' , array(
                'choices' => array(
                    'tunis' =>'tunis' , 
                    'manouba' =>'manouba',
                    'ariana'=>'ariana',
                    'ben arousse'=>'ben arousse',
                    'sousse'=>'sousse',
                    'nabeul'=>'nabeul'
                    )))
            ->add('adresseBabysitter')
            ->add('ageBabysitter')
            ->add('numtelBabysitter')
            ->add('mailBabysitter')
            ->add('niveauBabysitter','choice' , array(
                'choices' => array(
                    'debutant(e)' =>'debutant(e)' , 
                    'experimente(e)' =>'experimente(e)')))
            ->add('nbMissionBabysitter')
            ->add('nbEnfantBabysitter')
            ->add('distancemaxBabysitter')
            ->add('descriptionBabysitter')
            ->add('tarifHeur')
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
