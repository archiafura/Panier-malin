<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\Translator;

class UtilisateursController extends Controller
{
    /**
     * @Route("/utilisateurs", name="utilisateurs")
     */
    public function index()
    {
        $translator = new Translator('en_EN');

        return $this->render('utilisateurs/index.html.twig', [
            'controller_name' => 'UtilisateursController',
        ]);


    }

    /**
     * @Route("/utilisateurs/formulaire", name="inscription_formulaire")
     */

    public function formulaire(Request $requete)
    {
        $utilisateurs = new Utilisateurs();

        $formulaire = $this->createFormBuilder($utilisateurs)
            ->add('nom', TextType::class, array('label' => 'NOM',))
            ->add('prenom', TextType::class, array('label' => 'PRENOM',))
            ->add('adresse', TextType::class, array('label' => 'ADRESSE',))
            ->add('email', TextType::class, array('label' => 'EMAIL',) )
            ->add('zip', NumberType::class, array('label' => 'CODE POSTAL',))
            ->add('pseudo', TextType::class, array('label' => 'PSEUDO',))
            ->add('password', PasswordType::class, array('label' => 'MOT DE PASSE',))
            ->add('password', RepeatedType::class, array('label' => 'REPETER MOT DE PASSE',))
            ->add('interet', ChoiceType::class, array('choices' => array('Fruits' => array('À consommer tel quel' => 'À consommer tel quel', 'À transformer (confitures,compotes..)' => 'À transformer (confitures,compotes..)',), 'Confection de paniers' => array('Paniers de fruits' => 'Paniers de fruits', 'Paniers de légumes' => 'Paniers de légumes', 'Paniers mixte' => 'Paniers mixte',), 'Légumes' => 'Légumes', 'Artisanats' => 'Artisanats',)))
            ->add('statut', ChoiceType::class, array('choices' => array('Particulier' => 'Particulier', 'Professionnel' =>'Professionnel',)))
            ->add('newsletter', CheckboxType::class, array('label' => 'Inscription à la Newsletter', 'required' => false, ))
            ->add('perimetreActivite', ChoiceType::class, array('choices' => array('30' => '30', '60' =>'60',)))
            ->add('Envoyer', SubmitType::class, array('label' => "Envoyer"))

            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid()) {


            $utilisateurs = $formulaire->getData();

            $envoiBDD = $this->getDoctrine()->getManager();
            $envoiBDD->persist($utilisateurs);
            $envoiBDD->flush();
        }

        return $this->render('utilisateurs/index.html.twig',
            array(
                'formulaire' => $formulaire->createView()
            )
        );




    }
}
