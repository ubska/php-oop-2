<?php

// Include file 
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Data/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Prodotti per Animali</h1>

    <?php foreach ($products as $product): ?>
        <div class="product-card">
            <h2><?php echo $product->title; ?></h2>
            <p>Prezzo: €<?php echo number_format($product->price, 2); ?></p>
            <p>Categoria: <?php echo $product->category; ?></p>
            <p>Tipo: <?php echo $product->type; ?></p>
            <p>Data di scadenza: <?php echo $product->expirationDate; ?></p>
        </div>
    <?php endforeach; ?>
</body>

</html>