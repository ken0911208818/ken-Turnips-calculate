<?php


namespace BingHua\TurnipsCalculate;


abstract class TurnipsPrototype implements TurnipsInterface
{
    /**
     * @var string
     */
    protected string $category;

    /**
     * @var int
     */
    protected int $price;

    /**
     * @var int
     */
    protected int $count;

    abstract public function __clone();

    public function calculatePrice(): int
    {
        if (isset($this->price) && isset($this->count)) {
            return $this->price * $this->count;
        }
        return 0;
    }
}