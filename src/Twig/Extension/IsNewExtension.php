<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\IsNewExtensionRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class IsNewExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('isNew', [IsNewExtensionRuntime::class, 'isNew']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('isNew', [IsNewExtensionRuntime::class, 'isNew']),
        ];
    }
}
