<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            max-width: 70px;
            max-height: 70px;
            display: block;
        }
    </style>
</head>
<body>
<?php
$zwemclubs = array("De spartelkuikens", 25, "De waterbuffels", 32, "Plonsmderin", 11, "Bommetje", 23);

$tellertje = 0;
$plaatjes = 0;
foreach ($zwemclubs as $club){
    $tellertje++;
    echo $club;
    if ($tellertje % 2 == 0){
        for ($i = 0; $i < floor($club / 5); $i++)
            echo "<img src='img/foto2.jpg'>";
        echo "<br>";

    }
}
?>
</body>
</html>
