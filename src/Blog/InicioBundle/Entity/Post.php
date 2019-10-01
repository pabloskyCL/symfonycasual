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


}

