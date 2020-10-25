<?php
interface TariffInterface
{
   public function calculationPrice(): int;
   public function addService(ServiceInterface $service): self;
   public function getTime(): int;
   public function getDistance(): int;

}