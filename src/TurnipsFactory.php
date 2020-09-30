<?php


namespace BingHua\TurnipsCalculate;


use InvalidArgumentException;

class TurnipsFactory
{
    public static function factory(string $type, int $price, int $count): TurnipsPrototype
    {
        if ($type ==='好的大頭菜') {
            return new Turnips($price, $count);
        }
        if ($type ==='壞掉的大頭菜') {
            return new SpoiledTurnips($price, $count);
        }
        throw new \InvalidArgumentException('找不到這種分類的大頭菜');
    }

}