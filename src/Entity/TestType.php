<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestTypeRepository")
 */
class TestType
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private $typeId;
    /**
     * @ORM\Column(type="string")
     */
    private $typeName;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TestOffer", mappedBy="typeid")
     */
    private $type;
    public function __construct()
    {
        $this->type = new ArrayCollection();
    }
    public function gettype(): Collection
    {
        return $this->type;
    }

    public function gettypeId()
    {
        return $this->typeId;
    }
    public function settypeId($tid)
    {
        $this->typeId = $tid;
    }
    public function gettypeName()
    {
        return $this->typeName;
    }
    public function settypeName($tname)
    {
        $this->typeName = $tname;
    }
}
