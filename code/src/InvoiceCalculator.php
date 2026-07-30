<?php

declare(strict_types=1);

namespace App;

final class InvoiceCalculator
{
    public function totalWithTax(int $subtotal, int $tax): int
    {
        return $subtotal + $tax;
    }

    public function subtotalAfterCredit(int $subtotal, int $credit): int
    {
        return $subtotal - $credit;
    }

    public function multiplyQuantity(int $unitPrice, int $quantity): int
    {
        return $unitPrice * $quantity;
    }

    public function divideTotal(int $total, int $payments): int
    {
        return intdiv($total, $payments);
    }

    public function forecastWithBuffer(int $subtotal, int $buffer): int
    {
        return $subtotal + $buffer;
    }
}
