<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbpStock
 *
 * @ORM\Table(name="abp_stock", indexes={@ORM\Index(name="VIN", columns={"VIN"})})
 * @ORM\Entity
 */
class AbpStock
{
    /**
     * @var string
     *
     * @ORM\Column(name="source_id", type="string", length=500, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="VIN", type="string", length=255, nullable=false)
     */
    private $vin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registration", type="string", length=10, nullable=true)
     */
    private $registration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="builder", type="string", length=255, nullable=true)
     */
    private $builder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="familly", type="string", length=255, nullable=true)
     */
    private $familly;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @var string|null
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=true)
     */
    private $version;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var int|null
     *
     * @ORM\Column(name="km", type="integer", nullable=true)
     */
    private $km;

    /**
     * @var string|null
     *
     * @ORM\Column(name="energyLabel", type="string", length=50, nullable=true)
     */
    private $energylabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date1eic", type="string", length=255, nullable=true)
     */
    private $date1eic;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="doorsNumber", type="boolean", nullable=true)
     */
    private $doorsnumber;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="placesNumber", type="boolean", nullable=true)
     */
    private $placesnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gearboxLabel", type="string", length=50, nullable=true)
     */
    private $gearboxlabel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reportsNumber", type="boolean", nullable=true)
     */
    private $reportsnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origin", type="string", length=255, nullable=true)
     */
    private $origin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categorieLabel", type="string", length=50, nullable=true)
     */
    private $categorielabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @var int|null
     *
     * @ORM\Column(name="realPower", type="integer", nullable=true)
     */
    private $realpower;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mixedConsumption", type="string", length=25, nullable=true)
     */
    private $mixedconsumption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="urbanConsumption", type="string", length=25, nullable=true)
     */
    private $urbanconsumption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraUrbanConsumption", type="string", length=25, nullable=true)
     */
    private $extraurbanconsumption;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="fiscalPower", type="boolean", nullable=true)
     */
    private $fiscalpower;

    /**
     * @var int|null
     *
     * @ORM\Column(name="co2", type="integer", nullable=true)
     */
    private $co2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ecotax", type="string", length=5, nullable=true)
     */
    private $ecotax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="penalty", type="string", length=5, nullable=true)
     */
    private $penalty;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seriesEquipment", type="text", length=0, nullable=true)
     */
    private $seriesequipment;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salePriceEquipement", type="float", precision=10, scale=0, nullable=true)
     */
    private $salepriceequipement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="OptionEquipment", type="text", length=0, nullable=true)
     */
    private $optionequipment;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salePriceOption", type="float", precision=10, scale=0, nullable=true)
     */
    private $salepriceoption = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="missingEquipement", type="text", length=0, nullable=true)
     */
    private $missingequipement;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $tva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="isTVA", type="string", length=255, nullable=true)
     */
    private $istva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TVALabel", type="string", length=255, nullable=true)
     */
    private $tvalabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discountLabel", type="string", length=255, nullable=true)
     */
    private $discountlabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount", type="string", length=255, nullable=true)
     */
    private $discount;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salePrice", type="float", precision=10, scale=0, nullable=true)
     */
    private $saleprice = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="salePriceHT", type="float", precision=10, scale=0, nullable=true)
     */
    private $salepriceht = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="salePriceTTC", type="float", precision=10, scale=0, nullable=true)
     */
    private $salepricettc = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="salePriceTVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $salepricetva = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sourcePhotos", type="text", length=65535, nullable=true)
     */
    private $sourcephotos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mainPhotos", type="text", length=65535, nullable=true)
     */
    private $mainphotos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="featPhotos", type="text", length=65535, nullable=true)
     */
    private $featphotos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="startUpService", type="string", length=255, nullable=true)
     */
    private $startupservice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shippingDelay", type="string", length=255, nullable=true)
     */
    private $shippingdelay;

    /**
     * @var float|null
     *
     * @ORM\Column(name="shippingCost", type="float", precision=10, scale=0, nullable=true)
     */
    private $shippingcost = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="registrationCardCost", type="float", precision=10, scale=0, nullable=true)
     */
    private $registrationcardcost = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="startUpCost", type="float", precision=10, scale=0, nullable=true)
     */
    private $startupcost = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salepointName", type="string", length=255, nullable=true)
     */
    private $salepointname;

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    public function setRegistration(?string $registration): self
    {
        $this->registration = $registration;

        return $this;
    }

    public function getBuilder(): ?string
    {
        return $this->builder;
    }

    public function setBuilder(?string $builder): self
    {
        $this->builder = $builder;

        return $this;
    }

    public function getFamilly(): ?string
    {
        return $this->familly;
    }

    public function setFamilly(?string $familly): self
    {
        $this->familly = $familly;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getKm(): ?int
    {
        return $this->km;
    }

    public function setKm(?int $km): self
    {
        $this->km = $km;

        return $this;
    }

    public function getEnergylabel(): ?string
    {
        return $this->energylabel;
    }

    public function setEnergylabel(?string $energylabel): self
    {
        $this->energylabel = $energylabel;

        return $this;
    }

    public function getDate1eic(): ?string
    {
        return $this->date1eic;
    }

    public function setDate1eic(?string $date1eic): self
    {
        $this->date1eic = $date1eic;

        return $this;
    }

    public function getDoorsnumber(): ?bool
    {
        return $this->doorsnumber;
    }

    public function setDoorsnumber(?bool $doorsnumber): self
    {
        $this->doorsnumber = $doorsnumber;

        return $this;
    }

    public function getPlacesnumber(): ?bool
    {
        return $this->placesnumber;
    }

    public function setPlacesnumber(?bool $placesnumber): self
    {
        $this->placesnumber = $placesnumber;

        return $this;
    }

    public function getGearboxlabel(): ?string
    {
        return $this->gearboxlabel;
    }

    public function setGearboxlabel(?string $gearboxlabel): self
    {
        $this->gearboxlabel = $gearboxlabel;

        return $this;
    }

    public function getReportsnumber(): ?bool
    {
        return $this->reportsnumber;
    }

    public function setReportsnumber(?bool $reportsnumber): self
    {
        $this->reportsnumber = $reportsnumber;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getCategorielabel(): ?string
    {
        return $this->categorielabel;
    }

    public function setCategorielabel(?string $categorielabel): self
    {
        $this->categorielabel = $categorielabel;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getRealpower(): ?int
    {
        return $this->realpower;
    }

    public function setRealpower(?int $realpower): self
    {
        $this->realpower = $realpower;

        return $this;
    }

    public function getMixedconsumption(): ?string
    {
        return $this->mixedconsumption;
    }

    public function setMixedconsumption(?string $mixedconsumption): self
    {
        $this->mixedconsumption = $mixedconsumption;

        return $this;
    }

    public function getUrbanconsumption(): ?string
    {
        return $this->urbanconsumption;
    }

    public function setUrbanconsumption(?string $urbanconsumption): self
    {
        $this->urbanconsumption = $urbanconsumption;

        return $this;
    }

    public function getExtraurbanconsumption(): ?string
    {
        return $this->extraurbanconsumption;
    }

    public function setExtraurbanconsumption(?string $extraurbanconsumption): self
    {
        $this->extraurbanconsumption = $extraurbanconsumption;

        return $this;
    }

    public function getFiscalpower(): ?bool
    {
        return $this->fiscalpower;
    }

    public function setFiscalpower(?bool $fiscalpower): self
    {
        $this->fiscalpower = $fiscalpower;

        return $this;
    }

    public function getCo2(): ?int
    {
        return $this->co2;
    }

    public function setCo2(?int $co2): self
    {
        $this->co2 = $co2;

        return $this;
    }

    public function getEcotax(): ?string
    {
        return $this->ecotax;
    }

    public function setEcotax(?string $ecotax): self
    {
        $this->ecotax = $ecotax;

        return $this;
    }

    public function getPenalty(): ?string
    {
        return $this->penalty;
    }

    public function setPenalty(?string $penalty): self
    {
        $this->penalty = $penalty;

        return $this;
    }

    public function getSeriesequipment(): ?string
    {
        return $this->seriesequipment;
    }

    public function setSeriesequipment(?string $seriesequipment): self
    {
        $this->seriesequipment = $seriesequipment;

        return $this;
    }

    public function getSalepriceequipement(): ?float
    {
        return $this->salepriceequipement;
    }

    public function setSalepriceequipement(?float $salepriceequipement): self
    {
        $this->salepriceequipement = $salepriceequipement;

        return $this;
    }

    public function getOptionequipment(): ?string
    {
        return $this->optionequipment;
    }

    public function setOptionequipment(?string $optionequipment): self
    {
        $this->optionequipment = $optionequipment;

        return $this;
    }

    public function getSalepriceoption(): ?float
    {
        return $this->salepriceoption;
    }

    public function setSalepriceoption(?float $salepriceoption): self
    {
        $this->salepriceoption = $salepriceoption;

        return $this;
    }

    public function getMissingequipement(): ?string
    {
        return $this->missingequipement;
    }

    public function setMissingequipement(?string $missingequipement): self
    {
        $this->missingequipement = $missingequipement;

        return $this;
    }

    public function getTva(): ?float
    {
        return $this->tva;
    }

    public function setTva(?float $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    public function getIstva(): ?string
    {
        return $this->istva;
    }

    public function setIstva(?string $istva): self
    {
        $this->istva = $istva;

        return $this;
    }

    public function getTvalabel(): ?string
    {
        return $this->tvalabel;
    }

    public function setTvalabel(?string $tvalabel): self
    {
        $this->tvalabel = $tvalabel;

        return $this;
    }

    public function getDiscountlabel(): ?string
    {
        return $this->discountlabel;
    }

    public function setDiscountlabel(?string $discountlabel): self
    {
        $this->discountlabel = $discountlabel;

        return $this;
    }

    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    public function setDiscount(?string $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getSaleprice(): ?float
    {
        return $this->saleprice;
    }

    public function setSaleprice(?float $saleprice): self
    {
        $this->saleprice = $saleprice;

        return $this;
    }

    public function getSalepriceht(): ?float
    {
        return $this->salepriceht;
    }

    public function setSalepriceht(?float $salepriceht): self
    {
        $this->salepriceht = $salepriceht;

        return $this;
    }

    public function getSalepricettc(): ?float
    {
        return $this->salepricettc;
    }

    public function setSalepricettc(?float $salepricettc): self
    {
        $this->salepricettc = $salepricettc;

        return $this;
    }

    public function getSalepricetva(): ?float
    {
        return $this->salepricetva;
    }

    public function setSalepricetva(?float $salepricetva): self
    {
        $this->salepricetva = $salepricetva;

        return $this;
    }

    public function getSourcephotos(): ?string
    {
        return $this->sourcephotos;
    }

    public function setSourcephotos(?string $sourcephotos): self
    {
        $this->sourcephotos = $sourcephotos;

        return $this;
    }

    public function getMainphotos(): ?string
    {
        return $this->mainphotos;
    }

    public function setMainphotos(?string $mainphotos): self
    {
        $this->mainphotos = $mainphotos;

        return $this;
    }

    public function getFeatphotos(): ?string
    {
        return $this->featphotos;
    }

    public function setFeatphotos(?string $featphotos): self
    {
        $this->featphotos = $featphotos;

        return $this;
    }

    public function getStartupservice(): ?string
    {
        return $this->startupservice;
    }

    public function setStartupservice(?string $startupservice): self
    {
        $this->startupservice = $startupservice;

        return $this;
    }

    public function getShippingdelay(): ?string
    {
        return $this->shippingdelay;
    }

    public function setShippingdelay(?string $shippingdelay): self
    {
        $this->shippingdelay = $shippingdelay;

        return $this;
    }

    public function getShippingcost(): ?float
    {
        return $this->shippingcost;
    }

    public function setShippingcost(?float $shippingcost): self
    {
        $this->shippingcost = $shippingcost;

        return $this;
    }

    public function getRegistrationcardcost(): ?float
    {
        return $this->registrationcardcost;
    }

    public function setRegistrationcardcost(?float $registrationcardcost): self
    {
        $this->registrationcardcost = $registrationcardcost;

        return $this;
    }

    public function getStartupcost(): ?float
    {
        return $this->startupcost;
    }

    public function setStartupcost(?float $startupcost): self
    {
        $this->startupcost = $startupcost;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getSalepointname(): ?string
    {
        return $this->salepointname;
    }

    public function setSalepointname(?string $salepointname): self
    {
        $this->salepointname = $salepointname;

        return $this;
    }


}
