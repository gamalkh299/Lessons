<?php

namespace patterns\Creational\Builder\Computer\Parts;

class Keyboard
{

    protected string $type;
    protected string $language;


    public function __construct(string $type, string $language)
    {
        $this->type = $type;
        $this->language = $language;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getType(): string
    {
        return $this->type;
    }

}

