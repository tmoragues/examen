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
    <script src="https://kit.fontawesome.com/5de91a6d37.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row my-4">
        <table class="table table-striped">
            <thead>
            <tr class="table-primary">
                <th scope="col">Article</th>
                <th class="text-center" scope="col">Quantitat</th>
                <th class="text-center" scope="col">Preu</th>
                <th class="text-center" scope="col"></th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $items[0][0] ?></td>
                <td class="text-center">1</td>
                <td class="text-center"><?php echo $items[0][1] ?></td>
                <td class="text-center"><a href=""><i class="fas fa-trash-alt"></i></a></td>

            </tr>
            <tr>
                <td><?php echo $items[1][0] ?></td>
                <td class="text-center">1</td>
                <td class="text-center"><?php echo $items[1][1] ?></td>
                <td class="text-center"><a href=""><i class="fas fa-trash-alt"></i></a></td>

            </tr>
            <thead>
            <tr>
                <th scope="col"></th>
                <th class="text-center" scope="col">TOTAL</th>
                <th class="text-center" scope="col">15</th>
                <th scope="col"></th>

            </tr>
            </thead>
            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="index.php" class="btn btn-primary">SEGUIR COMPRANT</a>
    </div>
</div>
</body>
</html>
