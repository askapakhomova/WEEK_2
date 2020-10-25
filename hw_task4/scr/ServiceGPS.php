<?php
class ServiceGPS implements ServiceInterface
{
    private $pricePerHours;

    public function __construct(int $pricePerHours)
    {
        $this->pricePerHours = $pricePerHours;
    }

    public function apply(TariffInterface $tariff, &$price)
    {
        $time = ceil($tariff->getTime() / 60);
        $price += $this->pricePerHours * $time;
    }

}