<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');

        $categorie1 = new Categories();
        $categorie1->setLibelle("Apple")
        ->setImage("apple.png");
        $manager->persist($categorie1);

        $categorie2 = new Categories();
        $categorie2->setLibelle("Samsung")
        ->setImage("samsung.png");
        $manager->persist($categorie2);

        $categorie3 = new Categories();
        $categorie3->setLibelle("Huawei")
        ->setImage("huawei.jpg");
        $manager->persist($categorie3);


        // $produit1 = new Produits();
        // $produit1->setNom("Iphone 8")
        // ->setImage("iphone8.jpeg")
        // ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        // ->setPrix($faker->numberBetween($min = 400, $max = 650))
        // ->setCategories($categorie1);
        // $manager->persist($produit1);

        // $produit2 = new Produits();
        // $produit2->setNom("Iphone 6")
        // ->setImage("iphone6.jpg")
        // ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        // ->setPrix($faker->numberBetween($min = 300, $max = 450))
        // ->setCategories($categorie1);
        // $manager->persist($produit2);

        // $produit3 = new Produits();
        // $produit3->setNom("Iphone X")
        // ->setImage("iphonex.jpg")
        // ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        // ->setPrix($faker->numberBetween($min = 480, $max = 800))
        // ->setCategories($categorie1);
        // $manager->persist($produit3);

        // $produit4 = new Produits();
        // $produit4->setNom("Samsung Galaxy S10")
        // ->setImage("s10.jpg")
        // ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        // ->setPrix($faker->numberBetween($min = 450, $max = 730))
        // ->setCategories($categorie2);
        // $manager->persist($produit4);

        // $produit5 = new Produits();
        // $produit5->setNom("Samsung Galaxy S8")
        // ->setImage("s8.jpg")
        // ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        // ->setPrix($faker->numberBetween($min = 300, $max = 450))
        // ->setCategories($categorie2);
        // $manager->persist($produit5);

        // $produit6 = new Produits();
        // $produit6->setNom("Samsung Galaxy Note 10")
        // ->setImage("note10.jpg")
        // ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        // ->setPrix($faker->numberBetween($min = 500, $max = 650))
        // ->setCategories($categorie2);
        // $manager->persist($produit6);

        // $produit7 = new Produits();
        // $produit7->setNom("Huawei P30")
        // ->setImage("p30.jpg")
        // ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        // ->setPrix($faker->numberBetween($min = 400, $max = 500))
        // ->setCategories($categorie3);
        // $manager->persist($produit7);

        // $produit8 = new Produits();
        // $produit8->setNom("Huawei P20")
        // ->setImage("p-20.png")
        // ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        // ->setPrix($faker->numberBetween($min = 280, $max = 390))
        // ->setCategories($categorie3);
        // $manager->persist($produit8);

        // $produit9 = new Produits();
        // $produit9->setNom("Huawei Mate 20 Pro")
        // ->setImage("m20-pro.png")
        // ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        // ->setPrix($faker->numberBetween($min = 300, $max = 420))
        // ->setCategories($categorie3);
        // $manager->persist($produit9);
        

            $rand = rand(4,7);
            for ($i=1; $i < $rand; $i++) { 

                $produit1 = new Produits();
                $produit1->setNom("Iphone 8")
                ->setImage("iphone8.jpeg")
                ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 400, $max = 650))
        ->setCategories($categorie1);
        $manager->persist($produit1);

        $produit2 = new Produits();
        $produit2->setNom("Iphone 6")
        ->setImage("iphone6.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 300, $max = 450))
        ->setCategories($categorie1);
        $manager->persist($produit2);

        $produit3 = new Produits();
        $produit3->setNom("Iphone X")
        ->setImage("iphonex.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 480, $max = 800))
        ->setCategories($categorie1);
        $manager->persist($produit3);

        $produit4 = new Produits();
        $produit4->setNom("Samsung Galaxy S10")
        ->setImage("s10.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 450, $max = 730))
        ->setCategories($categorie2);
        $manager->persist($produit4);

        $produit5 = new Produits();
        $produit5->setNom("Samsung Galaxy S8")
        ->setImage("s8.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 300, $max = 450))
        ->setCategories($categorie2);
        $manager->persist($produit5);

        $produit6 = new Produits();
        $produit6->setNom("Samsung Galaxy Note 10")
        ->setImage("note10.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 500, $max = 650))
        ->setCategories($categorie2);
        $manager->persist($produit6);

        $produit7 = new Produits();
        $produit7->setNom("Huawei P30")
        ->setImage("p30.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 400, $max = 500))
        ->setCategories($categorie3);
        $manager->persist($produit7);

        $produit8 = new Produits();
        $produit8->setNom("Huawei P20")
        ->setImage("p-20.png")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 280, $max = 390))
        ->setCategories($categorie3);
        $manager->persist($produit8);

        $produit9 = new Produits();
        $produit9->setNom("Huawei Mate 20 Pro")
        ->setImage("m20-pro.png")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 300, $max = 420))
        ->setCategories($categorie3);
        $manager->persist($produit9);

        $produit10 = new Produits();
        $produit10->setNom("Iphone 7")
        ->setImage("iphone7.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 300, $max = 420))
        ->setCategories($categorie1);
        $manager->persist($produit10);

        $produit11 = new Produits();
        $produit11->setNom("Iphone 11 Pro")
        ->setImage("iphone11-pro.png")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 750, $max = 950))
        ->setCategories($categorie1);
        $manager->persist($produit11);

        $produit12 = new Produits();
        $produit12->setNom("Samsung Galaxy S7")
        ->setImage("s7.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 180, $max = 250))
        ->setCategories($categorie2);
        $manager->persist($produit12);

        $produit13 = new Produits();
        $produit13->setNom("Samsung Galaxy S20")
        ->setImage("s20.jpeg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 780, $max = 950))
        ->setCategories($categorie2);
        $manager->persist($produit13);
        
        $produit14 = new Produits();
        $produit14->setNom("Huawei Y9")
        ->setImage("y9.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 100, $max = 180))
        ->setCategories($categorie3);
        $manager->persist($produit14);
        
        $produit15 = new Produits();
        $produit15->setNom("Huawei Mate 30 Pro")
        ->setImage("mate30-pro.jpg")
        ->setEtat($faker->regexify("[A-C]{1}"))
        ->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
        ->setPrix($faker->numberBetween($min = 500, $max = 780))
        ->setCategories($categorie3);
        $manager->persist($produit15);
            }
        
        

        $manager->flush();
    }
}
