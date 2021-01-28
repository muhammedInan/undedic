<?php

namespace App\Form;

use App\Entity\Student;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'attr' => [
                    'placeholder' => "Prénom",
                    'class'=> 'form-control'
                ]
                ])
            ->add('lastName', TextType::class, [
                'attr' => [
                    'placeholder' => "nom",
                    'class'=> 'form-control'
                ]
                ])
            ->add('numEtud', NumberType::class, [
                'attr' => [
                    'placeholder' => "numero",
                    'class'=> 'form-control'
                ]
                ])
            ->add('appliquer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
