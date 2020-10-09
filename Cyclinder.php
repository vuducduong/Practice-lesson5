<?php

include_once "Circle.php";
class Cyclinder extends Circle
{
    public $height;
    public function __construct($name, $radius,$height)
    {
        parent::__construct($name, $radius);
        $this->height=$height;
    }
    public function calculateVolume()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

}