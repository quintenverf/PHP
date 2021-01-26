<?php
   session_start();

if (isset($_SESSION ["user"])) {
    echo "<h1>welkom ".$_SESSION["user"]["naam"]. " op de website </h1>";
    echo "<p> <a href='login.php'>login</a></p>";
} else {
    header('location: login.php');
}