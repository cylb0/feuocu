<?php

namespace App\Form;

use App\Entity\ProductOption;
use App\Entity\ProductOptionValue;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductOptionValueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('option', EntityType::class, [
                'class' => ProductOption::class,
                'choice_label' => 'name',
                'choice_attr' => function(ProductOption $option) {
                    return ['data-type' => $option->getType()];
                },
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('value', TextType::class, [
                'sanitize_html' => true,
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('hexacode', ColorType::class, [
                'label' => 'Couleur',
                'attr' => [
                    'class' => 'form-control-color border'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProductOptionValue::class,
        ]);
    }
}
