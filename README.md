# ken-Turnips-calculate

## how to install
```
composer require binghua/turnipscalculate
```
## how to use 

```
use BingHua\TurnipsCalculate\TurnipsFactory;

public function __construct(TurnipsFactory $turnipsFactory)
    {
        $this->turnipsFactory = $turnipsFactory;
    }

    public function create()
    {
        $type = '好的大頭菜'
        //$type = '壞掉的大頭菜'
        $price = 400;
        $count = 10
        return $this->turnipsFactory::factory($type, $price, $count)->calculatePrice();
    }
```
