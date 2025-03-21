<?php

namespace patterns\Creational\Builder\Computer\MotherBoard;

use patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;

class Motherboard
{
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Sockets $sockets;
    private NetworkCard $networkCard;
    private Disk $disk;

    /**
     * @param CPU $cpu
     * @param Disk $disk
     * @param RAM $ram
     * @param GPU $gpu
     * @param Sockets $sockets
     * @param NetworkCard $networkCard
     */
    public function __construct(CPU $cpu, Disk $disk, RAM $ram, GPU $gpu, Sockets $sockets, NetworkCard $networkCard)
    {
        $this->cpu = $cpu;
        $this->disk = $disk;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
        $this->networkCard = $networkCard;
    }

    public function getCpu(): CPU
    {
        return $this->cpu;
    }

    public function getRam(): RAM
    {
        return $this->ram;
    }

    public function getGpu(): GPU
    {
        return $this->gpu;
    }

    public function getSockets(): Sockets
    {
        return $this->sockets;
    }

    public function getNetworkCard(): NetworkCard
    {
        return $this->networkCard;
    }

    public function getDisk(): Disk
    {
        return $this->disk;
    }




}