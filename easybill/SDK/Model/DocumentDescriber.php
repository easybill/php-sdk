<?php

namespace easybill\SDK\Model;

/**
 * Class DocumentDescriber
 *
 * @package easybill\SDK\Model
 */
class DocumentDescriber
{
    public $documentType;
    public $documentID;
    public $customerID;
    public $currency;
    public $textPrefix;
    public $text;
    public $contactLabel;
    public $contactText;
    /** @var  DocumentPosition[] */
    public $documentPosition;
    public $taxOptions;
    public $documentDate;
    public $created;
    public $edited;
    public $serviceDate;
    public $documentNumber;
    public $documentTitle;
    public $cashAllowance;
    public $cashAllowanceDays;
    public $cashDiscount;
    public $cashDiscountType;
    public $gracePeriod;
    public $amount;
    public $amountNetto;
    public $bankTransfer;
    public $refID;
    public $stornoID;
}