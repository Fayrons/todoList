<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Tests\StringableObject;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketRepository")
 */
class Ticket
{

    private $states = [
       1 => 'URGENT',
       2 => 'NORMAL'
    ];

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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer")
     */
    private $state;

    /**
     * @var \DateTimeImmutable
     *
     * @ORM\Column(name="date_of_execution", type="datetime")
     */
    private $dateOfExecution;


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
     * Set title
     *
     * @param string $title
     *
     * @return Ticket
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Ticket
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Ticket
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set $dateOfExecution
     *
     * @param \DateTimeImmutable $dateCreation
     *
     * @return Ticket
     */
    public function setDateOfExecution($dateOfExecution)
    {
        $this->dateOfExecution = $dateOfExecution;

        return $this;
    }

    /**
     * Get $dateOfExecution
     *
     * @return \DateTimeImmutable
     */
    public function getDateOfExecution()
    {
        return $this->dateOfExecution;
    }

    /**
     * @param $state
     * @return string
     */
    public function getCurrentState(){
        return $this->states[$this->state];
    }
}

