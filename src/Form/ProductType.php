<?php

namespace App\Form;

use App\Entity\Brand;
use App\Entity\Category;
use App\Entity\Discount;
use App\Entity\Feature;
use App\Entity\Product;
use App\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\File;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du produit',
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('category', EntityType::class, [
                'label' => 'Catégorie',
                'class' => Category::class,
                'query_builder' => function (CategoryRepository $categoryRepository) {
                    return $categoryRepository->createQueryBuilder('c')
                        ->where('c.parent is not null')
                        ->andWhere('SIZE(c.children) = 0');
                },
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('brand', EntityType::class, [
                'label' => 'Marque',
                'class' => Brand::class,
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('images', FileType::class, [
                'label' => 'Images',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
                'constraints' => [
                    new Count([
                        'max' => 8,
                        'maxMessage' => 'Vous ne pouvez pas ajouter plus de 8 images'
                    ]),
                    new All([
                        new File([
                            'maxSize' => '5M',
                            'maxSizeMessage' => 'Le fichier est trop volumineux, 5MB maximum.',
                            'extensions' => ['jpg', 'jpeg', 'png', 'gif', 'webp'],
                            'extensionsMessage' => 'Le fichier n\'est pas au bon format, jpg, jpeg, png, gif et webp uniquement.'
                        ])
                    ])
                ],
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('features', EntityType::class, [
                'class' => Feature::class,
                'label' => 'Caractéristiques',
                'expanded' => true,
                'multiple' => true,
                'required' => false,
                'attr' => [
                    'class' => 'form-select'
                ],
                'choice_attr' => function($choice, $key, $value) {
                    return [
                        'class' => 'ms-3'
                    ];
                }
            ])
            ->add('feature1', TextType::class, [
                'label' => 'Première caractéristique propre',
                'attr' => [
                    'class' => 'form-control border',
                ],
                'required' => false
            ])
            ->add('feature2', TextType::class, [
                'label' => 'Seconde caractéristique propre',
                'attr' => [
                    'class' => 'form-control border',
                ],
                'required' => false
            ])
            ->add('feature3', TextType::class, [
                'label' => 'Troisième caractéristique propre',
                'attr' => [
                    'class' => 'form-control border',
                ],
                'required' => false
            ])
            ->add('short_description', TextareaType::class, [
                'label' => 'Description courte',
                'attr' => [
                    'class' => 'form-control border',
                    'rows' => 2
                ],
                'required' => false
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control border',
                    'rows' => 5
                ],
                'required' => false
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix',
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('rating', NumberType::class, [
                'label' => 'Note',
                'attr' => [
                    'class' => 'form-control border'
                ],
                'required' => false
            ])
            ->add('discount', EntityType::class, [
                'label' => 'Réduction',
                'class' => Discount::class,
                'attr' => [
                    'class' => 'form-select'
                ],
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}