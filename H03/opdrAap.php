<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title> PHP opdr in html</title>
</head>
<body>
<?php
//for ($i = 1; $i<=9; $i++) {
////    echo "<img src='img/foto". $i .".jpg>'>";
////}
////
////echo "de afbeeldingen showen niet";

$bomen = array("boompie.jpg", "boompje.jpg", "downlaod.jfif", "kaBoom.jpg");

foreach ($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";
}

//      een while loop
//$i = 1;
//while ($i<=9) {
//echo "<img src='img/bomen/".$boom."'>";
//    $i++;
//}
?>
<!--<img src="img/foto1.jpg">-->
</body>
</html>