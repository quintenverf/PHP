<?php

function delenDoorDrie ($delen) {
    if ($delen % 3 == 0) {
        $deelbaar = true;
        echo "ja het kan";
    } else {
        $deelbaar = false;
        echo "nee het kan niet";
    }
    return $deelbaar;
}

echo delenDoorDrie(4);

