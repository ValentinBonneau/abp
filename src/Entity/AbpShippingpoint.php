<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbpShippingpoint
 *
 * @ORM\Table(name="abp_shippingpoint")
 * @ORM\Entity
 */
class AbpShippingpoint
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=500, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=255, nullable=false)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="address3", type="string", length=255, nullable=false)
     */
    private $address3;

    /**
     * @var int
     *
     * @ORM\Column(name="cost", type="integer", nullable=false)
     */
    private $cost;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isStorage", type="boolean", nullable=true)
     */
    private $isstorage;


}
