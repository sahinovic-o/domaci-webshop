<?php

if(!isset($_GET["id"]) || empty($_GET["id"]))
{
    die("Fali ID proizvoda");
}

require_once"baza.php";

$idProizvoda = $_GET["id"];
$rezultat = $baza->query("SELECT * from proizvodi WHERE id = $idProizvoda");

// var_dump($rezultat);

if($rezultat->num_rows == 0 )
{
    die("Ovaj proizvod ne postoji");
}

$proizvod = $rezultat->fetch_assoc();
// var_dump($proizvod);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $proizvod['ime']?></h1>
    <p><?= $proizvod['opis']?></p>
    <p>Cijena proizvoda<?= $proizvod['cijena']?></p>

    <?php if($proizvod["kolicina"] == 0):?>
        <p>Nema na stanju</p>
        
    <?php else: ?>
        <p>Ima na stanju</p>

    <?php endif; ?>

</body>
</html>