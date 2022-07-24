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
    public function calculateTripValue($currentTime, $distance)
    {
        if (!$currentTime instanceof \DateTime) {
            return -1;
        }

        if ($this->currentTimeIsBetween10PMAnd6AM($currentTime)) {
            return $distance * 3.9;
        }

        if ($this->isSunday($currentTime)) {
            return $distance * 3;
        }

        return $distance * 2.1;
    }

    /**
     * @param \DateTime $currentTime
     * @return bool
     */
    private function currentTimeIsBetween10PMAnd6AM(\DateTime $currentTime)
    {
        return intval($currentTime->format('H')) > 22 || intval($currentTime->format('H')) < 6;
    }

    /**
     * @param \DateTime $currentTime
     * @return bool
     */
    private function isSunday(\DateTime $currentTime)
    {
        return intval($currentTime->format('w')) === 0;
    }
}