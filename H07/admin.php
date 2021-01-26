<?php
session_start();

if (isset($_SESSION["user"])) {
    echo "<h1>welkom ".$_SESSION["user"] . " op t admin gedeelte </h1>";
} else {
    header('location: login.php');
}