<?php

namespace patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class UPS
{

    protected string $type;
    protected string $power;

    public function __construct(string $type, string $power)
    {
        $this->type = $type;
        $this->power = $power;
    }

    public function getPower(): string
    {
        return $this->power;
    }

    public function getType(): string
    {
        return $this->type;
    }

}