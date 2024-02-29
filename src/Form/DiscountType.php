<?php

namespace App\Form;

use App\Entity\Discount;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiscountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, [
                'sanitize_html' => true,
                'required' => false,
                'attr' => [
                    'class' => 'form-control border'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Pourcentage' => 'percentage',
                    'Valeur brute' => 'gross'
                ],
                'mapped' => true,
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('value', NumberType::class, [
                'label' => 'Saisir une valeur (2 décimales max)',
                'data' => $options['data']->getValue(),
                'mapped' => false,
                'required' => true,
                'scale' => 2,
                'attr' => [
                    'class' => 'form-control border'
                ],
                'invalid_message' => 'Veuillez entrer une valeur numérique.'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Discount::class,
        ]);
    }
}
