<?php

include_once ('brood.php');
include_once ('Broodlijst.php');

session_start();
if (isset($_SESSION['user'])){

}else {
    header('Location: login.php');
}


if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}


$wimoverzicht = new Broodlijst();

if (empty($_SESSION['Broodlijst'])) {
    $_SESSION['Broodlijst'] = $wimoverzicht;
}

if (isset($_POST['knop-toevoegen'])) {
    $_POST['naam'] = new broodje($_POST['naam'], $_POST['meel'], $_POST['vorm'], $_POST['gewicht']);
    $_SESSION['Broodlijst']->voegBroodjeToe($_POST['naam']);
}
if (isset($_POST['pas-Naam-Aan'])) {
    $_SESSION['Broodlijst']->pasNaamAan($_POST['oudNaam'],$_POST['pasNaamAan']);
}

if (isset($_POST['pas-Meel-Aan'])) {
    $_SESSION['Broodlijst']->pasMeelAan($_POST['oudNaam'],$_POST['pasMeelAan']);
}

if (isset($_POST['pas-Vorm-Aan'])) {
    $_SESSION['Broodlijst']->pasVormAan($_POST['oudNaam'],$_POST['pasVormAan']);
}

if (isset($_POST['pas-Gewicht-Aan'])) {
    $_SESSION['Broodlijst']->pasGewichtAan($_POST['oudNaam'],$_POST['pasGewichtAan']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="wimvlecht.css">
    <title>Wim vlecht</title>
</head>

<body>

<header>
    <img id="header-image" src="img/broodje01.jpg" alt="stokbrood">
</header>

<nav>
    <ul>
        <li> <a class="links"href="index.php">Overzicht broodjes</a> </li>
        <li> <a class="links" href="admin.php">Admin pagina</a> </li>
        <li class="login"> <a href="index.php?loguit">Uitloggen</a></li>
        <li class="login"> <a href="login.php">Inloggen</a> </li>
    </ul>
</nav>


<section>
    <table id='broodjes'>
        <tr>
            <th>Naam:</th>
            <th>Meel:</th>
            <th>Vorm:</th>
            <th>Gewicht:</th>
            <th> </th>
        </tr>

            <?php
            foreach ($_SESSION['Broodlijst']->getBroodjes()
            as $broodje) {
                echo "<tr><td>" . $broodje->getNaam() . "</td>
                  <td>" . $broodje->getMeel() . "</td>  
                  <td>" . $broodje->getVorm() . "</td>
                  <td>" . $broodje->getGewicht() . "</td>
                  <td> <a href='edit.php?data=".$broodje->getNaam()."'>edit</a> </td></tr>";
            }
            function editBroodje ($broodjesNaam) {
                $_SESSION['onthoudenNaam'] = $broodjesNaam;
                header("Location: index.php");
            }
            ?>

    </table>
</section>

</body>

</html>



