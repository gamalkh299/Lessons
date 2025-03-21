<?php

namespace patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class CoolingSystem
{
    protected string $type;
    protected string $coolingType;

    public function __construct(string $type, string $coolingType)
    {
        $this->type = $type;
        $this->coolingType = $coolingType;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getCoolingType(): string
    {
        return $this->coolingType;
    }

}