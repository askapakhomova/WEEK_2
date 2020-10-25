<?php
class TariffBasic extends TariffAbstract
{
    protected $priceMin = 3;
    protected $priceDis = 10;

    public function say()
    {
       echo "Тариф базовый ( $this->distance км, $this->min минут): ";
    }
}