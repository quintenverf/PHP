<?php
//geäutomatiseerd alles omzetten
$arrayOne = [1, 2, 3, 4];
function reverseArray($arrayOne){
    $arrayTwo = [];
    $lastIndex = count($arrayOne) - 1;
    for ($i = $lastIndex; $i >= 0; $i--){
        $arrayTwo[] = $arrayOne[$i];
    }
    return $arrayTwo;
}
function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
JSC(reverseArray($arrayOne));


//handmatig alles omzetten
//$arrayOne = [1,2,3,4];
//reverse($arrayOne);
//
//function reverse($arrayOne) {
//    echo $arrayOne[3];
//    $arrayTwo = [$arrayOne[3],$arrayOne[2],$arrayOne[1],$arrayOne[0]];
//    print_r($arrayTwo);
//}






























//$alle["leeftijd"] = 12;
//$alle["naam"] = "Jan";
//$alle["telefoon"] = "0612994354";
//
//
//foreach ($alle as $label => $waarde) {
//    echo "de " . $label . " is: " . $waarde . "<br>";
//}
//
//"<br>";
//echo "///////";
//"<br>";
//
//$a = 6;
//$b = 7;
//
//if ($a > $b) {
//    //voor dit uit
//    echo "a is klein";
//} else {
//    //voor anders dit uit
//    echo "b is groot";
//}
//
//"<br>";
//echo "///////";
//"<br>";
//
//$fotos = array("berg", "voet", "nike", "addidas", "lemper", "wereld");
//
//$fotos[7] = "neusaap";
//
//echo "<ul>";
//foreach ($fotos as $foto) {
//    echo "<li>".$foto."</li>";
//}
//echo "</ul>";


