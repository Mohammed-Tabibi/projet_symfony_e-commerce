<?php

namespace App\Service;

use App\Model\Cart;
use App\Entity\Product;

class ApiCartService implements CartInterface
{
    public function getCart(): Cart
    {
        dd("Simulation: Récupération du panier via API");
        return new Cart();
    }

    public function addProduct(Product $product, int $quantity): void
    {
        dd("Simulation: Ajout du produit " . $product->getName() . " via API");
    }

    public function removeProduct(int $productId): void
    {
        dd("Simulation: Suppression via API");
    }

    public function clear(): void
    {
        dd("Simulation: Vidage via API");
    }
}
