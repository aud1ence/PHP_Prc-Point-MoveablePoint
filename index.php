<?php

use src\Point;
use src\MoveAblePoint;

include_once "vendor/autoload.php";

$point = new Point(11, 22);
echo $point->toString();
var_dump($point->getXY());
echo "<br>";
$point->setXY(55, 66);
var_dump($point->getXY());
$point->setX(20);
echo "<br>";
echo $point->toString();
var_dump($point->getXY());

echo "<br>";
$move = new MoveAblePoint(44, 55, 10, 10);
echo $move->__toString();
var_dump($move->getSpeed());

for ($i = 0; $i < 100; $i++) {
    echo $move->move();
    echo "<br>";
}