<?php

namespace patterns\Creational\Builder\Computer\Builders;

use patterns\Creational\Builder\Computer\Builders\Interfaces\CoolingSystemBuilderInterface;
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

class ComputerCSBuilder extends Builder implements CoolingSystemBuilderInterface
{
    protected function buildMotherBoard(): Motherboard
    {
        $cpu = new CPU(2.5);
        $ram = new RAM(16);
        $GPU = new GPU(4);
        $disk = new Disk(512);
        $networkCard = new NetworkCard(5);

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
      return  new UPS('techno', 1000);
    }
    public function BuildCoolingSystem(): \patterns\Creational\Builder\Computer\MotherBoard\MainParts\CoolingSystem
    {
        return new \patterns\Creational\Builder\Computer\MotherBoard\MainParts\CoolingSystem('water', 1000);
    }


    public function getComputer(): Computer
    {
        $computer = new ComputerCS();
        $computer->setMotherBoard($this->buildMotherBoard());
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setCs($this->BuildCoolingSystem());
        $computer->setMouse($this->buildMouse());

        return $computer;
    }
}