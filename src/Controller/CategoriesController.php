<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    /**
     * @Route("/categories", name="categories")
     */
    public function index(CategoriesRepository $categoriesRepository)
    {
        $categories = $categoriesRepository->findAll();
        return $this->render('categories/categories.html.twig', [
            "categories" => $categories
        ]);
    }
}
