<?php

namespace Blog\InicioBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListadoController extends Controller
{
    /**
     * @Route("/index/lista_post", name="listado")
     *
     */
    public function listaAction()
    {
        $result = $this->getDoctrine()->getRepository("BlogInicioBundle:Post")->listaPosts();
        return $this->render('BlogInicioBundle:Crud:listaPost.html.twig', array('listadoPost' => $result));
    }
}