<?php
function inloggen($email, $password) {
    $emailadressen = array('piet@worldonline.nl', 'klaas@carpets.nl', 'truushendriks@wegweg.nl');
    $passwords = array('doetje123', 'snoepje777', 'arkiearkie201');
    $ingelogd = false;
    for ($teller = 0; $teller < count($emailadressen); $teller++){
        if ($email == $emailadressen[$teller] and $password == $passwords[$teller]){
            $ingelogd == true;
            return true;
        }
    }
    if ($ingelogd == false) return false;
}

if (inloggen($_POST ['email'], $_POST ['password'])) echo "welkom";
else echo "sorry geen toegang";