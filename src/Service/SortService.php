<?php

namespace App\Service;
use App\Entity\Cart;
use Symfony\Bundle\SecurityBundle\Security;

class SortService
{

    public static function sortByRating($products): array
    {
        usort($products, function ($a, $b) {
            return $b->getRating() <=> $a->getRating();
        });
        return $products;
    }

    public static function sortByDate($products): array
    {
        usort($products, function ($a, $b) {
            return $b->getAdded() <=> $a->getAdded();
        });
        return $products;
    }

    public static function sortByPriceAscending($products): array
    {
        usort($products, function($a, $b) {
            return $a->getPrice() <=> $b->getPrice();
        });
        return $products;
    }

    public static function sortByPriceDescending($products): array
    {
        usort($products, function ($a, $b) {
            return $b->getPrice() <=> $a->getPrice();
        });
        return $products;
    }

    public static function isValidColor($string): bool
    {
        return preg_match('/^#[0-9A-F]{3}([0-9A-F]{3})?$/i', $string);
    }
}