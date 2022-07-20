<?php

namespace Agilize\Basic1Challenge;

class Main
{
    /**
     * Ct - o horário atual (currentTime)
     * dist - distância
     * calcTrip - calcula a tarifa de um uber
     * @param $ct
     * @param $dist
     * @return float|int
     */
    public function calcTrip($ct, $dist)
    {
        if ($ct instanceof \DateTime) {
            // overnight
            if (intval($ct->format('H')) > 22 || intval($ct->format('H')) < 6) {
                // valor overnight
                return $dist * 3.9;
            } else {
                // é domingo
                if (intval($ct->format('w')) === 0) {
                    return $dist * 3;
                } else {
                    // valor normal
                    return $dist * 2.1;
                }
            }
        } else {
            // nenhuma data informada
            return -1;
        }
    }
}