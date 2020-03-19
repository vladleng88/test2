<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestEssenceRepository")
 */
class TestEssence
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private $essenceId;
    /**
     * @ORM\Column(type="string")
     */
    private $essenceName;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TestOffer", mappedBy="essenceId")
     */
    private $essence;
    public function __construct()
    {
        $this->essense = new ArrayCollection();
    }
    public function getessence(): Collection
    {
        return $this->essence;
    }

    public function getessenceId()
    {
        return $this->essenceId;
    }
    public function setessenceId($eid)
    {
        $this->essenceId = $eid;
    }
    public function getessenceName()
    {
        return $this->essenceName;
    }
    public function setessanceName($ename)
    {
        $this->essenceName = $ename;
    }
}
