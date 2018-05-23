<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 17/05/2018
 * Time: 09:51
 */

namespace App\Controller;
use App\Entity\Connexion;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class ConnexionController extends Controller
{
    /**
     * @Route("/connexion", name="connexion")
     */
    public function index()
    {
        return $this->render('connexion/index.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }
    /**
     * @Route("/connexion/formulaire", name="connexion_formulaire")
     */
    public function formulaire(Request $requete)
    {
        $connexionform = new connexion();

        $formulaire = $this->createFormBuilder($connexionform)
            ->add('email', TextType::class)
            ->add('mdp', TextType::class)
            ->add('envoyer', SubmitType::class, array('label' => "je m'enregistre"))
            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid()) {

            $connexionform = $formulaire->getData();
            $envoiBDD = $this->getDoctrine()->getManager();
            $envoiBDD->persist($connexionform);
            $envoiBDD->flush();

            return $this->redirectToRoute('connexionformOK');
        }

        return $this->render('connexion/index.html.twig',
            array(
                'formulaire' => $formulaire->createView(),
            ));
    }

    /**
     * @Route("/connexionformOK", name="connexionformOK")
     */

    public function formulaireOK()
    {
        return $this->render('connexion/connexionformOK.html.twig');
    }

}
