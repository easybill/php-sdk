<?php

namespace easybill\SDK\Model;

class DocumentPosition
{
    const POSITION_TYPE_POSITION = 'POSITION';
    const POSITION_TYPE_TEXT = 'TEXT';
    const POSITION_TYPE_POSITION_NO_CALC = 'POSITION_NOCALC';

    const DISCOUNT_TYPE_AMOUNT = 'AMOUNT';
    const DISCOUNT_TYPE_PERCENT = 'PERCENT';
    const DISCOUNT_TYPE_QUANTITY = 'QUANTITY';
    const DISCOUNT_TYPE_FIX = 'FIX';

    public $positionType;
    public $itemNumber;
    public $itemDescription;
    public $count;
    public $unit;
    public $singlePriceNetto;
    public $ustPercent;
    public $discount;
    public $discountType;
    public $companyPositionID;
    public $exportID;
    public $exportCost1;
    public $exportCost2;
    public $costPrice;

    /**
     * @param CompanyPosition $companyPosition
     * @param int             $count
     *
     * @todo: Which salePrice?
     *
     * @return DocumentPosition
     */
    public static function createFromCompanyPosition(CompanyPosition $companyPosition, $count = 1)
    {
        $documentPosition = new self();

        $documentPosition->companyPositionID = $companyPosition->positionID;
        $documentPosition->positionType = self::POSITION_TYPE_POSITION;
        $documentPosition->itemNumber = $companyPosition->itemNumber;
        $documentPosition->itemDescription = $companyPosition->itemDescription;
        $documentPosition->count = $count;
        $documentPosition->unit = $companyPosition->unit;
        $documentPosition->singlePriceNetto = $companyPosition->salePrice;
        $documentPosition->ustPercent = $companyPosition->ustPercent;
        $documentPosition->exportID = $companyPosition->exportID;
        $documentPosition->costPrice = $companyPosition->costPrice;

        return $documentPosition;
    }
}