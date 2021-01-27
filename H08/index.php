<?php

include_once('Programma.php');
include_once('Song.php');

$ditprogramma = new Programma();
$ditprogramma->setNaam("mijn eerste programma");
$ditprogramma->setOmschrijving('even testen');
foreach ($ditprogramma->getProgramma() as $p) {
}

$nieuwliedje = new Song('Shinzo wo sasegeyo', 'Linked horizon');

$ditprogramma->voegLiedjeToe($nieuwliedje);

foreach ($ditprogramma->getLiedjes() as $liedje) {
    echo $liedje->getTitle().' - '.$liedje->getArtiest().'<br>';
}