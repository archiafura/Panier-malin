<?php

namespace App\Controller;

use App\Entity\FormAjoutProduitPro;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;

class FormAjoutProduitProController extends Controller
{
    /**
     * @Route("/form/ajout/pdt/pro", name="form_ajout_pdt_pro")
     */
    public function index()
    {
        return $this->render('form_ajout_pdt_pro/index.html.twig', [
            'controller_name' => 'FormAjoutProduitProController',
        ]);
    }

    /**
     * @Route("/espace/pro/formulaire", name="espace_pro")
     */
    public function formulaireAjoutPdt(Request $requete)
    {

    }

}
