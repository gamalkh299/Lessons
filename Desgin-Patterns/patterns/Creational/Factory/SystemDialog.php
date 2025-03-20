<?php

namespace patterns\Creational\Factory;

use patterns\Creational\Factory\Buttons\Button;
use patterns\Creational\Factory\Buttons\SystemButton;

class SystemDialog extends Dialog
{
    public function createButton(): Button
    {
        return new SystemButton();
    }

}