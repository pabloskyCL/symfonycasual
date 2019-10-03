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

    /**
     * @Route("/index/busca_post/{titulo}", name="buscar")
     */
    public function buscaAction($titulo){
        $result = $this->getDoctrine()->getRepository("BlogInicioBundle:Post")->buscaPost($titulo);
        return $this->render('BlogInicioBundle:Crud:buscaPost.html.twig', array('encontrado'=>$result));
    }
}