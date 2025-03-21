<?php

namespace patterns\Creational\Builder\Computer\Parts;

class Mouse
{
    private bool $withExtraUtilities;

    /**
     * Mouse constructor.
     * @param bool $withExtraUtilities
     */
    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }

    /**
     * @return bool
     */
    public function isUtfSupport(): bool
    {
        return $this->withExtraUtilities;
    }

}