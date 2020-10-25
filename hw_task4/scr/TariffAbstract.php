<?php
abstract class TariffAbstract implements TariffInterface
{
protected $priceMin;
protected $priceDis;
protected $min;
protected $distance;
    /** @var ServiceInterface[] */
protected $services = [];

public function __construct (int $distance, int $min)
{
    $this->distance = $distance;
    $this->min = $min;
}
    public function calculationPrice(): int
    {
        $price = $this->distance * $this->priceDis + $this->min * $this->priceMin;

        if ($this->services) {
            foreach ($this->services as $service) {
                $service->apply($this, $price);
            }
        }
        return $price;
    }

    public function addService(ServiceInterface $service): TariffInterface
    {
        array_push($this->services, $service);
        return $this;
    }

    public function getTime(): int
    {
        return $this->min;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}