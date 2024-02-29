<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;

class RegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Adresse email valide',
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'max' => 180,
                        'minMessage' => 'Le mail est trop court, 6 caractères minimum',
                        'maxMessage' => 'Le mail est trop long, 180 caractères maximum'

                    ]),
                ]
            ])
            ->add('emailConfirm', EmailType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Confirmer l\'adresse mail',
                'mapped' => false
            ])
            ->add('password', PasswordType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Mot de passe',
                'mapped' => false
            ])
            ->add('passwordConfirm', PasswordType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Confirmer le mot de passe',
                'mapped' => false
            ])
            ->add('first_name', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Prénom',
                'required' => true
            ])
            ->add('last_name', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Nom',
                'required' => true
            ])
            ->add('birth', BirthdayType::class, [
                'attr' => [
                    'class' => 'form-control border-0'
                ],
                'label' => 'Date de naissance',
                'constraints' => [
                    new LessThanOrEqual([
                        'value' => 'today',
                        'message' => 'Vous devez choisir une date antérieure et qui correspond à un utilisateur majeur.'
                    ])
                ]
            ])
            ->add('phone', TextType::class, [
                'attr' => [
                    'class' => 'form-control border'
                ],
                'label' => 'Numéro de téléphone',
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
            ->add('submit', SubmitType::class, [
                'label' => 'S\'enregistrer',
                'attr' => [
                    'class' => 'btn text-white col-6 bg-fd2048 btn-block mt-3 mb-3 mx-auto',
                    'data-mdb-ripple-duration' => 0
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}