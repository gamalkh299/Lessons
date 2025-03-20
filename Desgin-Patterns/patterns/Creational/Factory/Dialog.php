<?php

namespace patterns\Creational\Factory;

use patterns\Creational\Factory\Buttons\Button;

abstract class Dialog
{
    /**
     * @return Button
     */
    abstract public function createButton(): Button;

    public function render(): string
    {
        $button = $this->createButton();
        return $button->show();
    }

}