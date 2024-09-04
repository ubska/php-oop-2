<?php

require_once __DIR__ . '/Product.php';

// Classe per i giochi
class Toy extends Product
{
    public $material;

    public function __construct($title, $price, $category, $material)
    {
        parent::__construct($title, $price,  $category, "Toy");
        $this->material = $material;
    }
}
