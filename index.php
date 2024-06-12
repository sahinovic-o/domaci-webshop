<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija i login</title>
</head>
<body>
    <h2>Registruj se</h2>
    <form action="modeli/registration.php" method="POST">
        <input type="email" name="email" placeholder="Unesite Vas email">
        <input type="password" name="lozinka" placeholder="Unesite Vasu lozinku">
        <button>Registruj se</button>
    </form>

    <h2>Log in</h2>
    <form action="modeli/login.php" method="POST">
        <input type="email" name="email" placeholder="Unesite Vas email">
        <input type="password" name="lozinka" placeholder="Unesite Vasu lozinku">
        <button>Log in</button>
    </form>

    <br>
    <br>

    <form action="modeli/izlistajProizvode.php" method="POST">

        <button>Izlistaj sve proizvode</button>

    </form>
    <br>
    <br>
    <form action="modeli/pretragaProizvoda.php" method = "POST">
        <input type="text" name="pretraga" placeholder="Pretrazite zeljeni proizvod">
        <button>Pretrazi</button>
    </form>

</body>
</html>

