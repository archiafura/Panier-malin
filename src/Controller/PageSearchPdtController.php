<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageSearchPdtController extends Controller
{
    /**
     * @Route("/page/search/pdt", name="page_search_pdt")
     */
    public function index()
    {
        return $this->render('page_search_pdt/index.html.twig', [
            'controller_name' => 'PageSearchPdtController',
        ]);
    }


//    public function afficheImg()
//    {
//        $files = glob("img/*.*"); //precise le repertoire
//
//
//        foreach ($files as $key => $value) {
//            echo '<img src="'. $value .'"/>';
//        }
//    }
}
