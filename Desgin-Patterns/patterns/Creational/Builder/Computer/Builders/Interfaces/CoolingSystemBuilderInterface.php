<?php

namespace patterns\Creational\Builder\Computer\Builders\Interfaces;

interface CoolingSystemBuilderInterface
{
    /**
     * @return \patterns\Creational\Builder\Computer\MotherBoard\MainParts\CoolingSystem
     */
    public function BuildCoolingSystem(): \patterns\Creational\Builder\Computer\MotherBoard\MainParts\CoolingSystem;

}