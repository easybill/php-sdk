<?php

declare(strict_types=1);

namespace easybill\SDK\Models;

/**
 * Auto-generated with `composer sdk:models`.
 */
class PositionExportIdentifierExtended implements ToArrayInterface
{
    use Traits\Data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * Umsatzsteuerpflichtig.
     */
    public function setNULL(?string $NULL): void
    {
        $this->data['NULL'] = $NULL;
    }

    public function getNULL(): ?string
    {
        return $this->get('NULL');
    }

    /**
     * Nicht steuerbar (Drittland).
     */
    public function setNStb(?string $nStb): void
    {
        $this->data['nStb'] = $nStb;
    }

    public function getNStb(): ?string
    {
        return $this->get('nStb');
    }

    /**
     * Nicht steuerbar (EU mit USt-IdNr.).
     */
    public function setNStbUstID(?string $nStbUstID): void
    {
        $this->data['nStbUstID'] = $nStbUstID;
    }

    public function getNStbUstID(): ?string
    {
        return $this->get('nStbUstID');
    }

    /**
     * Nicht steuerbar (EU ohne USt-IdNr.).
     */
    public function setNStbNoneUstID(?string $nStbNoneUstID): void
    {
        $this->data['nStbNoneUstID'] = $nStbNoneUstID;
    }

    public function getNStbNoneUstID(): ?string
    {
        return $this->get('nStbNoneUstID');
    }

    /**
     * Nicht steuerbarer Innenumsatz.
     */
    public function setNStbIm(?string $nStbIm): void
    {
        $this->data['nStbIm'] = $nStbIm;
    }

    public function getNStbIm(): ?string
    {
        return $this->get('nStbIm');
    }

    /**
     * Steuerschuldwechsel §13b (Inland).
     */
    public function setRevc(?string $revc): void
    {
        $this->data['revc'] = $revc;
    }

    public function getRevc(): ?string
    {
        return $this->get('revc');
    }

    /**
     * Innergemeinschaftliche Lieferung.
     */
    public function setIG(?string $IG): void
    {
        $this->data['IG'] = $IG;
    }

    public function getIG(): ?string
    {
        return $this->get('IG');
    }

    /**
     * Ausfuhrlieferung.
     */
    public function setAL(?string $AL): void
    {
        $this->data['AL'] = $AL;
    }

    public function getAL(): ?string
    {
        return $this->get('AL');
    }

    /**
     * sonstige Steuerbefreiung.
     */
    public function setSStfr(?string $sStfr): void
    {
        $this->data['sStfr'] = $sStfr;
    }

    public function getSStfr(): ?string
    {
        return $this->get('sStfr');
    }

    /**
     * Kleinunternehmen (Keine MwSt.).
     */
    public function setSmallBusiness(?string $smallBusiness): void
    {
        $this->data['smallBusiness'] = $smallBusiness;
    }

    public function getSmallBusiness(): ?string
    {
        return $this->get('smallBusiness');
    }
}