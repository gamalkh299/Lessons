<?php

namespace patterns\Creational\Factory\Buttons;

class webButton extends Button
{
    public function show(): string
    {
        return "<button>Web Button</button>";

    }

    public function click(): void
    {
        echo 'Web Button Clicked';
    }

}