<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestOfferRepository")
 */
class TestOffer
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $priceRetail;
    /**
     * @ORM\Column(type="integer")
     */
    private $price2;
    /**
     * @ORM\Column(type="integer")
     */
    private $price3;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TestCategory", inversedBy = "category")
     **/
    private $categoryId;
    /**
     * @ORM\Column(type="text")
     */
    private $name;
    /**
     * @ORM\Column(type="string")
     */
    private $xmlId;
    /**
     * @ORM\Column(type="text")
     */
    private $productName;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TestEssence", inversedBy = "essence")
     */
    private $essenceId;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TestType", inversedBy = "type")
     */
    private $typeid;
    /**
     * @ORM\Column(type="string")
     */
    private $barcode;
    /**
     * @ORM\Column(type="string")
     */
    private $article;
    /**
     * @ORM\Column(type="integer")
     */
    private $itemWeight;
    /**
     * @ORM\Column(type="integer")
     */
    private $itemVolume;
    /**
     * @ORM\Column(type="integer")
     */
    private $itemLength;
    /**
     * @ORM\Column(type="integer")
     */
    private $itemWidth;
    /**
     * @ORM\Column(type="integer")
     */
    private $itemHeigth;
    /**
     * @ORM\Column(type="boolean")
     */
    private $checkRecomendedRetailPrice;
    /**
     * @ORM\Column(type="boolean")
     */
    private $restrictedAccess;
    /**
     * @ORM\Column(type="boolean")
     */
    private $actuality;
    /**
     * @ORM\Column(type="integer")
     */
    private $packQty;
    /**
     * @ORM\Column(type="text")
     */
    private $brandName;
    /**
     * @ORM\Column(type="string")
     */
    private $essenceName;
    /**
     * @ORM\Column(type="string")
     */
    private $type;
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    /**
     * @ORM\Column(type="text")
     */
    private $fullName;
    /**
     * @ORM\Column(type="string")
     */
    private $url;



    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getcategoryId()
    {
        return $this->categoryId;
    }
    public function setcategoryId($catId)
    {
        $this->categoryId = $catId;
    }

    public function getpriceRetail()
    {
        return $this->priceRetail;
    }
    public function setpriceRetail($pr)
    {
        $this->priceRetail = $pr;
    }

    public function getprice2()
    {
        return $this->price2;
    }
    public function setprice2($p2)
    {
        $this->price2 = $p2;
    }

    public function getprice3()
    {
        return $this->price3;
    }
    public function setprice3($p3)
    {
        $this->price3 = $p3;
    }

    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }

    public function getxmlId()
    {
        return $this->xmlId;
    }
    public function setxmlId($xmlId)
    {
        $this->xmlId = $xmlId;
    }

    public function getproductName()
    {
        return $this->productName;
    }
    public function setproductName($productName)
    {
        $this->productName = $productName;
    }

    public function getessenceId()
    {
        return $this->essenceId;
    }
    public function setessenceId($essenceId)
    {
        $this->essenceId = $essenceId;
    }

    public function gettypeid()
    {
        return $this->typeid;
    }
    public function settypeid($typeid)
    {
        $this->typeid = $typeid;
    }

    public function getbarcode()
    {
        return $this->barcode;
    }
    public function setbarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    public function getarticle()
    {
        return $this->article;
    }
    public function setarticle($article)
    {
        $this->article = $article;
    }

    public function getitemWeight()
    {
        return $this->itemWeight;
    }
    public function setitemWeight($itemWeight)
    {
        $this->itemWeight = $itemWeight;
    }

    public function getitemVolume()
    {
        return $this->itemVolume;
    }
    public function setitemVolume($itemVolume)
    {
        $this->itemVolume = $itemVolume;
    }

    public function getitemLength()
    {
        return $this->itemLength;
    }
    public function setitemLength($itemLength)
    {
        $this->itemLength = $itemLength;
    }

    public function getitemWidth()
    {
        return $this->itemWidth;
    }
    public function setitemWidth($itemWidth)
    {
        $this->itemWidth = $itemWidth;
    }

    public function getitemHeigth()
    {
        return $this->itemHeigth;
    }
    public function setitemHeigth($itemHeigth)
    {
        $this->itemHeigth = $itemHeigth;
    }

    public function getcheckRecomendedRetailPrice()
    {
        return $this->checkRecomendedRetailPrice;
    }
    public function setcheckRecomendedRetailPrice($checkRecomendedRetailPrice)
    {
        $this->checkRecomendedRetailPrice = $checkRecomendedRetailPrice;
    }

    public function getrestrictedAccess()
    {
        return $this->restrictedAccess;
    }
    public function setrestrictedAccess($restrictedAccess)
    {
        $this->restrictedAccess = $restrictedAccess;
    }

    public function getactuality()
    {
        return $this->actuality;
    }
    public function setactuality($actuality)
    {
        $this->actuality = $actuality;
    }

    public function getpackQty()
    {
        return $this->packQty;
    }
    public function setpackQty($packQty)
    {
        $this->packQty = $packQty;
    }

    public function getbrandName()
    {
        return $this->brandName;
    }
    public function setbrandName($brandName)
    {
        $this->brandName = $brandName;
    }

    public function getessenceName()
    {
        return $this->essenceName;
    }
    public function setessenceName($essenceName)
    {
        $this->essenceName = $essenceName;
    }

    public function gettype()
    {
        return $this->type;
    }
    public function settype($type)
    {
        $this->type = $type;
    }

    public function getdescription()
    {
        return $this->description;
    }
    public function setdescription($description)
    {
        $this->description = $description;
    }

    public function getfullName()
    {
        return $this->fullName;
    }
    public function setfullName($fullName)
    {
        $this->fullName = $fullName;
    }

    public function geturl()
    {
        return $this->url;
    }
    public function seturl($url)
    {
        $this->url = $url;
    }

}
