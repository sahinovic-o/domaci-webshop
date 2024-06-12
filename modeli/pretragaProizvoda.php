<?php 

$pretraga = $_POST["pretraga"];
require_once"baza.php";

if(!isset($pretraga) || empty($pretraga))
{
    die("Niste unijeli naziv za pretragu");
}else {
    $q = ("SELECT * from proizvodi WHERE ime LIKE '%$pretraga%'");
    $rezultat = $baza->query($q);
    $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);
    
    foreach($proizvodi as $proizvod){
        echo $proizvod["ime"];
    }
}