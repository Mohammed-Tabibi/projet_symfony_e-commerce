<?php

namespace App\Service;

use App\Model\Cart;
use App\Entity\Product;

interface CartInterface
{
    public function getCart(): Cart;
    public function addProduct(Product $product, int $quantity): void;
    public function removeProduct(int $productId): void;
    public function clear(): void;
}
