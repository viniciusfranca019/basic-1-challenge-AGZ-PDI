<?php

include_once "vendor/autoload.php";

$main = new \Agilize\Basic1Challenge\Main();
echo $main->calculateTripValue(new \DateTime(), 4);