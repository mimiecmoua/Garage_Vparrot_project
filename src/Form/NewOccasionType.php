<?php

namespace App\Form;

use App\Entity\Occasion;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;


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
            ->add('image', TextType::class, [
                'label' => 'image',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir le nom de l\'image'
                ]
            ])
            ->add('imageAttached', FileType::class, [
                'label' => 'upload image',
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/jpg',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image (jpeg, png, jpg)',
                    ])
                ],
            ])

            ->add('image2', TextType::class, [
                'label' => 'image2',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir le nom de l\'image2'
                ]
            ])
            ->add('image2Attached', FileType::class, [
                'label' => 'upload image2',
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/jpg',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image (jpeg, png, jpg)',
                    ])
                ],
            ])

            ->add('image3', TextType::class, [
                'label' => 'image3',
                'constraints' => [new NotBlank()],
                'attr' => [
                    'placeholder' => 'saisir le nom de l\'image3'
                ]
            ])
            ->add('image3Attached', FileType::class, [
                'label' => 'upload image3',
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/jpg',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image (jpeg, png, jpg)',
                    ])
                ],
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
