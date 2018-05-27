<?php

namespace App\Controller;
use App\Entity\Inscription;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class InscriptionController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index()
    {
        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'InscriptionController',
        ]);
    }


    /**
     * @Route("/inscription/formulaire", name="inscription_formulaire")
     */

    public function formulaire(Request $requete)
    {
        $inscription = new inscription();

        $formulaire = $this->createFormBuilder($inscription)
            ->add('nom', TextType::class, array('label' => 'NOM',))
            ->add('prenom', TextType::class,array('label' => 'PRENOM',)   )
            ->add('pseudo', TextType::class, array('label' => 'PSEUDO',))
            ->add('email', EmailType::class, array('label' => 'EMAIL',)  )
            ->add('adresse', TextType::class, array('label' => 'ADRESSE',) )
            ->add('zip', NumberType::class, array('label' => 'CODE POSTAL',) )
            ->add('mdp', PasswordType::class, array('label' => 'MOT DE PASSE',))
            ->add('mdp', RepeatedType::class, array('label' => 'REPETER MOT DE PASSE',))
            ->add('statut', ChoiceType::class, array('choices' => array('Particulier' => 'Particulier', 'Professionnel' =>'Professionnel',)))
            ->add('interet', CheckboxType::class, array('label' => 'fruits', ))
            ->add('envoyer', SubmitType::class, array('label' => "Envoyer"))
            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid()) {

            $inscription = $formulaire->getData();
            $envoiBDD = $this->getDoctrine()->getManager();
            $envoiBDD->persist($inscription);
            $envoiBDD->flush();

            return $this->redirectToRoute('inscriptionformOK');
        }

        return $this->render('inscription/index.html.twig',
            array(
                'formulaire' => $formulaire->createView(),
            ));
    }

    /**
     * @Route("/inscriptionformOK", name="inscriptionformOK")
     */

    public function formulaireOK()
    {
        return $this->render('inscription/inscriptionformOK.html.twig');
    }
}
