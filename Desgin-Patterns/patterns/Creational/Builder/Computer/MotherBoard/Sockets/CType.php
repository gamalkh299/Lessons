<?php

namespace patterns\Creational\Builder\Computer\MotherBoard\Sockets;

class CType
{

    private bool $withVideoTransfer;

    /**
     * @param bool $withVideoTransfer
     */
    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }




}