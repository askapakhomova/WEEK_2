<?php
class TariffHours extends TariffAbstract
{
    const PRICE_MIN =  200 / 60;
    const PRICE_DIS = 0;

    public function __construct(int $distance, int $min)
    {
        parent::__construct($distance, $min);
        $this->min = $this->min - $this->min % 60 + 60;
    }
}