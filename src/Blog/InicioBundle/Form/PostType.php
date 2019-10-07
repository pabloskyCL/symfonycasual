<?php

namespace Blog\InicioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo','text')
            ->add('contenido','textarea')
            ->add('respuesta','textarea')
            ->add('tema','text')
            ->add('Guardar','submit')
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'post';
    }

}
