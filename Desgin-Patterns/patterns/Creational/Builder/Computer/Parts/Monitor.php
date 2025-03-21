<?php

namespace patterns\Creational\Builder\Computer\Parts;

/**
 *
 */
class Monitor
{

    /**
     * @var string
     */
    protected string $type;
    /**
     * @var string
     */
    protected string $resolution;


    /**
     * @param string $type
     * @param string $resolution
     */
    public function __construct(string $type, string $resolution)
    {
        $this->type = $type;
        $this->resolution = $resolution;
    }

    /**
     * @return string
     */
    public function getResolution(): string
    {
        return $this->resolution;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

}