<?php

namespace easybill\SDK\Model;

/**
 * Class CreateDocument
 *
 * @package easybill\SDK\Model
 */
class DocumentCreated
{
    /** @var  string */
    public $fileName;
    /** @var  string */
    public $file;
    /** @var  boolean */
    public $signDocument;
    /** @varstring */
    public $signexception;
    /** @var  boolean */
    public $sentasemail;
    /** @var  string */
    public $emailsendexception;
    /** @var  boolean */
    public $sentaspost;
    /** @var  string */
    public $postsendexception;
    /** @var  DocumentDescriber */
    public $document;
}