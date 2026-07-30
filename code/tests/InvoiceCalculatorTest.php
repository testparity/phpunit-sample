<?php

declare(strict_types=1);

namespace Tests;

use App\InvoiceCalculator;
use PHPUnit\Framework\TestCase;

final class InvoiceCalculatorTest extends TestCase
{
    public function test_covers_the_core_invoice_operations(): void
    {
        $calculator = new InvoiceCalculator;

        self::assertSame(125, $calculator->totalWithTax(100, 25));
        self::assertSame(90, $calculator->subtotalAfterCredit(100, 10));
    }
}
