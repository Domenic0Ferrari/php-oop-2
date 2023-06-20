<?php
include __DIR__ . '/Models/Products.php';
include __DIR__ . '/Models/Toys.php';
include __DIR__ . '/Models/Kennels.php';
include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container mt-5 d-flex">
        <?php foreach ($products as $index => $product) { ?>
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $product->name ?></li>
                    <li class="list-group-item">$<?= $product->price ?></li>
                    <li class="list-group-item"><?= $product->categories ?></li>
                    <li class="list-group-item"><?= $product->materials ?></li>
                    <li class="list-group-item"><?= $product->size ?></li>
                </ul>
            </div>
        <?php } ?>
    </div>
</body>

</html>