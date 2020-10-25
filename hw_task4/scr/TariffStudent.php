<?php
class TariffStudent extends TariffAbstract
{
    protected $priceMin = 1;
    protected $priceDis = 4;

    public function say()
    {
        echo "Тариф студенческий ( $this->distance км, $this->min минут): ";
    }
}