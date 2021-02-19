<?php
session_start();

if (isset($_GET["log uit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_SESSION["user"])) {

} else {
    header('location: login.php');
}

include_once('OverviewCar.php');
include_once('Car.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mrwheely</title>
    <link rel="stylesheet" type="text/css" href="mrwheely.css">
    <link rel="stylesheet" type="text/css" href="wimvlecht.css">
</head>
<body id="wrapper">
<div>
<header>
<img id='header-image' src="img/wheely_header.jpg" alt="header van de pagina">
</header>
    <nav>
        <uL>
            <li><a class="links" href="mrwheely.php">overzicht autos</a></li>
            <li><a class="login" href="login.php?php">log uit</a></li>
            <li><a class="login" href="login.php"> log in</a></li>
            <li><a class="links" href="toevoegen.php">auto's toevoegen</a></li>
        </uL>
    </nav>

<div id="form-broodjetoevoegen">
<?php //echo $_SERVER['PHP_SELF']; ?>
    <form action="mrwheely.php" method="post">
        <label for="merk">merk</label>
        <input type="text" id="merk" name=merk placeholder="merk.." required>

        <label for="type">type</label>
        <input type="text" id="type" name=type placeholder="type.." required>

        <label for="prijs">prijs</label>
        <input type="text" id="prijs" name=prijs placeholder="prijs.." required>

        <label for="url">url/foto</label>
        <input type="text" id="url" name=url placeholder="url.." required>

        <input type="submit" value="submit" name="knop-toevoegen">
    </form>


</div>
</div>
</html>
