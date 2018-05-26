<?php

namespace App\Controller;
use App\Entity\AddEventForm;
use App\Entity\FormAjoutProduitPro;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;



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


class FormAjoutPdtProController extends Controller
{
    /**
     * @Route("/espace/pro/formulaire", name="espace_pro")
     */
    public function formulaireAjoutPdt(Request $requete)
    {
        $formAjout = new FormAjoutProduitPro();

        $formulaire = $this->createFormBuilder($formAjout)
            ->add('TypePdt', TextType::class, array('label'  => 'Produit:',) )
            ->add('duree', TextType::class, array('label'  => 'Durée de disponibilité:',))
            ->add('horaire', TextType::class, array('label'  => 'Horaire:',))
            ->add('conseil', TextType::class, array('label'  => 'Conseil d\'utilisation:',))
            ->add('image', SearchType::class, array('label'  => 'Ajouter une image:',))
            ->add('envoyer', SubmitType::class)
            ->getForm();

        $formulaire->handleRequest($requete);


        //..........CONDITION DE VALIDATION................//

        //.................................................//

        return $this->render('espace_pro/index.html.twig',
            array(
                'formulaire' => $formulaire->createView()
            )
        );
    }

}


class FormAddEventController extends Controller
{
    /**
     * @Route("/espace/pro/formulaire", name="espace_pro")
     */
    public function formulaireAjoutEvent(Request $requete)
    {
        $formEventAjout = new AddEventForm();

        $formulaireEvent = $this->createFormBuilder($formEventAjout)
            ->add('eventType', TextType::class, array('label' => 'Type d\'evenement:',))
            ->add('dateEvent', TextType::class, array('label' => 'date de l\'evenement:',))
            ->add('lieu', TextType::class, array('label' => 'lieu de l\'evenement:',))
            ->add('envoyer', SubmitType::class)
            ->getForm();

        $formulaireEvent->handleRequest($requete);

        //..........CONDITION DE VALIDATION................//

        //.................................................//

        return $this->render('espace_pro/index.html.twig',
            array(
                'formulaireEvent' => $formulaireEvent->createView()
            )
        );
    }
}