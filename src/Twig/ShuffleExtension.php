<?php

namespace App\Twig;

use Twig\TwigFilter;

class ShuffleExtension extends \Twig\Extension\AbstractExtension
{

    public function getFilters() {
        return [
            new TwigFilter('shuffle', [$this, 'shuffleArray'])
        ];
    }

    public function shuffleArray($array) {
        shuffle($array);
        return $array;
    }

}