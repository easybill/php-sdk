<?php

namespace easybill\SDK\Request;

/**
 * Class DocumentsParams
 *
 * @property integer $CustomerId
 * @property boolean $Canceled
 * @property string  $LimitType
 *
 * @property string  $StatusType
 * @property string  $DocumentType
 *
 * @property Period  $LimitPeriod
 *
 * @package easybill\SDK\Request
 */
class DocumentsParams
{
    const STATUS_TYPE_DUE = 'DUE';
    const STATUS_TYPE_DUE_NOT_PAYED = 'DUE_NOT_PAYED';
    const STATUS_TYPE_PAYED = 'PAYED';
    const STATUS_TYPE_OPEN = 'OPEN';
    const STATUS_TYPE_OFFERS_OPEN = 'OFFERS_OPEN';

    const DOCUMENT_TYPE_INVOICE = 'INVOICE';
    const DOCUMENT_TYPE_OFFER = 'OFFER';
    const DOCUMENT_TYPE_CREDIT = 'CREDIT';
    const DOCUMENT_TYPE_CHARGE = 'CHARGE';
    const DOCUMENT_TYPE_DELIVERY = 'DELIVERY';
    const DOCUMENT_TYPE_ORDER = 'ORDER';
    const DOCUMENT_TYPE_STORNO = 'STORNO';

    const LIMIT_TYPE_DATE = 'DATE';
    const LIMIT_TYPE_CREATED = 'CREATED';
    const LIMIT_TYPE_MODIFIED = 'MODIFIED';
    const LIMIT_TYPE_PAID = 'PAID';

    function __construct()
    {
        $this->LimitPeriod = new Period();
    }


}