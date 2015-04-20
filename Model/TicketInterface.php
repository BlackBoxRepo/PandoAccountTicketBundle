<?php
namespace BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model;

interface TicketInterface extends \BlackBoxCode\Pando\Bundle\TicketBundle\Model\TicketInterface
{
    /**
     * @return AccountInterface
     */
    public function getAccount();

    /**
     * @param AccountInterface $account
     * @return $this
     */
    public function setAccount(AccountInterface $account);
}
