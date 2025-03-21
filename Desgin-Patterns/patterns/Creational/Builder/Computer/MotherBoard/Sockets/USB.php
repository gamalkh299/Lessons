<?php

namespace patterns\Creational\Builder\Computer\MotherBoard\Sockets;


class USB
{
    /**
     * @var string
     */
    private string $version;

    /**
     * @param string $version
     */
    public function __construct(string $version)
    {
        $this->version = $version;
    }


}