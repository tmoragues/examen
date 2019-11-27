<?php

$items = array
(
    array("Camiseta fressetes",10),
    array("Camiseta tigre",15),
    array("Camiseta Polaroid",10),
    array("Camiseta HAPPY",5),
    array("Camiseta Powe Girl",5),
    array("Camiseta Rayo",10)
);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Exercici01</title>
</head>
<body>
<div class="container">
    <div class="row">
<?php for($x = 0; $x < count($items); $x++) { ?>

    <div class="card m-1" style="width: 18rem;">
        <img class="card-img-top" src="img/<?php echo $x ?>.webp" alt="Card image cap">
        <div class="card-body text-center">
            <p class="card-text"><?php echo $items[$x][0] ?></p>
            <p class="card-text"><?php echo $items[$x][1] ?> €</p>
            <a href="cart.php" class="btn btn-primary">Selecciona</a>

        </div>
    </div>

<?php }  ?>
    </div>
</div>
</body>
</html>

<?php
