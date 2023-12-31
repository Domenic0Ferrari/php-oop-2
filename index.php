<?php
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Toy.php';
include_once __DIR__ . '/Models/Kennel.php';
include_once __DIR__ . '/db.php';
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
    <h1 class="text-center mt-5">SHOP PER ANIMALI</h1>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($arrProducts as $objProduct) { ?>
                <div class="col-4 mb-5 pt-3">
                    <?= $objProduct->printCard(); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>