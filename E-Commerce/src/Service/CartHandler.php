<?php

namespace App\Service;

use App\Entity\Product;

class CartHandler
{
    public function __construct(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'App\Service\SessionCartService')]
        private CartInterface $cartService
    )
    {
    }

    public function handleAddToCart(Product $product, int $quantity): void
    {
        $this->cartService->addProduct($product, $quantity);
    }

    public function getCurrentCart()
    {
        return $this->cartService->getCart();
    }
}
