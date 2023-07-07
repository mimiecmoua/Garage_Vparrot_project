<?php

namespace App\Form;

use App\Entity\Occasion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotNull;


class NewOccasionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('marque', TextType::class, [
                'label' => 'Marque',
                'constraints' => [new Length(['min' => 2, 'max' => 30]), new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir la marque'
                ]
            ])
            ->add('modele', TextType::class, [
                'label' => 'Modele',
                'constraints' => [new Length(['min' => 2, 'max' => 30]), new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir le modèle'
                ]
            ])
            ->add('prix', IntegerType::class, [
                'label' => 'Prix',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir le prix'
                ]
            ])
            ->add('kilometrage', IntegerType::class, [
                'label' => 'Kilometrage',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir le kilométrage'
                ]
            ])
            ->add('places', IntegerType::class, [
                'label' => 'places',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir le nombre de places'
                ]
            ])

            ->add('motor', TextType::class, [
                'label' => 'Type Motorisation',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir le type de motorisation'
                ]
            ])
            ->add('miseCirculation', TextType::class, [
                'label' => 'Mise en circulation',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir la date de mise en circulation'
                ]
            ])

            ->add("file", FileType::class, [
                'label' => 'image1',
                "required" => false,
                "mapped" => false,
                "constraints" => [
                    new Image(),
                    new NotNull()
                ]
            ])
            ->add("file2", FileType::class, [
                'label' => 'image2',
                "required" => false,
                "mapped" => false,
                "constraints" => [
                    new Image(),
                    new NotNull()
                ]
            ])
            ->add("file3", FileType::class, [
                'label' => 'image3',
                "required" => false,
                "mapped" => false,
                "constraints" => [
                    new Image(),
                    new NotNull()
                ]
            ])

            ->add('submit', SubmitType::class, [
                'label' => "valider"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Occasion::class,
        ]);
    }
}
