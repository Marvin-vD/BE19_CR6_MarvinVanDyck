<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null,[
                'attr' => ['class'=>'form-control mb-3'],
            ])
            ->add('startTime', null,[
                'attr' => ['class'=>'form-control mb-3'],
                "widget" => "single_text"
            ])
            ->add('description', null,[
                'attr' => ['class'=>'form-control mb-3'],
            ])
            ->add('image', null,[
                'attr' => ['class'=>'form-control mb-3'],
            ])
            ->add('capacity', null,[
                'attr' => ['class'=>'form-control mb-3'],
            ])
            ->add('email', null,[
                'attr' => ['class'=>'form-control mb-3'],
            ])
            ->add('phoneNumber', null,[
                'attr' => ['class'=>'form-control mb-3'],
            ])
            ->add('address', null,[
                'attr' => ['class'=>'form-control mb-3'],
            ])
            ->add('url', null,[
                'attr' => ['class'=>'form-control mb-3'],
            ])
            ->add('type', ChoiceType::class,[
                'attr' => ['class'=>'form-control mb-3'],
                'choices' => [
                    'music' => 'music',
                    'sport' => 'sport',
                    'theater' => 'theater',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
