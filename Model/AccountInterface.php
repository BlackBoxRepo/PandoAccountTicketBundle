<?php
namespace BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface AccountInterface extends \BlackBoxCode\Pando\Bundle\AccountBundle\Model\AccountInterface
{
    /**
     * @return ArrayCollection<TicketInterface>
     */
    public function getTickets();

    /**
     * @param TicketInterface $ticket
     * @return $this
     */
    public function addTicket(TicketInterface $ticket);

    /**
     * @param TicketInterface $ticket
     */
    public function removeTicket(TicketInterface $ticket);
}
