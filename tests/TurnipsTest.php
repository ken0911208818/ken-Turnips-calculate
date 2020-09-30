<?php

namespace BingHua\TurnipsCalculate\Tests;

use BingHua\TurnipsCalculate\SpoiledTurnips;
use BingHua\TurnipsCalculate\Turnips;
use BingHua\TurnipsCalculate\TurnipsFactory;
use BingHua\TurnipsCalculate\TurnipsFactoy;
use PHPUnit\Framework\TestCase;

class TurnipsTest extends TestCase
{

    /**
     * 檢查是否能丟出例外的大頭菜
     */
    public function test_error_turnips()
    {
        $this->expectException(\InvalidArgumentException::class);
        $turnips = new TurnipsFactory();
        $turnips::factory('未知的大頭菜', 40, 10);
    }

    /**
     *  檢查是否能建立好的大頭菜
     *  以及計算價錢
     */
    public function test_create_turnips_calculate()
    {
        $turnips = new TurnipsFactory();
        $turnips = $turnips::factory('好的大頭菜', 40, 10);
        $this->assertInstanceOf(Turnips::class, $turnips);
        $this->assertEquals(400, $turnips->calculatePrice());
    }

    /**
     *  檢查是否能建立壞掉的大頭菜
     *  價格是否都是0
     */
    public function test_create_spoiled_turnips_calculate()
    {
        $turnips = new TurnipsFactory();
        $turnips = $turnips::factory('壞掉的大頭菜', 40, 10);
        $this->assertInstanceOf(SpoiledTurnips::class, $turnips);
        $this->assertEquals(0, $turnips->calculatePrice());
    }
}
