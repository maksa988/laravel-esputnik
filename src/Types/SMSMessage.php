<?php
declare(strict_types=1);

namespace ESputnik\Types;

use ESputnik\ESObject;

/**
 * Class SMSMessage
 *
 * @property integer  $id
 * @property string   $name
 * @property string   $from
 * @property string   $subject
 * @property string   $htmlText
 * @property string[] $tags
 *
 * @link https://esputnik.com/api/el_ns0_smsMessage.html
 */
class SMSMessage extends ESObject
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string[]
     */
    protected $tags = [];
}
