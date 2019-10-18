<?php


namespace Blog\InicioBundle\EventListener;


use Blog\InicioBundle\Event\FilterResponseEvent;



class ResponseListener
{
    public function onPostInsert(FilterResponseEvent $event )
    {
        echo'hola';

    }
}