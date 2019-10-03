<?php

namespace Blog\InicioBundle\Controller;

use Blog\InicioBundle\BlogInicioBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/index")
     *
     */
    public function indexAction()
    {
        return $this->render('BlogInicioBundle:Default:index.html.twig');
    }


}
