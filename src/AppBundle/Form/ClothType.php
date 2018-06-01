<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;

class ClothType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('color', null, [
            'label' => 'Couleur',
            'data_class' => null,

        ])
        ->add('name',null, [
            'label' => 'Nom',
            'data_class' => null
        ])
        // ->add('season',null, [
        //     'label' => 'Saison'
        // ])
        ->add('temperature', null, [
            'label' => 'Température',
            'data_class' => null
        ])

        ->add('part', null, [
            'label' => 'Type',
            'data_class' => null
        ])
        ->add('image', FileType::class, [
            'label' => 'Image',
            'data_class' => null
        ])
        ->add('weathers', null, [
            'label' => 'Saison',
            'expanded' => true,
            'multiple' => true,
            
        ]);
        // ->add('outfits');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cloth',
          'attr' => ['novalidate' => 'novalidate']

        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_cloth';
    }


}
