<?php
class TariffHours extends TariffAbstract
{
    const PRICE_MIN =  200/60;
    const PRICE_DIS = 0;
    const MIN_IN_HOUR = 60;

  public function __construct($distance, $min)
  {
      parent::__construct($distance, $min);
      $this->min = $this->min - $this->min % $this::MIN_IN_HOUR + $this::MIN_IN_HOUR;
  }
}