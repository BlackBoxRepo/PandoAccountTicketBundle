<?php
namespace BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait AccountTrait
{
    /**
     * @ORM\OneToOne(targetEntity="Ticket", mappedBy="account")
     */
    private $tickets;
}
