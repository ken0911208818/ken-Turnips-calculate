<?php
namespace BingHua\TurnipsCalculate;

use http\Exception\InvalidArgumentException;

class Turnips extends TurnipsPrototype
{
    public function __construct(int $price, int $count)
    {
        $this->price = $price;
        $this->count = $count;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}