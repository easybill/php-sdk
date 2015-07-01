<?php

namespace easybill\SDK\Model;

class Payment
{
    /** @var  int */
    public $documentID;
    /** @var  float */
    public $amount;
    /** @var  string */
    public $paymentdate;
    /** @var  string */
    public $paymenttype;
    /** @var  string */
    public $notice;
    /** @var  boolean */
    public $payed;
}