<?php

namespace patterns\Creational\Factory\Buttons;

abstract class Button
{
    abstract public function show(): string;
    abstract public function click(): void;

}