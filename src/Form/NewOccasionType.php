<?php

namespace App\Form;

use App\Entity\Occasion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewOccasionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('marque')
            ->add('modele')
            ->add('prix')
            ->add('kilometrage')
            ->add('places')
            ->add('image')
            ->add('image2')
            ->add('image3')
            ->add('motor')
            ->add('miseCirculation')
            ->add('auteur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Occasion::class,
        ]);
    }
}
