<?php

namespace patterns\Creational\Builder\Computer\Types\Interfaces;

interface ICoolingSystem
{
    public function coolDown(int $temp): string;

}