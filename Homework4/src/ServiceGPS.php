<?php
class ServiceGPS implements ServiceInterface
{
    private $pricePerHours;
    public function __construct($pricePerHours)
    {
        $this->pricePerHours = $pricePerHours;
    }
    public function apply(TariffInterface $tariff, &$price)
    {
        $hours = ceil($tariff->getMinutes() / 60);
        $price += $this->pricePerHours * $hours;
    }
}
