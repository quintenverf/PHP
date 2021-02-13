<?php


include_once ('brood.php');
include_once ('Broodlijst.php');

session_start();
?>

<!doctype html>
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
<H2>Edit Pagina</H2>
<div id="form-broodjetoevoegen">

    <form action="index.php" method="post">
        <label for="pasNaamAan">naam: <?php echo $_GET['data']?></label>
        <input type="text" id="nieuwNaam" name="pasNaamAan" placeholder="pasNaamAan.." required>
        <?php echo '<input type="hidden" id="oudNaam" name="oudNaam" value="'. $_GET['data'].'">'?>
        <input type="submit" value="submit" name="pas-Naam-Aan">
    </form>

    <form action="index.php" method="post">
        <label for="pasMeelAan">meel: <?php  echo $_SESSION['Broodlijst']->getBroodje($_GET['data'])->getMeel() ?></label>
        <input type="text" id="nieuwMeel" name="pasMeelAan" placeholder="pasMeelAan.." required>
        <?php echo '<input type="hidden" id="oudNaam" name="oudNaam" value="'. $_GET['data'].'">'?>
        <input type="submit" value="submit" name="pas-Meel-Aan">
    </form>

    <form  action="index.php" method="post">
        <label for="pasVormAan">vorm: <?php  echo $_SESSION['Broodlijst']->getBroodje($_GET['data'])->getVorm() ?></label>
        <input type="text" id="nieuwVorm" name="pasVormAan" placeholder="pasVormAan.." required>
        <?php echo '<input type="hidden" id="oudNaam" name="oudNaam" value="'. $_GET['data'].'">'?>
        <input type="submit" value="submit" name="pas-Vorm-Aan">
    </form>

    <form action="index.php" method="post">
        <label for="pasGewichtAan">gewicht: <?php  echo $_SESSION['Broodlijst']->getBroodje($_GET['data'])->getGewicht() ?></label>
        <input type="text" id="nieuwGewicht" name="pasGewichtAan" placeholder="pasGewichtAan.." required>
        <?php echo '<input type="hidden" id="oudNaam" name="oudNaam" value="'. $_GET['data'].'">'?>
        <input type="submit" value="submit" name="pas-Gewicht-Aan">
    </form>


</div>

</body>
</html>

