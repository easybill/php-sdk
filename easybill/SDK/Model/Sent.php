<?php

namespace easybill\SDK\Model;

/**
 * Class Sent
 *
 * @package easybill\SDK\Model
 *
 * @property string $sentDate
 * @property string $sendType
 */
class Sent
{
    const SEND_TYPE_EMAIL = 'EMAIL';
    const SEND_TYPE_POST = 'POST';
    const SEND_TYPE_FAX = 'FAX';

}