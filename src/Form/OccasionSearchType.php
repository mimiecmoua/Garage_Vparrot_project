<?php

namespace App\Form;

use App\Entity\OccasionSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class OccasionSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('maxPrice', RangeType::class, [
                'required' => false,
                'label' => 'Prix max'
            ])
            ->add('maxKilometre', RangeType::class, [
                'required' => false,
                'label' => 'Kilometres max'
            ])
            ->add('maxYear', RangeType::class, [
                'required' => false,
                'label' => 'Année max'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OccasionSearch::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }
}
