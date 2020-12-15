<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('convertDistance', [$this, 'convertDistance']),
        ];
    }

    public function convertDistance(float $distance, string $unit)
    {
        if ($unit === 'K') {
            return $distance;
        } elseif ($unit === 'M') {
            return $distance / 1.60;
        }
    }
}
