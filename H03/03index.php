<?php


$alle["leeftijd"] = 12;
$alle["naam"] = "Jan";
$alle["telefoon"] = "0612994354";


foreach ($alle as $label => $waarde) {
    echo "de " . $label . " is: " . $waarde . "<br>";
}

"<br>";
echo "///////";
"<br>";

$a = 6;
$b = 7;

if ($a > $b) {
    //voor dit uit
    echo "a is klein";
} else {
    //voor anders dit uit
    echo "b is groot";
}

"<br>";
echo "///////";
"<br>";

$fotos = array("berg", "voet", "nike", "addidas", "lemper", "wereld");

$fotos[7] = "neusaap";

echo "<ul>";
foreach ($fotos as $foto) {
    echo "<li>".$foto."</li>";
}
echo "</ul>";


