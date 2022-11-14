<?php

namespace App\DesignPatterns\Decorator;

class OilChange implements CartService {

    protected $cartService;

    public function __construct(CartService $cartService = null)
    {
        $this->cartService = $cartService;
    }

    public function getCost()
    {
        return 15 + optional($this->cartService)->getCost();
    }

    public function getDescription()
    {
        $description = ["Servicio de cambio de aceite"];

        if ($this->cartService instanceof CartService)
        {
            $description = array_merge($description, $this->cartService->getDescription());
        }

        return $description;

    }

}
