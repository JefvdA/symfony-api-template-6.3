<?php

declare(strict_types=1);

namespace JefvdA\PhpTemplate;

final class Calculator
{
    public static function add(int $x, int $y): int
    {
        return $x + $y;
    }
}