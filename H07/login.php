<?php
session_start();

$users = array(
    "quinten" => array("pwd" => "1234", "rol" => "administrator"),
    "sam" => array("pwd" => "1235", "rol" => "gebruiker"),
    "menga" => array("pwd" => "123", "rol" => "administrator"),
);

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST ['knop'])
                && isset($users[$_POST["login"]])
                && $users[$_POST["login"]]["pwd"] == $_POST['pwd']) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
                               "pwd" => $users[$_POST["login"]]['pwd'],
                               "rol" => $users[$_POST["login"]]['rol']);
    $message = "welkom".$_SESSION["user"]["naam"]." met de rol ".$_SESSION["user"]["rol"];

} else {
    $message = "inloggen";
}

print_r($_SESSION);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<h1> <?php echo $message;  ?> </h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <label for="login">login:</label>
        <input type="text" name="login" value="">
    </div>
    <div>
        <label for="password">password:</label>
        <input type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
</form>
<p><a href="website.php">website</a></p>
<p><a href="website.php">admin</a></p>
<p><a href="login.php?loguit">uitloggen</a></p>
</body>
</html>
