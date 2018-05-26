<?php

namespace App\Controller;

use App\Entity\AddEventForm;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FormAddEventController extends Controller
{
    /**
     * @Route("/form/add/event", name="form_add_event")
     */
    public function index()
    {
        return $this->render('form_add_event/index.html.twig', [
            'controller_name' => 'FormAddEventController',
        ]);
    }

    /**
     * @Route("/espace/pro/formulaire", name="espace_pro")
     */
    public function formulaireAjoutEvent(Request $requete)
    {

    }


}
