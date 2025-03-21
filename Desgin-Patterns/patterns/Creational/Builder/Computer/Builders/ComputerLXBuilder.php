<?php

namespace patterns\Creational\Builder\Computer\Builders;

use patterns\Creational\Builder\Computer\Builders\Interfaces\UPSBuilderInterface;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;
use patterns\Creational\Builder\Computer\MotherBoard\MainParts\UPS;
use patterns\Creational\Builder\Computer\MotherBoard\Motherboard;
use patterns\Creational\Builder\Computer\MotherBoard\Sockets\CType;
use patterns\Creational\Builder\Computer\MotherBoard\Sockets\USB;
use patterns\Creational\Builder\Computer\Parts\Keyboard;
use patterns\Creational\Builder\Computer\Parts\Monitor;
use patterns\Creational\Builder\Computer\Parts\Mouse;
use patterns\Creational\Builder\Computer\Types\Computer;
use patterns\Creational\Builder\Computer\Types\ComputerCS;
use patterns\Creational\Builder\Computer\Types\ComputerXL;

class ComputerLXBuilder extends Builder implements UPSBuilderInterface
{
    protected function buildMotherBoard(): Motherboard
    {
        $cpu = new CPU(3.5);
        $ram = new RAM(16);
        $GPU = new GPU(6);
        $disk = new Disk(512);
        $networkCard = new NetworkCard(6);

        $arr =[
            new USB('2.0'),
            new USB('4.0'),
            new USB('3.0'),
            new CType(true),
        ];

        $sockets = new Sockets($arr);

        return new Motherboard($cpu,$disk, $ram, $GPU, $sockets, $networkCard);


    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard('logitech', 'english');
    }

    public function buildMouse(): Mouse
    {
        return new Mouse(true);

    }

    //build Keyboard,
    public function buildMonitor(): Monitor
    {
        return new Monitor('Dell', 1990);

    }



    public function BuildUPS(): UPS
    {
        return new UPS('APC', 1000);
    }

    public function getComputer(): ComputerXL
    {
        $computer = new ComputerXL();
        $computer->setMotherBoard($this->buildMotherBoard());
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setUPS($this->buildUPS());
        $computer->setMouse($this->buildMouse());

        return $computer;
    }



}