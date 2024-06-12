<?php 

$lozinka = password_hash($_POST["lozinka"], PASSWORD_BCRYPT) ;
$email = $_POST["email"];

if(!isset($email) || empty($email)){
    die("Niste unijeli email");
}

if(!isset($lozinka) || empty($lozinka)){
    die("Niste unijeli lozinku");
}
else {
    echo"Registrovali ste se";
}

require_once"baza.php";

$query = ("INSERT INTO korisnici (email, sifra) VALUES('$email', '$lozinka')");

$baza->query($query);