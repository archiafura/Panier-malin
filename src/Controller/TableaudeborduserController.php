<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TableaudeborduserController extends Controller
{
    /**
     * @Route("/tableaudeborduser", name="tableaudeborduser")
     */
    public function index()
    {
        return $this->render('tableaudeborduser/index.html.twig', [
            'controller_name' => 'TableaudeborduserController',
        ]);
    }
}
