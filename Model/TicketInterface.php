<?php
namespace BlackBoxCode\Pando\AccountTicketBundle\Model;

interface TicketInterface extends \BlackBoxCode\Pando\TicketBundle\Model\TicketInterface
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
