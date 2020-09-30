<?php


namespace BingHua\TurnipsCalculate;


class SpoiledTurnips extends TurnipsPrototype
{
    const spoiledPrice = 0;
    public function __construct(int $price, int $count)
    {
        $this->price = self::spoiledPrice;
        $this->count = $count;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}