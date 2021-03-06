<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use ImagenBundle\Entity\Imagen;


/**
 * User
 * 
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    
     /**
     * Relationship OneToMany
     * 
     * @ORM\OneToMany(targetEntity="AnunciosBundle\Entity\Anuncios", mappedBy="user",cascade={"persist", "remove"})
     */
     protected $anuncios;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * Relationship OneToMany
     * 
     * @ORM\OneToOne(targetEntity="ImagenesBundle\Entity\Imagen", inversedBy="user",cascade={"persist", "remove"})
     */
    private $imagenes;
    
 
    

    /**
     * Add anuncio
     *
     * @param \AnunciosBundle\Anuncios $anuncio
     *
     * @return User
     */
    public function addAnuncio(\AnunciosBundle\Entity\Anuncios $anuncio)
    {
        $this->anuncios[] = $anuncio;

        return $this;
    }

    /**
     * Remove anuncio
     *
     * @param \AnunciosBundle\Anuncios $anuncio
     */
    public function removeAnuncio(\AnunciosBundle\Entity\Anuncios $anuncio)
    {
        $this->anuncios->removeElement($anuncio);
    }

    /**
     * Get anuncios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnuncios()
    {
        return $this->anuncios;
    }
    

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    
  
    public function __toString()
    {
       
            return $this->getUserName();
       

    }



    /**
     * Add imagen
     *
     * @param \ImagenesBundle\Entity\Imagen $imagen
     *
     * @return User
     */
    public function addImagen(\ImagenesBundle\Entity\Imagen $imagen)
    {
        $this->imagen[] = $imagen;

        return $this;
    }

    /**
     * Remove imagen
     *
     * @param \ImagenesBundle\Entity\Imagen $imagen
     */
    public function removeImagen(\ImagenesBundle\Entity\Imagen $imagen)
    {
        $this->imagen->removeElement($imagen);
    }

    /**
     * Get imagen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set imagen
     *
     * @param \ImagenesBundle\Entity\Imagen $imagen
     *
     * @return User
     */
    public function setImagen(\ImagenesBundle\Entity\Imagen $imagen = null)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Set imagenes
     *
     * @param \ImagenesBundle\Entity\Imagen $imagenes
     *
     * @return User
     */
    public function setImagenes(\ImagenesBundle\Entity\Imagen $imagenes = null)
    {
        $this->imagenes = $imagenes;

        return $this;
    }

    /**
     * Get imagenes
     *
     * @return \ImagenesBundle\Entity\Imagen
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }
}
