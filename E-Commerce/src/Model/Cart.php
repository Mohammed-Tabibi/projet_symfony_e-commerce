<?php

namespace App\Model;

class Cart
{
    /** @var CartItem[] */
    private array $items = [];

    /** @return CartItem[] */
    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(CartItem $item): void
    {
        $this->items[] = $item;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotalPrice();
        }
        return $total;
    }
}
