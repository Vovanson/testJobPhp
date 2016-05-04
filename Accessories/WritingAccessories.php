<?php

class WritingAccessories
{
    private $manufacturer;
    private $description;
    private $bodyColor;

    public function __construct($bodyColor, $description, $manufacturer){
        $this->bodyColor = $bodyColor;
        $this->description = $description;
        $this->manufacturer = $manufacturer;
    }

    public function getManufacturer()
    {
         return $this->manufacturer;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getBodyColor()
    {
        return $this->bodyColor;
    }
}

