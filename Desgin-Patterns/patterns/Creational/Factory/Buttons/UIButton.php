<?php

namespace patterns\Creational\Factory\Buttons;

class UIButton extends Button
{
    public function show(): string
    {
        return 'UI Button';
    }

    public function click(): void
    {
        echo 'UI Button Clicked';
    }

}