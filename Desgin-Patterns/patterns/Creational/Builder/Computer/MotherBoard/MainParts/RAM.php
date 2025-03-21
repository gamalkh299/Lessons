<?php

namespace patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class RAM
{
    /**
     * @var int
     */
    private int $size;

    /**
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }




}