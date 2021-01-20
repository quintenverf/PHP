<?php

function delenDoorDrie ($delen) {
    if ($delen % 3 == 0) {
        return "ja het kan";
    } else {
        return "nee het kan niet";
    }
}

echo delenDoorDrie(3);

