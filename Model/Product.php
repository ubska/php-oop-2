<?php

// Classe base Product
class Product
{
    public $title;
    public $price;
    public $category;
    public $type;

    public function __construct($title, $price, $category, $type)
    {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }
}
