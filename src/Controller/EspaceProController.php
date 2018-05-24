<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EspaceProController extends Controller
{
    /**
     * @Route("/espace/pro", name="espace_pro")
     */
    public function index()
    {
        return $this->render('espace_pro/index.html.twig', [
            'controller_name' => 'EspaceProController',
        ]);
    }
}
