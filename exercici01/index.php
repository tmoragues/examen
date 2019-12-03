<?php

$items[0] = array("nom" => "Camiseta fressetes", "color" => "groc");
$items[1] = array("nom" => "Camiseta Polaroid", "color" => "rosa");
$items[2] = array("nom" => "Camiseta fressetes", "color" => "negre");
$items[3] = array("nom" => "Camiseta HAPPY", "color" => "groc");
$items[4] = array("nom" => "Camiseta Powe Girl", "color" => "negre");
$items[5] = array("nom" => "Camiseta Rayo", "color" => "rosa");



//$items[0] = "Camiseta fressetes";
//$items[1] = "Camiseta tigre";
//$items[2] = "Camiseta Polaroid";
//$items[3] = "Camiseta HAPPY";
//$items[4] = "Camiseta Powe Girl";
//$items[5] = "Camiseta Rayo";

//$colors[0] = "groc";
//$colors[1] = "rosa";
//$colors[2] = "negre";
//$colors[3] = "groc";
//$colors[4] = "negre";
//$colors[5] = "rosa";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5de91a6d37.js" crossorigin="anonymous"></script>

    <title>Exercici01</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-2">
            <ul class="navbar-nav mr-auto">
                FILTRE:
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="far fa-square"></i> Groc</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="far fa-square"></i> Negre</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="far fa-square"></i> Rosa</a></li>
            </ul>
        </div>

    <div class="col-10"><div class="row">
<?php for($x = 0; $x < count($items); $x++) { ?>

    <div class="card m-1" style="width: 18rem;">
        <img class="card-img-top" src="img/<?php echo $x ?>.webp" alt="Card image cap">
        <div class="card-body">
            <p class="card-text"><?php echo $items[$x][0] ?></p>
            <a href="producte.php" class="btn btn-primary">Selecciona</a>
        </div>
    </div>

<?php }  ?>
    </div></div>
</div>
</div>
</body>
</html>

<?php
