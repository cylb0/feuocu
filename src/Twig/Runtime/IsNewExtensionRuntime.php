<?php

namespace App\Twig\Runtime;

use DateInterval;
use DateTimeImmutable;
use DateTimeInterface;
use Twig\Extension\RuntimeExtensionInterface;

class IsNewExtensionRuntime implements RuntimeExtensionInterface
{
    public function isNew(DateTimeInterface $value, string $days = 'P3D'): bool
    {
        $today = new DateTimeImmutable();
        $oneWeekAgo = $today->sub(new DateInterval($days));
        return $value > $oneWeekAgo;
    }
}
