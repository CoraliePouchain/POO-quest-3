<?php

require_once 'HighWay.php';


final class RsidentialWay extends HighWay 
{
    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}