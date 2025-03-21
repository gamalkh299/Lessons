<?php

namespace patterns\Creational\Builder\Computer\Builders;

use patterns\Creational\Builder\Computer\MotherBoard\Motherboard;
use patterns\Creational\Builder\Computer\Parts\Keyboard;
use patterns\Creational\Builder\Computer\Parts\Monitor;
use patterns\Creational\Builder\Computer\Parts\Mouse;
use patterns\Creational\Builder\Computer\Types\Computer;

abstract class Builder
{

    protected Computer $computer;

    abstract protected function buildMotherBoard(): Motherboard;
    abstract protected function buildKeyboard(): Keyboard;
    abstract protected function buildMouse(): Mouse;
    abstract protected function buildMonitor(): Monitor;

    abstract public function getComputer(): Computer;
}