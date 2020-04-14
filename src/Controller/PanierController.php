<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderDetail;
use App\Repository\OrderDetailRepository;
use App\Repository\OrderRepository;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;


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

        return $this->redirectToRoute('panier');

    }
    /**
     * @Route("/client/panier/commande", name="commande")
     */
    public function commande(ProduitsRepository $produits, SessionInterface $session)
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




        $order = $this->getDoctrine()
        ->getRepository(Order::class)
        ->findAll();

        $orderDetail = $this->getDoctrine()
        ->getRepository(OrderDetail::class)
        ->findAll();



        $objectManager = $this->getDoctrine()->getManager();

        $faker = \Faker\Factory::create('fr_FR');

        $numero_commande = $faker->numberBetween($min = 10000, $max = 100000);

       
        $order = new Order();
        $order->setDate(new \DateTime('now'));
        $order->setnumero_commande($numero_commande);
        $order->setUser($this->getUser());

        $objectManager->persist($order);
        $objectManager->flush();

        for ($i=0; $i < count($data); $i++) { 
            $orderDetail = new OrderDetail();
            $orderDetail->setOrderId($order);
            $orderDetail->setProduit($data[$i]['product']);
            $orderDetail->setQuantity($data[$i]['quantity']);
            $orderDetail->setPrix($data[$i]['quantity'] * $data[$i]['product']->getPrix());
            $objectManager->persist($orderDetail);
            $objectManager->flush();
        }

        return $this->redirectToRoute("produits");

    }

     /**
     * @Route("/admin/espace/commandes", name="commandes_client")
     */
    public function commandesClient(OrderRepository $orderRepository)
    {

        $order = $orderRepository->findAll();


        return $this->render('commandes/commandesClient.html.twig', [
            "commandes" => $order,

        ]);
    }
     /**
     * @Route("/client/espace/commande", name="commande_client")
     */
    public function commandeClient(OrderDetailRepository $orderDetailRepository)
    {

        $orderDetail = $orderDetailRepository->findAll();

        dd($orderDetail);

        return $this->render('commandes/commandesClient.html.twig', [
            "commandes" => $orderDetail,
        ]);
    }
    
}
