<?php

namespace Blog\InicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="string", length=200, nullable=true)
     */
    private $contenido;

    /**
     * @var integer
     *
     * @ORM\Column(name="votos", type="integer", nullable=true)
     */
    private $votos;

    /**
     * @var string
     *
     * @ORM\Column(name="respuesta", type="string", length=200, nullable=true)
     */
    private $respuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="tema", type="string", length=20, nullable=true)
     */
    private $tema;

    /**
     * @var integer
     *
     * @ORM\Column(name="nro_post", type="integer", nullable=true)
     */
    private $nroPost;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Post
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     *
     * @return Post
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set votos
     *
     * @param integer $votos
     *
     * @return Post
     */
    public function setVotos($votos)
    {
        $this->votos = $votos;

        return $this;
    }

    /**
     * Get votos
     *
     * @return integer
     */
    public function getVotos()
    {
        return $this->votos;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     *
     * @return Post
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set tema
     *
     * @param string $tema
     *
     * @return Post
     */
    public function setTema($tema)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return string
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set nroPost
     *
     * @param integer $nroPost
     *
     * @return Post
     */
    public function setNroPost($nroPost)
    {
        $this->nroPost = $nroPost;

        return $this;
    }

    /**
     * Get nroPost
     *
     * @return integer
     */
    public function getNroPost()
    {
        return $this->nroPost;
    }
}
