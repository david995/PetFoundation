<?php

namespace AnimalesBundle\Entity;

/**
 * Animales
 */
class Animales
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
    private $tipo;

    /**
     * @var string
     */
    private $raza;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var \DateTime
     */
    private $nacimiento;

    /**
     * @var string
     */
    private $propietario;

    /**
     * @var boolean
     */
    private $pedigri;


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
     * @return Animales
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Animales
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set raza
     *
     * @param string $raza
     *
     * @return Animales
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get raza
     *
     * @return string
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Animales
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set nacimiento
     *
     * @param \DateTime $nacimiento
     *
     * @return Animales
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;

        return $this;
    }

    /**
     * Get nacimiento
     *
     * @return \DateTime
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    /**
     * Set propietario
     *
     * @param string $propietario
     *
     * @return Animales
     */
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;

        return $this;
    }
    

    /**
     * Get propietario
     *
     * @return string
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set pedigri
     *
     * @param boolean $pedigri
     *
     * @return Animales
     */
    public function setPedigri($pedigri)
    {
        $this->pedigri = $pedigri;

        return $this;
    }

    /**
     * Get pedigri
     *
     * @return boolean
     */
    public function getPedigri()
    {
        return $this->pedigri;
    }
    
    /**
     * Un Propietario puede tener muchos animales, un animal solo un propietario
     * Hacemos un join de la propiedad propietario animal y propietario
     * 
     * @ORM\ManyToOne(targetEntity="Propietario", inversedBy="animales")
     * @JoinColumn(name="propietarioAnimal", referencedColumnName="propietario")
     */
     protected $propietarioAnimal;
     
     /**
     * @OneToOne(targetEntity="Anuncios", mappedBy="id_animal")
     */
     private $id_animalAnuncio;
}

