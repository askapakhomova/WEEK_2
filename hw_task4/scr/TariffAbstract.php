<?php

abstract class TariffAbstract implements TariffInterface
{
    const PRICE_MIN = self::PRICE_MIN;
    const PRICE_DIS = self::PRICE_DIS;
    protected $min;
    protected $distance;
    /** @var ServiceInterface[] */
    protected $services = [];

    public function __construct($distance, $min)
    {
        $this->distance = $distance;
        $this->min = $min;
    }

    public function calculationPrice()
    {
        $price = $this->distance * $this::PRICE_DIS + $this->min * $this::PRICE_MIN;

        foreach ($this->services as $service) {
            $price += $service->getCost($price);
        }
        return $price;
    }

    public function addService(ServiceInterface $service)
    {
        $this->services[] = $service;
        return $this;
    }

    public function getTime()
    {
        return $this->min;
    }

    public function getDistance()
    {
        return $this->distance;
    }
}