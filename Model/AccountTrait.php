<?php
namespace BlackBoxCode\Pando\AccountTicketBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait AccountTrait
{
    /**
     * @var ArrayCollection<TicketInterface>
     *
     * @ORM\ManyToMany(targetEntity="Ticket", inversedBy="accounts")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $tickets;

    /**
     * {@inheritdoc}
     */
    public function getTickets()
    {
        if (is_null($this->tickets)) $this->tickets = new ArrayCollection();

        return $this->tickets;
    }

    /**
     * {@inheritdoc}
     */
    public function addTicket(TicketInterface $ticket)
    {
        if (is_null($this->tickets)) $this->tickets = new ArrayCollection();
        $this->tickets->add($ticket);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeTicket(TicketInterface $ticket)
    {
        if (is_null($this->tickets)) $this->tickets = new ArrayCollection();

        $this->tickets->removeElement($ticket);
    }
}
