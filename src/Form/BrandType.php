<?php

namespace App\Form;

use App\Entity\Brand;
use App\Repository\ImageRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class BrandType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'mapped' => true,
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Logo de la marque',
                'required' => true,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'maxSizeMessage' => 'Le fichier est trop volumineux, 5MB maximum.',
                        'extensions' => ['jpg', 'jpeg', 'png', 'gif', 'webp'],
                        'extensionsMessage' => 'Le fichier n\'est pas au bon format, jpg, jpeg, png, gif et webp uniquement.'
                    ])
                ],
                'attr' => [
                    'class' => 'form-control border'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Brand::class,
        ]);
    }
}