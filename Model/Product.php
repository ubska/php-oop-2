<?php

// classe del prodotto

use function PHPSTORM_META\type;

class Product
{
    public $title;
    public $price;
    public $category;
    public $type;


    // costruttore della classe product
    public function __construct($_title, $_price, $_category, $_type)
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type();
    }
}
