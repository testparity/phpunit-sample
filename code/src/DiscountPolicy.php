<?php

declare(strict_types=1);

namespace App;

class DiscountPolicy
{
    public function apply(float $subtotal, bool $vip = false): float
    {
        $rate = $vip ? 0.20 : 0.10;

        return round($subtotal * (1 - $rate), 2);
    }
}
