<?php

namespace App\Service;

use Exception;

class TrollJordanService
{
    public static function jordanTriesInjection(string $input): void
    {
        $input = strtolower($input);
        if (str_starts_with($input, "' or") || str_starts_with($input, '" or') ||
            str_contains($input, "union")) {
            throw new Exception('Jordan arrête de jouer ');
        };
    }
}