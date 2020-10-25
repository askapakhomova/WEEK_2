<?php
class TariffHours extends TariffAbstract
{
    protected $priceDis = 0;
    protected $priceMin = 200 / 60;

    public function __construct(int $distance, int $min)
    {
        parent::__construct($distance, $min);
        $this->min = $this->min - $this->min % 60 + 60;
    }
    public function say()
    {
        echo "Тариф почасовый ( $this->distance км, $this->min минут): ";
    }
}