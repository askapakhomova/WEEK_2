<?php
interface ServiceInterface
{
//    public function apply(TariffInterface $tariff, &$price);

    public function getCost($parameter);
}