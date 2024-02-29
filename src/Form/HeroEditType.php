<?php

namespace App\Form;

use App\Entity\Hero;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class HeroEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('message', TextType::class, [
                'label' => 'Message de la bannière',
                'required' => false,
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('button_message', TextType::class, [
                'label' => 'Message du bouton',
                'required' => false,
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('link', TextType::class, [
                'label' => 'Lien',
                'required' => false,
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Image de la bannière',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control border'
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'maxSizeMessage' => 'Le fichier est trop volumineux, 5MB maximum.',
                        'extensions' => ['jpg', 'jpeg', 'png', 'gif', 'webp'],
                        'extensionsMessage' => 'Le fichier n\'est pas au bon format, jpg, jpeg, png, gif et webp uniquement.'
                    ])
                ],
            ])
            ->add('active', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'ms-3'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hero::class,
        ]);
    }
}
