<?php

namespace patterns\Creational\Builder\Computer\MotherBoard\MainParts;

/**
 *
 */
class GPU
{
    /**
     * @var int
     */
    private int $speed;

    /**
     * @param int $speed
     */
    public function __construct(int $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }




}