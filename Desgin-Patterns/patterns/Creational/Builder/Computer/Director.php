<?php

namespace patterns\Creational\Builder\Computer;

use patterns\Creational\Builder\Computer\Builders\Builder;
use patterns\Creational\Builder\Computer\Types\Computer;

class Director
{
    /**
     * @var Builder
     */
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param Builder $builder
     * @return void
     */
    public function changeBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function makeComputer(): Computer
    {
        return $this->builder->getComputer();
    }

}