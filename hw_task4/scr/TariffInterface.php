<?php
interface TariffInterface
{
   public function calculationPrice();
   public function addService(ServiceInterface $service);
   public function getTime();
   public function getDistance();
}