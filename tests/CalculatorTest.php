<?php

declare(strict_types=1);

namespace JefvdA\PhpTemplate\Tests;

use JefvdA\PhpTemplate\Calculator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    #[DataProvider('twoIntWithSumProvider')]
    public function testAddMethodCorrectlyAddsTwoInt(int $x, int $y, int $expectedSum): void
    {
        $actualSum = Calculator::add($x, $y);

        self::assertEquals($expectedSum, $actualSum);
    }

    /**
     * @return array<string, array{int, int, int}>
     */
    public static function twoIntWithSumProvider(): array
    {
        return [
            'One plus Two equals Three'    => [1, 2, 3],
            'Four plus Five equals Nine'   => [4, 5, 9],
            'Three plus Four equals Seven' => [3, 4, 7],
        ];
    }
}
