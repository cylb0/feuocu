<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('description', TextAreaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'class' => 'form-control border',
                    'row' => 5
                ]
            ])
            ->add('parent', null, [
                'label' => 'Catégorie mère',
                'attr' => [
                    'data-admin-category-icon-toggle-target' => 'parent',
                    'data-action' => 'admin-category-icon-toggle#update',
                    'class' => 'form-select'
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Logo de la catégorie',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'data-admin-category-icon-toggle-target' => 'image',
                    'class' => 'form-control border'
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'maxSizeMessage' => 'Le fichier est trop volumineux, 5MB maximum.',
                        'extensions' => ['jpg', 'jpeg', 'png', 'gif', 'webp'],
                        'extensionsMessage' => 'Le fichier n\'est pas au bon format, jpg, jpeg, png, gif et webp uniquement.'
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
