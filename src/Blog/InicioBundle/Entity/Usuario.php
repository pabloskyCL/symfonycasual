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
     * Set nomCompleto
     *
     * @param string $nomCompleto
     *
     * @return Usuario
     */
    public function setNomCompleto($nomCompleto)
    {
        $this->nomCompleto = $nomCompleto;

        return $this;
    }

    /**
     * Get nomCompleto
     *
     * @return string
     */
    public function getNomCompleto()
    {
        return $this->nomCompleto;
    }

    /**
     * Set nomUsuario
     *
     * @param string $nomUsuario
     *
     * @return Usuario
     */
    public function setNomUsuario($nomUsuario)
    {
        $this->nomUsuario = $nomUsuario;

        return $this;
    }

    /**
     * Get nomUsuario
     *
     * @return string
     */
    public function getNomUsuario()
    {
        return $this->nomUsuario;
    }

    /**
     * Set rut
     *
     * @param string $rut
     *
     * @return Usuario
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     *
     * @return Usuario
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Usuario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set numTelefono
     *
     * @param string $numTelefono
     *
     * @return Usuario
     */
    public function setNumTelefono($numTelefono)
    {
        $this->numTelefono = $numTelefono;

        return $this;
    }

    /**
     * Get numTelefono
     *
     * @return string
     */
    public function getNumTelefono()
    {
        return $this->numTelefono;
    }
}
