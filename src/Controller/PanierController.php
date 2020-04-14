<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierController extends AbstractController
{
    /**
     * @Route("/client/panier", name="panier")
     */
    public function index(SessionInterface $session, ProduitsRepository $produits)
    {
        $panier = $session->get('panier', []);

        $data = [];

        foreach($panier as $id => $quantity){
            $data[] = [
                'product' => $produits->find($id),
                'quantity' => $quantity
            ];
        }

        $total = 0;

        foreach($data as $item){
            $totalitem = $item['product']->getPrix() * $item['quantity'];
            $total += $totalitem;
        }

        // dd($data);
        return $this->render('panier/panier.html.twig', [
            'data' => $data,
            'total' => $total
        ]);
    }

    /**
     * @Route("/client/panier/add/{id}", name="add_products")
     */
    public function add($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{

            $panier[$id] = 1;
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/client/panier/remove/{id}", name="remove_products")
     */
    public function remove($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('produits');

    }
}
