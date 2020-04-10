<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminSecuController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(HttpFoundationRequest $request, EntityManagerInterface $objectManager, UserPasswordEncoderInterface $encoder)
    {
        $utilisateur = new Utilisateur();

        $form = $this->createForm(InscriptionType::class, $utilisateur);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $passwordCrypte = $encoder->encodePassword($utilisateur, $utilisateur->getPassword());
            $utilisateur->setPassword($passwordCrypte);
            $objectManager->persist($utilisateur);
            $objectManager->flush();
            return $this->redirectToRoute("produits");
        }

        return $this->render('admin_secu/inscription.html.twig', [
            "form" => $form->createView()
        ]);
    }
    /**
     * @Route("/login", name="connexion")
     */
    public function login()
    {
        return $this->render('admin_secu/login.html.twig');
    }
    /**
     * @Route("/logout", name="deconnexion")
     */
    public function deconnexion()
    {
        return $this->render('home/index.html.twig');
    }
}
