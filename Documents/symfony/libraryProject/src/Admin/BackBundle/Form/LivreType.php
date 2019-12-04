<?php

namespace Admin\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class LivreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titre')
        ->add('auteur')
        ->add('description')
        ->add('motCle')
        ->add('disponibilite')
        ->add('dateIdition')
        ->add('categorie',EntityType::class, array(
            'class' => 'Admin\BackBundle\Entity\Categorie',
            'choice_label' => 'nom',
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\BackBundle\Entity\Livre'
        ));
        
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_backbundle_livre';
    }



}
