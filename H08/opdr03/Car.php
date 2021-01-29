<?php

class Car {
    private $merk;
    private $type;
    private $prijs;
    private $url;

    function __construct($merk, $type, $prijs, $url)
    {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }


    /**
     * Gets value of merk
     * @return string
     */
    public function getMerk()
    {
        return $this->merk;
    }

    /**
     * Sets value of merk
     * @param string $merk
     */
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    /**
     * Get value of type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets value of type
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get value of prijs
     * @return int
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * Sets value of prijs
     * @param int $prijs
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;
    }

    /**
     * Get value of url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets value of url
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }




}


//Class Car {
//
//    private $type;
//    private $merk;
//    private $prijs;
//    private $url;
//
//    function __construct($type, $merk, $prijs, $url) {
//        $this->prijs = $prijs;
//        $this->merk = $merk;
//        $this->type = $type;
//        $this->url = $url;
//    }
//
//    /**
//     * Gets value of type
//     * @return string
//     */
//    public function getType() {
//        return $this->type;
//    }
//
//    /**
//     * Sets value of type
//     * @param string $type
//     */
//    public function setType($type) {
//        $this->type = $type;
//    }
//
//    /**
//     * Gets value of merk
//     * @return string
//     */
//    public function getMerk() {
//        return $this->merk;
//    }
//
//    /**
//     * Sets value of merk
//     * @param string $merk
//     */
//    public function setMerk($merk) {
//        $this->merk = $merk;
//    }
//
//    /**
//     * Gets value of prijs
//     * @return string
//     */
//    public function getPrijs() {
//        return $this->prijs;
//    }
//
//    /**
//     * Sets value of prijs
//     * @param string $prijs
//     */
//    public function setPrijs($prijs) {
//        $this->prijs = $prijs;
//    }
//
//    /**
//     * Gets value of url
//     * @return string
//     */
//    public function getUrl() {
//        return $this->url;
//    }
//
//    /**
//     * Sets value of url
//     * @param string $url
//     */
//    public function setUrl($url) {
//        $this->url = $url;
//    }
//
//
//}

//$my_classes = get_declared_classes();
//
//foreach ($my_classes as $class) {
//echo $class . "<br>";
//}