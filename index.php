<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cyclinder.php";
include_once "Rectangle.php";
include_once "Square.php";

$cricle = new Circle("pink",3);
echo "pink area = " .$cricle->calculateArea()."<br>";
echo "pink perimeter = ".$cricle->calculatePerimeter()."<br>";

$cyclinder = new Cyclinder("black",3,7);
echo "black area = ". $cyclinder->calculateArea()."<br>";
echo "black perimeter =" .$cyclinder->calculatePerimeter()."<br>";
echo "black volume =" .$cyclinder->calculateVolume()."<br>";

$rectangle = new Rectangle("Yellow",7,4);
echo "Yellow area = ". $rectangle->calculateArea()."<br>";
echo "Yellow perimeter =". $rectangle->calculatePerimeter()."<br>";

$square = new Square("green",4);
echo "green area = ". $square->calculateArea()."<br>";
echo "green perimeter =".$square->calculatePerimeter()."<br>";
