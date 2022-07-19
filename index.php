<?php

include_once "vendor/autoload.php";

$main = new \Agilize\Basic1Challenge\Main();
echo $main->calcTrip(new \DateTime(), 4);