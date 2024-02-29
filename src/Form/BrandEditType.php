<?php

namespace App\Form;

use App\Entity\Brand;
use App\Repository\ImageRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class BrandEditType extends AbstractType
{
    private $imageRepository;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Logo de la marque',
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
                        'extensionsMessage' => 'Le fichier n\'est pas au bon format, jpg, jpeg, png, webp et gif uniquement.'
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Brand::class,
        ]);
    }
}