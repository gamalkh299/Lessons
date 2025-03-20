<?php

namespace patterns\Creational\Factory;

use patterns\Creational\Factory\Buttons\Button;
use patterns\Creational\Factory\Buttons\webButton;

class WebDialog extends Dialog
{
    public function createButton(): Button
    {
        return new WebButton();
    }

}