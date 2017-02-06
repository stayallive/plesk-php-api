<?php

namespace PleskX\Api\Struct\Webspace;

use PleskX\Api\Struct;

class HostingInfoProperty extends Struct
{
    /**
     * Property name.
     *
     * @var string
     */
    public $name;

    /**
     * Property type.
     *
     * @var string
     */
    public $type;

    /**
     * Property label.
     *
     * @var string
     */
    public $label;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'name',
            'type',
            'label',
        ]);
    }
}
