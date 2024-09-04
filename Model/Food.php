<?php

require_once __DIR__ . '/Product.php';

// Classe per i cibi
class Food extends Product
{
    public $expirationDate;

    public function __construct($title, $price, $category, $expirationDate)
    {
        parent::__construct($title, $price, $category, "Food");
        $this->expirationDate = $expirationDate;
    }
}
