<?php

include_once('OverviewCar.php');
include_once('Car.php');

$thisOverview = new OverviewCar();
$thisOverview->setOverviewName('OccasionCenter');

$volksWagen = new Car('volksWagen', 'polo', 13500, "img/VW-polo01.jpg");
$mercedes = new Car('mercedes', 'sls', 225500, "img/mercedes-sls01.jpg");
$ferrari = new Car('ferrari', 'énzo', 2000000, "img/ferrari-enzo01.jpg");
$opel = new Car('opel', 'corsa', 13500, 'img/opel-corsa.jpg');
$audi = new Car('audi', 'rs8', 110000, 'img/audi-rs801.jpg');

$thisOverview->AddCar($volksWagen);
$thisOverview->AddCar($ferrari);
$thisOverview->AddCar($audi);
$thisOverview->AddCar($opel);
$thisOverview->AddCar($mercedes);

function merkFilter($Overview, $merk)
{
    foreach ($Overview->getCars() as $car)
    {
        if ($car->getMerk() == $merk)
        {
            $url = $car->getUrl();
            $prijs = $car->getPrijs();
            echo "<div class='wheely-img'
                        style='background-image:url($url);
                         background-position:center center;
                         background-size:cover;'>
                         <h5>Merk: $merk<br>Prijs : &euro; $prijs</h5>
                         </div>";
        }
    }
}

function merkPrijsFilter($overview, $merk, $minprijs, $maxprijs)
{
    foreach ($overview->getCars() as $car)
    {
        if ($car->getMerk() == $merk)
        {
            $url = $car->getUrl();
            $prijs = $car->getPrijs();
            if ($prijs > $minprijs and ($prijs < $maxprijs or $maxprijs == ''))
            {
                echo "<div class='wheely-img'
                        style='background-image:url($url);
                         background-position:center center;
                         background-size:cover;'>
                         <h5>Merk: $merk<br>Prijs : &euro; $prijs</h5>
                         </div>";
            }
        }
    }
}

function prijsFilter($overview, $minprijs, $maxprijs) {
    foreach ($overview->getCars() as $car) {
        $url = $car->getUrl();
        $prijs = $car->getPrijs();
        $merk = $car->getMerk();
        if ($prijs > $minprijs AND ($prijs < $maxprijs OR $maxprijs == '')){
            echo "<div class='wheely-img'
                        style='background-image:url($url);
                         background-position:center center;
                         background-size:cover;'>
                         <h5>Merk: $merk<br>Prijs : &euro; $prijs</h5>
                         </div>";
        }
    }
}

function alleAutos($overview){
    foreach ($overview->getCars() as $car) {
        $url = $car->getUrl();
        $prijs = $car->getPrijs();
        $merk = $car->getMerk();
        echo "<div class='wheely-img'
                        style='background-image:url($url);
                         background-position:center center;
                         background-size:cover;'>
                         <h5>Merk: $merk<br>Prijs : &euro; $prijs</h5>
                         </div>";
    }
}


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
        <ul>
            <li> <a class="links"href="mrwheely.php">index</a> </li>
            <li> <a class="links" href="toevoegen.php">Admin pagina</a> </li>
            <li class="login"> <a href="index.php?loguit">Uitloggen</a></li>
            <li class="login"> <a href="login.php">Inloggen</a> </li>
        </ul>
    </nav>

<div id="form">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="merk">Merk:</label>
        <select id="merk" name="merk">
            <option value="">--Alle merken--</option>
            <option value="audi">Audi</option>
            <option value="mercedes">Mercedes</option>
            <option value="opel">Opel</option>
            <option value="ferrari">Ferrari</option>
            <option value="volkWagen">volksWagen</option>
        </select>

        <label for="form-minprijs">Minimale prijs:</label>
        <select id="form-minprijs" name="minprijs">
            <option value="">--Alle minimum prijzen--</option>
            <option value="minprijs">0</option>
        </select>

        <label for="form-maxprijs">Maximale prijs:</label>
        <select id="form-maxprijs" name="maxprijs">
            <option value="">--Alle maximum prijzen--</option>
            <option value="maxprijs">13500</option>
            <option value="maxprijs">110000</option>
            <option value="maxprijs">225500</option>
            <option value="maxprijs">2000000</option>
        </select>

        <label for="form-maxprijs"></label>
        <input type="hidden" id="form-maxprijs" name="maxprijs">


        <input type="submit" value="Submit" name="knop">
        <a href="toevoegen.php">
           <button type="button" value="button" name="toevoegen">toevoegen</button>
        </a>
    </form>
</div>
</div>
<?php

?>
<?php

if (isset($_POST['knop'])) {
$merkInput = $_POST['merk'];
$minprijs = $_POST['minprijs'];
$maxprijs = $_POST['maxprijs'];

if ($merkInput != '' AND $minprijs == '' AND $maxprijs == '') {
merkFilter($thisOverview, $merkInput);
} elseif ($merkInput != '' AND ($minprijs != '' OR $maxprijs != '')){
merkPrijsFilter($thisOverview, $merkInput, $minprijs, $maxprijs);
} elseif ($merkInput == '' AND ($minprijs != '' OR $maxprijs != '')){
prijsFilter($thisOverview, $minprijs, $maxprijs);
} elseif ($merkInput == '' AND $minprijs == '' AND $maxprijs == '') {
alleAutos($thisOverview);
}
} else {
alleAutos($thisOverview);
}
?>
</body>
</html>

