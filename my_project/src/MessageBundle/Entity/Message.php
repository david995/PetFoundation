<?php

namespace MessageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="MessageBundle\Repository\MessageRepository")
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $userSending;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreate", type="datetimetz")
     */
    private $dateCreate;
    
    /**
     * @var string
     *
     * @ORM\Column(name="matter", type="string", length=255)
     */
    private $matter;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;


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
     * Set userSending
     *
     * @param string $userSending
     *
     * @return Message
     */
    public function setUserSending($userSending)
    {
        $this->userSending = $userSending;

        return $this;
    }

    /**
     * Get userSending
     *
     * @return string
     */
    public function getUserSending()
    {
        return $this->userSending;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Message
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * Set matter
     *
     * @param string $matter
     *
     * @return Message
     */
    public function setMatter($matter)
    {
        $this->matter = $matter;

        return $this;
    }

    /**
     * Get matter
     *
     * @return string
     */
    public function getMatter()
    {
        return $this->matter;
    }
}

