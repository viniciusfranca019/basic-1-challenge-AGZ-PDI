<?php

namespace Agilize\Basic1Challenge;

class Main
{
    /**
     * Ct - o horário atual (currentTime)
     * dist - distância
     * calcTrip - calcula a tarifa de um uber
     * @param $currentTime
     * @param $distance
     * @return float|int
     */
    public function calcTrip($currentTime, $distance)
    {
        if ($currentTime instanceof \DateTime) {
            // overnight
            if (intval($currentTime->format('H')) > 22 || intval($currentTime->format('H')) < 6) {
                // valor overnight
                return $distance * 3.9;
            } else {
                // é domingo
                if (intval($currentTime->format('w')) === 0) {
                    return $distance * 3;
                } else {
                    // valor normal
                    return $distance * 2.1;
                }
            }
        } else {
            // nenhuma data informada
            return -1;
        }
    }
}