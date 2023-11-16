<?php

declare(strict_types=1);

namespace JefvdA\SymfonyApiTemplate;

final class Calculator
{
    public static function add(int $x, int $y): int
    {
        return $x + $y;
    }
}