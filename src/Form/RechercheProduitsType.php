<?php

namespace App\Form;

use App\Entity\RechercheProduits;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class RechercheProduitsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('minPrix', IntegerType::class, [
                "required" => false,
                "label" => "Prix min : "
            ])
            ->add('maxPrix', IntegerType::class, [
                "required" => false,
                "label" => "Prix max : "
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RechercheProduits::class,
        ]);
    }
}
