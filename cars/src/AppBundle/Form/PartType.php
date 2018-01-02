<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Name '])
            ->add('price', MoneyType::class,
                [
                    'label' => 'Price ',
                    'currency' => 'BGN'
                ])
            ->add('quantity', IntegerType::class,
                [
                    'label' => 'Quantity ',
                    'data' => 1
                ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Part'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'appbundle_part';
    }


}
