<?php

namespace patterns\Creational\Builder\Computer\Types;

use patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use patterns\Creational\Builder\Computer\MotherBoard\Motherboard;
use patterns\Creational\Builder\Computer\Parts\Keyboard;
use patterns\Creational\Builder\Computer\Parts\Monitor;
use patterns\Creational\Builder\Computer\Parts\Mouse;

abstract class Computer
{

    protected MotherBoard $motherBoard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;
    abstract public function turnOn(): bool;
    abstract public function turnOff(): bool;


    public function setMotherBoard(Motherboard $motherBoard): void
    {
        $this->motherBoard = $motherBoard;

    }

    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @param Mouse $mouse
     */
    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }

    /**
     * @param Monitor $monitor
     */
    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }

    public function dashboard(): string
    {
        return '';
    }

}