<?php


namespace App\Helper;


use App\Entity\TestCategory;
use App\Entity\TestEssence;
use App\Entity\TestOffer;
use App\Entity\TestType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use XMLReader;

class TestParserXMLHelper
{
    protected $ci;
    protected $em;

    /**
     * CategoryParserHelper constructor.
     * @param $ci
     * @param $em
     */
    public function __construct(ContainerInterface $ci, EntityManagerInterface $em)
    {
        $this->ci = $ci;
        $this->em = $em;
    }



    public function parseXml($string, OutputInterface $output)
    {
        $document = new \SimpleXMLElement($string);

        $categories = $document->shop->categories->category;
        foreach ($categories as $c) {
            $attr = $c->attributes();
            $category = new TestCategory();
            $category->setId($attr->id);
            $category->setparentId($attr->ParentId);
            $category->setcategoryName($c);
            /*$output->writeln([
                'id:'. $category->getId(). 'ParentId:'. $category->getparentId().'CategoryName'.$category->getcategoryName()
            ]);*/
            $is_category_exist = $this->em->getRepository(TestCategory::class)
                ->findOneBy(['id' => $category->getId()]);
            if (!$is_category_exist) {
                $this->em->persist($category);
            }
        }

        $essences = $document->shop->essences->essence;
        foreach ($essences as $e) {
            $attr = $e->attributes();
            $essence = new TestEssence();
            $essence->setessenceId($attr->EssenceId);
            $essence->setessanceName($e);
            $output->writeln([
                'id:' . $essence->getessenceId() . 'EssenceName' . $essence->getessenceName()
            ]);
            $is_essence_exist = $this->em->getRepository(TestEssence::class)
                ->findOneBy(['essenceId' => $essence->getessenceId()]);
            if (!$is_essence_exist) {
                $this->em->persist($essence);
            }
        }

        $types = $document->shop->types->essence;
        foreach ($types as $t) {
            $attr = $t->attributes();
            $type= new TestType();
            $type->settypeId($attr->TypeId);
            $type->settypeName($t);
            $output->writeln([
                'id:' . $type->gettypeId() . 'TypeName' . $type->gettypeName()
            ]);
            $is_type_exist = $this->em->getRepository(TestType::class)
                ->findOneBy(['typeId' => $type->gettypeId()]);
            if (!$is_type_exist) {
                $this->em->persist($type);
            }
        }


        $products = $document->shop->offers->offer;
        foreach ($products as $p ) {
            $product = new TestOffer();
            $product->seturl($p->url);
            $product->setpriceRetail($p->priceRetail);
            $product->setprice2($p->Price2);
            $product->setprice3($p->Price3);
            $product->setcategoryId($p->categoryId);
            $product->setxmlId($p->xmlId);
            $product->setproductName($p->productName);
            $product->setessenceId($p->essenceId);
            $product->settypeid($p->typeid);
            $products_param = $p->param;
            foreach ($products_param as $pp) {
                $attr = $pp->param->attributes();
                $product->setbarcode($attr->baracode);
                $product->setarticle($attr->article);
                $product->setitemWeight($attr->ItemWeight);
                $product->setitemVolume($attr->ItemVolume);
                $product->setitemLength($attr->ItemLength);
                $product->setitemWidth($attr->ItemWidth);
                $product->setitemHeigth($attr->ItemHeigth);
                $product->setcheckRecomendedRetailPrice($attr->CheckRecomendedRetailPrice);
                $product->setrestrictedAccess($attr->RestrictedAccess);
                $product->setactuality($attr->Actuality);
                $product->setpackQty($attr->PackQty);
                $product->setbrandName($attr->BrandName);
                $product->setessenceName($attr->EssenceName);
                $product->settype($attr->Type);
                $product->setdescription($attr->Description);
                $product->setfullName($attr->FullName);
            }


            $output->writeln([
                'id:' . $product->getId() . 'ProductFullName' . $product->getfullName(). 'PriceRetail'. $product->getpriceRetail()
            ]);
            $is_product_exist = $this->em->getRepository(TestOffer::class)
                ->findOneBy(['id' => $product->getId()]);
            if (!$is_type_exist) {
                $this->em->persist($type);
            }
        }

        $this->em->flush();

        $output->writeln([
            'Parse is OK!'
        ]);
    }
}
