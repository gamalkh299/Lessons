<?php

namespace patterns\Creational\Builder\Computer\Types;

use patterns\Creational\Builder\Computer\MotherBoard\MainParts\CoolingSystem;
use patterns\Creational\Builder\Computer\Types\Interfaces\ICoolingSystem;

class ComputerCS extends Computer implements ICoolingSystem
{

    private CoolingSystem $cs;



    public function turnOn(): bool
    {
        return true;
    }

    public function turnOff(): bool
    {
       return true;
    }

    /**
     * @param CoolingSystem $cs
     */
    public function setCs(CoolingSystem $cs): void
    {
        $this->cs = $cs;
    }

    public function coolDown(int $temp): string
    {
       if ($temp < 0) {
              return 'Cooling down';
       } else {
              return 'Cooling up';

       }
    }
}