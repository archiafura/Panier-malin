<?php

namespace App\Controller;
use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    /**
     * @Route("/contact/formulaire", name="contact_formulaire")
     */
    public function formulaire(Request $requete)
    {
        $contactform = new contact();

        $formulaire = $this->createFormBuilder($contactform)
            ->add('prenom', TextType::class, array('label' => 'PRENOM',)  )
            ->add('nom', TextType::class, array('label' => 'NOM',)  )
            ->add('email', EmailType::class, array('label' => 'EMAIL',)  )
            ->add('message', TextareaType::class, array('label' => 'VOTRE MESSAGE', 'attr' => array('cols' => '100', 'rows' => '10'))  )
            ->add('envoyer', SubmitType::class, array('label' => "ENVOYER"))
            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid()) {

            $contactform = $formulaire->getData();
            $envoiBDD = $this->getDoctrine()->getManager();
            $envoiBDD->persist($contactform);
            $envoiBDD->flush();

            return $this->redirectToRoute('contactformOK');
        }

        return $this->render('contact/index.html.twig',
            array(
                'formulaire' => $formulaire->createView(),
            ));
    }

    /**
     * @Route("/contactformOK", name="contactformOK")
     */

    public function formulaireOK()
    {
        return $this->render('contact/contactformOK.html.twig');
    }




    public function index($name, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'emails/registration.html.twig',
                    array('name' => $name)
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;

        $mailer->send($message);

        return $this->render(...);
    }

}
