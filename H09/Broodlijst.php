<?php
class Broodlijst{

    private $broodjes = array();

    function voegBroodjeToe($brood){
        $this->broodjes[] = $brood;
    }

    function getBroodjes(){
        return $this->broodjes;
    }

    function getBroodje($naam){
        foreach ($this->broodjes as $broodje){
            if ($broodje->getNaam()==$naam){
                return $broodje;
            }
        }
    }

    function pasMeelAan($naam, $nieuwMeel)
    {
        foreach ($this->broodjes as $broodje) {
            if ($broodje->getNaam()==$naam){
                $broodje->setMeel($nieuwMeel);
            }
        }
    }

    function pasVormAan($naam, $nieuwVorm)
    {
        foreach ($this->broodjes as $broodje) {
            if ($broodje->getNaam()==$naam){
                $broodje->setVorm($nieuwVorm);
            }
        }
    }

    function pasGewichtAan($naam, $nieuwGewicht)
    {
        foreach ($this->broodjes as $broodje) {
            if ($broodje->getNaam()==$naam){
                $broodje->setGewicht($nieuwGewicht);
            }
        }
    }

    function pasNaamAan($naam, $nieuwNaam)
    {
        foreach ($this->broodjes as $broodje) {
            if ($broodje->getNaam()==$naam){
                $broodje->setNaam($nieuwNaam);
            }
        }
    }

}