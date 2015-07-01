<?php

namespace easybill\SDK\Model;


class CreateReminder
{
    public $invoiceId;
    public $textPrefix;
    public $text;
    public $contactLabel;
    public $contactText;
    public $signDocument;
    public $sendasemail;
    public $emailSubject;
    public $emailText;
    public $sendaspost;
    public $sendbyself;
    public $templateName;
    public $suppressResponsePDF;
}