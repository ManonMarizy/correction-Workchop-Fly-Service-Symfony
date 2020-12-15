<?php

namespace App\Service;

class GeoService
{
    public function calcDistance(float $lat1, float $lng1, float $lat2, float $lng2) : float
    {
        $latRad1 = $lat1 * 0.017453293;
        $latRad2 = $lat2 * 0.017453293;
        $lngRad1 = $lng1 * 0.017453293;
        $lngRad2 = $lng2 * 0.017453293;

        $midLat = $latRad2 - $latRad1;
        $midLng = $lngRad2 - $lngRad1;

        $latSin = sin(($latRad1 - $latRad2)/2);
        $lonSin = sin(($lngRad1 - $lngRad2)/2);

        $dist = 2 * asin(sqrt(($latSin*$latSin) + cos($latRad1) * cos($latRad2) * ($lonSin * $lonSin)));

        $dist = $dist * 6371;

        return $dist;
    }
}