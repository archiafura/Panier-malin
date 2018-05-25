<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormAjoutPdtProController extends Controller
{
    /**
     * @Route("/form/ajout/pdt/pro", name="form_ajout_pdt_pro")
     */
    public function index()
    {
        return $this->render('form_ajout_pdt_pro/index.html.twig', [
            'controller_name' => 'FormAjoutPdtProController',
        ]);
    }
}
