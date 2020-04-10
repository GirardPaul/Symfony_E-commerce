<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\RechercheProduits;
use App\Entity\Utilisateur;
use App\Form\ProduitsType;
use App\Form\RechercheProduitsType;
use App\Repository\ProduitsRepository;
use App\Repository\UtilisateurRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Doctrine\ORM\EntityManagerInterface;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/produits", name="admin_produits")
     */
    public function index(ProduitsRepository $produitsRepository, PaginatorInterface $paginatorInterface, HttpFoundationRequest $request)
    {
        $rechercheProduits = new RechercheProduits();

        $form = $this->createForm(RechercheProduitsType::class, $rechercheProduits);

        $form->handleRequest($request);




        $produits = $paginatorInterface->paginate(
            $produitsRepository->findAllWithPagination($rechercheProduits), /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );
        return $this->render('produits/produits.html.twig', [
            "produits" => $produits,
            "form" => $form->createView(),
            "admin" => true
        ]);
    }
    /**
     * @Route("admin/produits/creation", name="creation_produits")
     * @Route("/admin/produits/{id}", name="modif_produits", methods="GET|POST")
     */
    public function modification(Produits $produits = null, HttpFoundationRequest $request, EntityManagerInterface $objectManager)
    {
        if(!$produits){
            $produits = new Produits();
        }
        $form = $this->createForm(ProduitsType::class, $produits);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $objectManager->persist($produits);
            $objectManager->flush();
            return $this->redirectToRoute("admin_produits");
        }

        return $this->render('admin/modificationProduit.html.twig', [
            "produit" => $produits,
            "form" => $form->createView(),
            "isModification" => $produits->getId() !== null
        ]);

    }
      /**
     * @Route("/admin/produits/{id}", name="supp_produits", methods="SUP")
     */
    public function suppression(Produits $produit, HttpFoundationRequest $request, EntityManagerInterface $objectManager)
    {
        if($this->isCsrfTokenValid("SUP".$produit->getId(), $request->get("_token"))){
            $objectManager->remove($produit);
            $objectManager->flush();
            return $this->redirectToRoute("admin_produits");
        }
    }

    /**
     * @Route("/admin/utilisateurs", name="espace_admin")
     */
    public function espaceAdmin(UtilisateurRepository $utilisateurRepository)
    {
        $utilisateurs = $utilisateurRepository->findAll();
        return $this->render('admin/espaceAdmin.html.twig', [
            "utilisateurs" => $utilisateurs
        ]);
    }
     /**
     * @Route("/admin/utilisateurs/{id}", name="supp_utilisateur", methods="SUP")
     */
    public function suppressionUtilisateur(Utilisateur $utilisateur, HttpFoundationRequest $request, EntityManagerInterface $objectManager)
    {
        if($this->isCsrfTokenValid("SUP".$utilisateur->getId(), $request->get("_token"))){
            $objectManager->remove($utilisateur);
            $objectManager->flush();
            return $this->redirectToRoute("espace_admin");
        }
    }

    //  /**
    //  * @Route("/client/espace/{id}", name="espace_admin")
    //  */
    // public function espaceAdmin(UtilisateurRepository $utilisateurRepository)
    // {
    //     $utilisateurs = $utilisateurRepository->findAll();
    //     return $this->render('admin/espaceAdmin.html.twig', [
    //         "utilisateurs" => $utilisateurs
    //     ]);
    // }
}
