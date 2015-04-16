<?php
namespace BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait TicketTrait
{
    /**
     * @ORM\OneToOne(targetEntity="Account", inversedBy="tickets")
     * @ORM\JoinColumn(nullable=false, unique=true)
     */
    private $account;
}
