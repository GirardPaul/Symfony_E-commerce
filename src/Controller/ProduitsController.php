<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\RechercheProduits;
use App\Form\RechercheProduitsType;
use App\Repository\ProduitsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class ProduitsController extends AbstractController
{
    /**
     * @Route("/client/produits", name="produits")
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
            "admin" => false
        ]);
    }
     /**
     * @Route("/client/produit/{id}", name="produit")
     */
    public function produit(Produits $produit)
    {

        return $this->render('produits/produit.html.twig', [
            "produit" => $produit,
            "admin" => false
        ]);

    }
}
