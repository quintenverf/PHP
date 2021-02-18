<?php
session_start();

$users = array(
  "test@dit.com" => array('pwd' => 'test', 'rol' => 'administrator'),
  "quinten@verf.com" => array('pwd' => 'naruto', 'rol' => 'administrator')
);

if (isset($_GET["log uit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['knop'])
    && isset($users[$_POST['email']])
    && $users[$_POST['email']]['pwd'] == $_POST['pwd']) {
    $_SESSION['user'] = array('email' => $_POST['email'],
        'pwd' => $users[$_POST['email']]['pwd'],
        'rol' => $users[$_POST['email']]['rol'],
    );
    $message = "Welkom " . $_SESSION["user"]["email"];
} else {
    $message = "Inloggen";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="wimvlecht.css">
    <link rel="stylesheet" type="text/css" href="mrwheely.css">
    <title>login</title>
</head>
<body>
    <header>
        <img id="header-image" src="img/wheely_header.jpg" alt="brood">
    </header>

<nav>
    <uL>
        <li><a class="links" href="mrwheely.php">overzicht autos</a></li>
        <li><a class="login" href="login.php?php">log uit</a></li>
        <li><a class="login" href="login.php"> log in</a></li>
        <li><a class="links" href="toevoegen.php">auto's toevoegen</a></li>
    </uL>
</nav>

<H1><?php echo  $message ?></H1>
<div id="form-menu">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="your Email...">

        <label for="password"> password</label>
        <input type="password" id="pwd" name="pwd" placeholder="your password...">

        <input type="submit" value="submit" name="knop">
    </form>

</div>
</body>
</html>
