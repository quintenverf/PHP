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

include_once ('overzicht.php');
include_once ('brood.php');

?>

<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="wimvlecht.css">
    <title>Document</title>
</head>
<body>
<header>
    <img id="header-image" src="img/broodje01.jpg" alt="broodje">
</header>

<nav>
    <ul>
        <li> <a class="links"href="index.php">Overzicht broodjes</a> </li>
        <li> <a class="links" href="admin.php">Admin pagina</a> </li>
        <li class="login"> <a href="index.php?loguit">Uitloggen</a></li>
        <li class="login"> <a href="login.php">Inloggen</a> </li>
    </ul>
</nav>

<div id="form-broodjetoevoegen">

    <form action="index.php" method="post">
        <label for="naam">naam</label>
        <input type="text" id="naam" name="naam" placeholder="Naam.." required>

        <label for="meel">meel</label>
        <input type="text" id="meel" name="meel" placeholder="Meel.." required>

        <label for="vorm">vorm</label>
        <input type="text" id="vorm" name="vorm" placeholder="Vorm.." required>

        <label for="gewicht">gewicht</label>
        <input type="text" id="gewicht" name="gewicht" placeholder="Gewicht.." required>


        <input type="submit" value="submit" name="knop-toevoegen">
    </form>

</div>

</body>
</html>
