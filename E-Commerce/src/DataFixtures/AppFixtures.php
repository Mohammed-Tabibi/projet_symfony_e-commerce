<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création des catégories
        $categories = [];
        $catNames = ['Electronics', 'Fashion', 'Home & Garden'];
        
        foreach ($catNames as $name) {
            $category = new Category();
            $category->setName($name);
            $manager->persist($category);
            $categories[$name] = $category;
        }

        // Produits pour Electronics
        $p1 = new Product();
        $p1->setName('Wireless Headphones');
        $p1->setDescription('High-quality noise cancelling wireless headphones.');
        $p1->setPrice(79.99);
        $p1->setCategory($categories['Electronics']);
        $manager->persist($p1);

        $p2 = new Product();
        $p2->setName('Bluetooth Speaker');
        $p2->setDescription('Portable speaker with deep bass and clear sound.');
        $p2->setPrice(59.99);
        $p2->setCategory($categories['Electronics']);
        $manager->persist($p2);

        // Produits pour Fashion
        $p3 = new Product();
        $p3->setName('Classic Leather Jacket');
        $p3->setDescription('Timeless black leather jacket for all seasons.');
        $p3->setPrice(149.99);
        $p3->setCategory($categories['Fashion']);
        $manager->persist($p3);

        // Produits pour Home & Garden
        $p4 = new Product();
        $p4->setName('Smart Plant Sensor');
        $p4->setDescription('Monitor your plants health from your smartphone.');
        $p4->setPrice(34.99);
        $p4->setCategory($categories['Home & Garden']);
        $manager->persist($p4);

        $manager->flush();
    }
}
