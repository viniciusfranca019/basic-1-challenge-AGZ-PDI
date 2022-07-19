<?php

include_once "vendor/autoload.php";

$main = new \Agilize\PooChallenge\Main();
echo $main->calcTrip(new \DateTime(), 4);