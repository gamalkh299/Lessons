<?php

namespace patterns\Creational\Builder\Computer\Builders\Interfaces;

use patterns\Creational\Builder\Computer\MotherBoard\MainParts\UPS;

interface UPSBuilderInterface
{

    public function BuildUPS(): UPS;

}