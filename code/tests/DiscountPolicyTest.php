<?php

declare(strict_types=1);

use App\DiscountPolicy;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DiscountPolicy::class)]
final class DiscountPolicyTest extends TestCase
{
    public function testAppliesStandardDiscount(): void
    {
        self::assertSame(90.0, (new DiscountPolicy())->apply(100.0));
    }
}
