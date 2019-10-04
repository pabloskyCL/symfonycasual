<?php

namespace Blog\InicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
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
     * @ORM\Column(name="nom_completo", type="string", length=50, nullable=true)
     */
    private $nomCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_usuario", type="string", length=50, nullable=true)
     */
    private $nomUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="rut", type="string", length=9, nullable=true)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena", type="string", length=50, nullable=true)
     */
    private $contrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="num_telefono", type="string", length=12, nullable=true)
     */
    private $numTelefono;


}

