<?php

namespace patterns\Creational\Builder\Computer\MotherBoard\MainParts;

/**
 *
 */
class Sockets
{
    /**
     * @var array
     */
    private array $sockets;

    /**
     * @param array $sockets
     */
    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }

    /**
     * @return array
     */
    public function getSockets(): array
    {
        return $this->sockets;
    }


}