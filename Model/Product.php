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



        // Controllo che il titolo non sia vuoto
        if (empty($title)) {
            // Se il titolo è vuoto, lanciamo un errore
            throw new Exception("Errore: Il titolo non può essere vuoto.");
        }

        // Controllo che il prezzo sia maggiore di 0
        if ($price <= 0) {
            // Se il prezzo è negativo o zero, lanciamo un errore
            throw new Exception("Errore: Il prezzo deve essere positivo.");
        }
    }
}
