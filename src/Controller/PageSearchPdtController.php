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
        $files = glob("img/*.*");

        return $this->render('page_search_pdt/index.html.twig', $files
        );


    }










    ///..............NE FONCTIONNE PAS....................//
//
//    public function affichageImg(){
//        $affichageImgBoucle="";
//        for ($i = 0; $i<count($files); $i++){
//            $affichageImgBoucle.="image"."=>"."$files[$i]".",";
//        }
//       return $affichageImgBoucle;
//    }

}
