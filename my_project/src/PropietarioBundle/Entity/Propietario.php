<?php

namespace PropietarioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Propietario
 */
class Propietario
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $anuncio;

    /**
     * @var int
     */
    private $telefono;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $cP;

    /**
     * @var string
     */
    private $animal;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Propietario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Propietario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Propietario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set anuncio
     *
     * @param string $anuncio
     *
     * @return Propietario
     */
    public function setAnuncio($anuncio)
    {
        $this->anuncio = $anuncio;

        return $this;
    }

    /**
     * Get anuncio
     *
     * @return string
     */
    public function getAnuncio()
    {
        return $this->anuncio;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Propietario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Propietario
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
     * Set cP
     *
     * @param string $cP
     *
     * @return Propietario
     */
    public function setCP($cP)
    {
        $this->cP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return string
     */
    public function getCP()
    {
        return $this->cP;
    }

    /**
     * Set animal
     *
     * @param string $animal
     *
     * @return Propietario
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return string
     */
    public function getAnimal()
    {
        return $this->animal;
    }
    
    /**
     * Un propietario puede tener muchos animales
     * 
     * @ORM\OneToMany(targetEntity="Animales", mappedBy="propietarioAnimal")
     */
    protected $animales;
    
    /**
     * Un propietario puede tener muchos anuncios
     * 
     * @ORM\OneToMany(targetEntity="Anuncios", mappedBy="propietarioAnuncio")
     */
    protected $anuncios;
 
    public function __construct()
    {
        $this->animales = new ArrayCollection();
        $this->anuncios = new ArrayCollection();
    }
}