<?php
class Broodlijst{

    private $broodjes = array();

    function voegBroodjeToe($brood){
        $this->broodjes[] = $brood;
    }
    function getBroodjes(){
        return $this->broodjes;
    }
}