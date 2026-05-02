<?php

namespace App\Service;

use App\Model\Cart;
use App\Model\CartItem;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\RequestStack;

class SessionCartService implements CartInterface
{
    private const CART_SESSION_KEY = 'shopping_cart';

    public function __construct(private RequestStack $requestStack)
    {
    }

    private function getSession()
    {
        return $this->requestStack->getSession();
    }

    public function getCart(): Cart
    {
        return $this->getSession()->get(self::CART_SESSION_KEY, new Cart());
    }

    public function addProduct(Product $product, int $quantity): void
    {
        $cart = $this->getCart();
        $cart->addItem(new CartItem($product, $quantity));
        $this->getSession()->set(self::CART_SESSION_KEY, $cart);
    }

    public function removeProduct(int $productId): void
    {
        // Logique de suppression simplifiée pour l'exercice
        $this->clear(); 
    }

    public function clear(): void
    {
        $this->getSession()->remove(self::CART_SESSION_KEY);
    }
}
