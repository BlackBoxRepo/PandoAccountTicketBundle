<?php
namespace BlackBoxCode\Pando\AccountTicketBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait TicketTrait
{
    /**
     * @var ArrayCollection<AccountInterface>
     *
     * @ORM\ManyToMany(targetEntity="Account", mappedBy="tickets")
     */
    private $accounts;

    /**
     * {@inheritdoc}
     */
    public function getAccount()
    {
        if (is_null($this->accounts)) $this->accounts = new ArrayCollection();

        return $this->accounts->first() ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccount(AccountInterface $account)
    {
        if (is_null($this->accounts)) $this->accounts = new ArrayCollection();
        $this->accounts->clear();
        $this->accounts->add($account);

        return $this;
    }
}
