<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestCategoryRepository")
 */
class TestCategory
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $parentId;

    /**
     * @ORM\Column(type="string")
     */
    private $categoryName;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TestOffer", mappedBy="categoryId")
     */
    private $category;
    public function __construct()
{
    $this->category = new ArrayCollection();
}
    public function getcategory(): Collection
    {
        return $this->category;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getparentId()
    {
        return $this->parentId;
    }
    public function setparentId($parentId)
    {
        $this->parentId=$parentId;
    }
    public function getcategoryName()
    {
        return $this->categoryName;
    }
    public function setcategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }



}
