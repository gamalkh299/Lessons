<?php

namespace patterns\Creational\Builder\Computer\Types;

use patterns\Creational\Builder\Computer\MotherBoard\MainParts\UPS;
use patterns\Creational\Builder\Computer\Types\Interfaces\PowerSaver;

class ComputerXL extends Computer implements PowerSaver
{

    private UPS $UPS;
    public function turnOn(): bool
    {
        return true;
    }

    public function turnOff(): bool
    {
        return true;
    }

    public function setUPS(UPS $UPS):void
    {
        $this->UPS = $UPS;

    }

    public function savePower(): bool
    {
        return true;
    }
}