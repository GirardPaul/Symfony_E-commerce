<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Form\CategoriesType;
use App\Repository\CategoriesRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Doctrine\ORM\EntityManagerInterface;

class AdminCategoriesController extends AbstractController
{
    /**
     * @Route("/admin/categories", name="admin_categories")
     */
    public function index(CategoriesRepository $categoriesRepository)
    {
        $categories = $categoriesRepository->findAll();
        return $this->render('categories/categories.html.twig', [
            "categories" => $categories,
            "admin" => true
        ]);
    }

    /**
     * @Route("admin/categories/creation", name="creation_categories")
     * @Route("/admin/categories/{id}", name="modif_categories", methods="GET|POST")
     */
    public function modification(Categories $categories = null, HttpFoundationRequest $request, EntityManagerInterface $objectManager)
    {

        if(!$categories){
            $categories = new Categories();
        }

        $form = $this->createForm(CategoriesType::class, $categories);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $objectManager->persist($categories);
            $objectManager->flush();
            return $this->redirectToRoute("admin_categories");
        }

        return $this->render('admin_categories/modificationCategorie.html.twig', [
            "categorie" => $categories,
            "form" => $form->createView(),
            "admin" => true,
            "isModification" => $categories->getId() !== null
        ]);


    }

    /**
     * @Route("/admin/categories/{id}", name="supp_categories", methods="SUP")
     */
    public function suppression(Categories $categories, HttpFoundationRequest $request, EntityManagerInterface $objectManager)
    {
        if($this->isCsrfTokenValid("SUP".$categories->getId(), $request->get("_token"))){
            $objectManager->remove($categories);
            $objectManager->flush();
            return $this->redirectToRoute("admin_categories");
        }


    }
}
