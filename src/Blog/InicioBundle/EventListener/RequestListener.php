<?php


namespace Blog\InicioBundle\EventListener;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel;

class RequestListener
{

    public function onKernelRequest(GetResponseEvent $event){

        if(!$event->getRequest()->hasSession()) {
            $response = new Response();
            $response->setContent('quiero redireccionar');
            $event->setResponse($response);
            return;
        }
    }

    public function sessionValida( Event $event){

        $event->stopPropagation();

    }
}