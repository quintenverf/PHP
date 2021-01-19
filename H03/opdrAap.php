<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title> PHP opdr in html</title>
</head>
<body>
<?php
for ($i = 1; $i<=9; $i++) {
    echo "<img src='img/foto". $i .".jpg>'>";
}

echo "de afbeeldingen showen niet";
?>
<img src="img/foto1.jpg">
</body>
</html>