<?php
include '../scr/ServiceInterface.php';
include '../scr/TariffInterface.php';
include '../scr/TariffAbstract.php';
include '../scr/TariffBasic.php';
include '../scr/ServiceGPS.php';
include '../scr/ServiceDriver.php';
include '../scr/TariffHours.php';
include '../scr/TariffStudent.php';

$tariff = new TariffBasic(5,15);
$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDriver(100));

echo "Тариф базовый {$tariff->calculationPrice()} рублей, c подключением услуги водитель и GPS.";








