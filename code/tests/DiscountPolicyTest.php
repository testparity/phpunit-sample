<?php

declare(strict_types=1);

use App\DiscountPolicy;
use App\InvoiceCalculator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DiscountPolicy::class)]
#[CoversClass(InvoiceCalculator::class)]
final class DiscountPolicyTest extends TestCase
{
    public function testAppliesStandardDiscount(): void
    {
        $calculator = new InvoiceCalculator;
        $subtotal = $calculator->multiplyQuantity(20, 5);

        self::assertSame(50, $calculator->divideTotal($subtotal, 2));
        self::assertSame(90.0, (new DiscountPolicy())->apply((float) $subtotal));
    }
}
