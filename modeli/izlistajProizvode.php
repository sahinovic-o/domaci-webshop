<?php
require_once"baza.php";

$rezultat = $baza->query("SELECT * from proizvodi");
$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($proizvodi as $proizvod): ?>
        <h1>Proizvodi</h1>
        <p><?=  $proizvod["ime"] ?></p>
        <p>Kolicina: <?=  $proizvod["kolicina"] ?></p>
        <p>Cijena: <?=  $proizvod["cijena"] ?></p>
        <a href="proizvod.php?id=<?= $proizvod['id']?>">Pogledaj proizvod</a>
    <?php endforeach;?>
    <!-- <?php?> -->
</body>
</html>