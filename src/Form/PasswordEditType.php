<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class PasswordEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class, [
                'label' => 'Ancien mot de passe',
                'attr' => [
                    'class' => 'form-control border'
                ],
                'mapped' => false,
                'required' => true
            ])
            ->add('newPassword', PasswordType::class, [
                'label' => 'Nouveau mot de passe',
                'attr' => [
                    'class' => 'form-control border'
                ],
                'mapped' => false,
                'required' => true
            ])
            ->add('newPasswordConfirm', PasswordType::class, [
                'label' => 'Confirmation du nouveau mot de passe',
                'attr' => [
                    'class' => 'form-control border'
                ],
                'mapped' => false,
                'required' => true
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
}