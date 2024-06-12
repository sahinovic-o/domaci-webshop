<?php

$lozinka = $_POST["lozinka"] ;
$email = $_POST["email"];

if(!isset($email) || empty($email)){
    die("Niste unijeli email");
}

if(!isset($lozinka) || empty($lozinka)){
    die("Niste unijeli lozinku");
}

require_once"baza.php";

$rezultat = $baza->query("SELECT * from korisnici WHERE email = '$email'");

if($rezultat->num_rows == 1){
    $korisnik = $rezultat->fetch_assoc();
    // var_dump($korisnik);
    $verifikovanaSifra = password_verify($lozinka, $korisnik['sifra']);

    if($verifikovanaSifra == true){
        echo"Dobrodosli nazad";
    }else {
        echo "Sifra nije tacna";
    }
}else {
    echo "Korisnik ne postoji";
}