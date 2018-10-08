<?php

namespace ESputnik\Types;

use ESputnik\ESObject;

/**
 * Class ImportSessionStatus
 *
 * @property string   $status
 * @property string   $timestamps
 * @property string   $description
 *
 * @link https://esputnik.com/api/el_ns0_importSessionStatus.html
 */
class ImportSessionStatus extends ESObject
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $timestamps;

    /**
     * @var string
     */
    protected $description;
}