<?php

class OverviewCar{
    private $OverviewName = "";
    private $Cars = array();

    function AddCar($Car) {
        $this->Cars[] = $Car;
    }

    function getCars() {
        return $this->Cars;
    }

    function getOverview() {
        return array('name' => $this->OverviewName);
    }

    /**
     * Set name for Overview
     * @return string
     */
    public function getOverviewName() {
        return $this->OverviewName;
    }

    /**
     * Get name for Overview
     * @param string $OverviewName
     */
    public function setOverviewName($OverviewName) {
        $this->OverviewName = $OverviewName;
    }


}