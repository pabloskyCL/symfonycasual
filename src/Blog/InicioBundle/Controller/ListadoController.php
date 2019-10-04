<?php

namespace Blog\InicioBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\InicioBundle\Form\PostType;
use Blog\InicioBundle\Entity\Post;


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
     * @Route("/index/busca_post/{nro_post}", name="buscar")
     */
    public function buscaAction($nro_post)
    {
        $result = $this->getDoctrine()->getRepository("BlogInicioBundle:Post")->buscaPost($nro_post);
        return $this->render('BlogInicioBundle:Crud:buscaPost.html.twig', array('encontrado' => $result));
    }

    /**
     * @Route("/index/eliminaPost/{nro_post}", name="eliminar")
     */
    public function eliminaAction($nro_post){
        $result = $this->getDoctrine()->getRepository('BlogInicioBundle:Post')->eliminaPost($nro_post);
        if(isset($result)){
            $mensaje = 'post eliminado';
        }else{
            $mensaje = 'Error al eliminar el post';
        }
        return $this->render('BlogInicioBundle:Crud:listaPost.html.twig', array('mensaje'=> $mensaje));
    }


    /**
     * @Route("/index/create", name="create")
     * @Method("POST")
     */
    public function createAction(Request $request){
        $post = new Post();
        $form = $this->createForm(new PostType(), $post);
        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            $mesage = 'post guardado';
            return $this->redirectToRoute('blog_inicio_default_index',array('success' => $mesage));
        }

        return $this->render('BlogInicioBundle:Crud:generaPost.html.twig',array('mensaje' => $mesage='error campo invalido'));

    }



}