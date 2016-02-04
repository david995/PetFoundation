<?php

namespace AnunciosBundle\Entity;

/**
 * Anuncios
 */
class Anuncios
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var int
     */
    private $idAnimal;

    /**
     * @var string
     */
    private $nombrePropietario;

    /**
     * @var string
     */
    private $email;


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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Anuncios
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
     * Set idAnimal
     *
     * @param integer $idAnimal
     *
     * @return Anuncios
     */
    public function setIdAnimal($idAnimal)
    {
        $this->idAnimal = $idAnimal;

        return $this;
    }

    /**
     * Get idAnimal
     *
     * @return int
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }

    /**
     * Set nombrePropietario
     *
     * @param string $nombrePropietario
     *
     * @return Anuncios
     */
    public function setNombrePropietario($nombrePropietario)
    {
        $this->nombrePropietario = $nombrePropietario;

        return $this;
    }

    /**
     * Get nombrePropietario
     *
     * @return string
     */
    public function getNombrePropietario()
    {
        return $this->nombrePropietario;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Anuncios
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
     * Muchos anuncios tiene un propietario
     * 
     * @ORM\ManyToOne(targetEntity="Propietario", inversedBy="anuncios")
     */
     protected $propietarioAnuncio;
     
     /**
      * @OneToOne(targetEntity="Animales", inversedby="$id_animalAnuncio")
      * @JoinColumn(name="idAnimal", referencedColumnName="id")
      */
      private $id_animal;
}

