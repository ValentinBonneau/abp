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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getAddress3(): ?string
    {
        return $this->address3;
    }

    public function setAddress3(string $address3): self
    {
        $this->address3 = $address3;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getIsstorage(): ?bool
    {
        return $this->isstorage;
    }

    public function setIsstorage(?bool $isstorage): self
    {
        $this->isstorage = $isstorage;

        return $this;
    }


}
