<?php

require_once('./MovableClass.php');

$bmw = new Ride(4);
$bmw->start();
$bmw->up();
$bmw->up();
$bmw->up();
$bmw->up();
$bmw->up();
$bmw->up();
$bmw->down();
$bmw->down();
$bmw->down();
$bmw->down();
$bmw->down();
$bmw->stop();