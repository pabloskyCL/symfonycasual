<?php

namespace Blog\InicioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', 'text')
            ->add('contenido', 'textarea')
            ->add('respuesta', 'textarea')
            ->add('tema', 'text')
            ->add('votos', 'text')
            ->add('nro_post', 'text')
            ->add('Guardar', 'submit')
            ->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPablosky'));
    }

    public function onPablosky (FormEvent $event) {
        $post = $event->getData();
        $form = $event->getForm();

        if (!$post) {
            return;
        }

        if ($post['titulo'] == 'torneo') {
            $agrega = true;
        } else {
            $agrega = false;
        }

        if ($agrega) {
            $post['titulo'] = $post['titulo'] . " modificado";
        }
        $event->setData($post);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'post';
    }

}
