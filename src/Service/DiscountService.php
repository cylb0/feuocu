<?php

namespace App\Service;

use App\Entity\Discount;
use App\Repository\DiscountRepository;
use InvalidArgumentException;

class DiscountService
{
    private DiscountRepository $discountRepository;
    public function __construct(DiscountRepository $discountRepository)
    {
        $this->discountRepository = $discountRepository;
    }

    public function createDiscount(Discount $discount, float $input): void
    {
        if (!is_numeric($input)) {
            throw new InvalidArgumentException('Vous devez entrer une valeur numérique');
        }
        $input = number_format((float)$input, 2, '.', '');

        $type = $discount->getType();
        if ($type === 'percentage') {
            if ($input > 100) {
                throw new InvalidArgumentException('Impossible d\'excéder 100%');
            }
            $discount->setValue($input);
        } else if ($type === 'gross') {
            $discount->setValue(abs($input));
        }

        $this->discountRepository->save($discount, true);
    }

    public function deleteDiscount(Discount $discount): void
    {
        $this->discountRepository->removeDiscountFromProducts($discount);
        $this->discountRepository->remove($discount, true);
    }
}