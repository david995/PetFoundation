<?php

namespace PetsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anuncios
 *
 * @ORM\Table(name="anuncios")
 * @ORM\Entity(repositoryClass="PetsBundle\Repository\AnunciosRepository")
 */
class Anuncios
{
    /**
     * Relationship OneToOne
     * 
     * @ORM\OneToOne(targetEntity="PetsBundle\Entity\Animales", inversedBy="anuncio",cascade={"persist", "remove"})
     */
     protected $animal;
     
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulo", type="string", length=255)
     */
    private $titulo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Categoria", type="string", columnDefinition="enum('Camadas', 'Adopciones', 'Se busca', 'Protectoras')")
     */
    private $categoria;



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
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Anuncios
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

   
   

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Anuncios
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set animal
     *
     * @param \PetsBundle\Entity\Animales $animal
     *
     * @return Anuncios
     */
    public function setAnimal(\PetsBundle\Entity\Animales $animal = null)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return \PetsBundle\Entity\Animales
     */
    public function getAnimal()
    {
        return $this->animal;
    }
    
          public function __toString()
{
    return (string) $this->getAnimal();
} 
}
