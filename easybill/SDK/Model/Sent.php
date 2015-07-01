<?php

namespace easybill\SDK\Model;

/**
 * Class Sent
 *
 * @package easybill\SDK\Model
 */
class Sent
{
    const SEND_TYPE_EMAIL = 'EMAIL';
    const SEND_TYPE_POST = 'POST';
    const SEND_TYPE_FAX = 'FAX';

    /** @var  string */
    public $sentDate;
    /** @var  string */
    public $sendType;
}