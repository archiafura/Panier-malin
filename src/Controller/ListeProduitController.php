<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListeProduitController extends Controller
{
    /**
     * @Route("/liste/produit", name="liste_produit")
     */
    public function index()
    {
        return $this->render('liste_produit/index.html.twig', [
            'controller_name' => 'ListeProduitController',
        ]);
    }
}
