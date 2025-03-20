<?php

namespace patterns\Creational\Factory\Buttons;

class SystemButton extends Button
{
    public function show(): string
    {
        return 'System Button';
    }

    public function click(): void
    {
        echo 'System Button Clicked';
    }

}