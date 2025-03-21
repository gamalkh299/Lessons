<?php

namespace patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class CPU
{
    /**
     * @var float
     */
    private float $speed;

    /**
     * @param float $speed
     */
    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }




}