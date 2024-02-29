<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Nouvelle adresse email',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => $options['data']->getEmail()
                ],
                'mapped' => false,
                'required' => false
            ])
            ->add('emailConfirm', EmailType::class, [
                'label' => 'Confirmation de l\'adresse mail',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => $options['data']->getEmail()
                ],
                'mapped' => false,
                'required' => false
            ])
            ->add('phone', TextType::class, [
                'label' => 'Nouveau numéro de téléphone',
                'attr' => [
                    'class' => 'form-control border',
                    'placeholder' => $options['data']->getPhone()
                ],
                'mapped' => false,
                'required' => false
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse',
                'attr' => [
                    'class' => 'form-control border',
                    'placeholder' => $options['data']->getAddress()
                ],
                'mapped' => false,
                'required' => false
            ])
            ->add('zipcode', TextType::class, [
                'label' => 'Code postal',
                'attr' => [
                    'class' => 'form-control border',
                    'placeholder' => $options['data']->getZipcode()
                ],
                'mapped' => false,
                'required' => false
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'attr' => [
                    'class' => 'form-control border',
                    'placeholder' => ucfirst($options['data']->getCity())
                ],
                'mapped' => false,
                'required' => false
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Modifier',
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
            'data_class' => User::class,
        ]);
    }
}