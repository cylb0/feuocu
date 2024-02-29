<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Adresse email valide',
                'required' => false
            ])
            ->add('password', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Mot de passe',
                'required' => false,
                'mapped' => false
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Administrateur' => 'ROLE_ADMIN',
                    'Utilisateur' => 'ROLE_USER'
                ],
                'expanded' => true,
                'multiple' => true,
                'attr' => [
                    'class' => 'form-check'
                ]
            ])
            ->add('first_name', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Prénom',
                'required' => false
            ])
            ->add('last_name', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Nom',
                'required' => false
            ])
            ->add('birth', BirthdayType::class, [
                'attr' => [
                    'class' => 'form-control border-0'
                ],
                'label' => 'Date de naissance',
                'required' => false
            ])
            ->add('address', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Adresse',
                'required' => false,
            ])
            ->add('zipcode', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Code postal',
                'required' => false,
            ])
            ->add('city', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Ville',
                'required' => false
            ])
            ->add('phone', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Numéro de téléphone',
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
