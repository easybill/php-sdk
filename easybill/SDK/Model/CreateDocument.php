<?php

namespace easybill\SDK\Model;

/**
 * Class CreateDocument
 *
 * @package easybill\SDK\Model
 */
class CreateDocument extends DocumentDescriber
{
    public $signDocument;
    /** @var  boolean */
    public $sendasemail;
    /** @var  string */
    public $emailSubject;
    /** @var  string */
    public $emailText;
    /** @var  boolean */
    public $sendaspost;
    /** @var  boolean */
    public $sendbyself;
    /** @var  string */
    public $templateName;
    /** @var  boolean */
    public $templateTextTakeOver;
    /** @var  boolean */
    public $suppressResponsePDF;


    public function addPosition(DocumentPosition $position)
    {
        if (!is_array($this->documentPosition)) {
            $this->documentPosition = array();
        }

        $this->documentPosition[] = $position;
    }
}