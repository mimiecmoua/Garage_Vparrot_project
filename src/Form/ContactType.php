<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'constraints' => [new Length(['min' => 2, 'max' => 30]), new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir votre Nom'
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'constraints' => [new Length(['min' => 2, 'max' => 30]), new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir votre Prénom'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Saisir votre Email'
                ]
            ])
            ->add('tel', IntegerType::class, [
                'label' => 'Téléphone',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir votre numéro de téléphone'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir votre message'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => "Envoyer"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
