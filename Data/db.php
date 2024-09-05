<?php

require_once __DIR__ . '/../Model/Food.php';
require_once __DIR__ . '/../Model/Product.php';


$products = [

    // new Food("Cibo per Gatti", -19.99, "Cat", "2026-07-5"),
    new Food("Cibo per Cani", 30.99, "Dog", "2025-12-31"),
    new Food("Cibo per Cani", 19.99, "Dog", "2025-12-31"),
    new Food("Cibo per Gatti", 15.99,  "Cat", "2024-06-30"),
    new Toy("Pallina per Cani", 5.99, "Dog", "Rubber"),

];
