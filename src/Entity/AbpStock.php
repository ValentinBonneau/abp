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


}
