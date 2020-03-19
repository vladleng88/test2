<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index( )
    {
        $fullPathToXML = $this->getParameter('kernel.project_dir') . "/public/upload/import/pricelist.xml";
        $string = file_get_contents($fullPathToXML);
        $document = new \SimpleXMLElement($string);
        $category = $document->shop->categories->category[1];
        $attributes = $category->attributes();
        $id =  $attributes->id;
            $ParentId =  $attributes->ParentId;
        return $this->render('main/index.html.twig', [
            'document' => $document,
            'category' => $category,
            'attributes' => $attributes,
            'id' => $id,
            'ParentId' => $ParentId,

        ]);
    }
}
