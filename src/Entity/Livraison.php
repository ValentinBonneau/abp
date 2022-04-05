<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="client", columns={"client"}), @ORM\Index(name="depart", columns={"depart"}), @ORM\Index(name="commercial", columns={"commercial"}), @ORM\Index(name="arivee", columns={"arivee"}), @ORM\Index(name="responsable", columns={"responsable"}), @ORM\Index(name="contenue", columns={"contenue"})})
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \AbpStock
     *
     * @ORM\ManyToOne(targetEntity="AbpStock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contenue", referencedColumnName="source_id")
     * })
     */
    private $contenue;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \Personnel
     *
     * @ORM\ManyToOne(targetEntity="Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsable", referencedColumnName="id")
     * })
     */
    private $responsable;

    /**
     * @var \AbpShippingpoint
     *
     * @ORM\ManyToOne(targetEntity="AbpShippingpoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arivee", referencedColumnName="id")
     * })
     */
    private $arivee;

    /**
     * @var \Personnel
     *
     * @ORM\ManyToOne(targetEntity="Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commercial", referencedColumnName="id")
     * })
     */
    private $commercial;

    /**
     * @var \AbpShippingpoint
     *
     * @ORM\ManyToOne(targetEntity="AbpShippingpoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="depart", referencedColumnName="id")
     * })
     */
    private $depart;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getContenue(): ?AbpStock
    {
        return $this->contenue;
    }

    public function setContenue(?AbpStock $contenue): self
    {
        $this->contenue = $contenue;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getResponsable(): ?Personnel
    {
        return $this->responsable;
    }

    public function setResponsable(?Personnel $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getArivee(): ?AbpShippingpoint
    {
        return $this->arivee;
    }

    public function setArivee(?AbpShippingpoint $arivee): self
    {
        $this->arivee = $arivee;

        return $this;
    }

    public function getCommercial(): ?Personnel
    {
        return $this->commercial;
    }

    public function setCommercial(?Personnel $commercial): self
    {
        $this->commercial = $commercial;

        return $this;
    }

    public function getDepart(): ?AbpShippingpoint
    {
        return $this->depart;
    }

    public function setDepart(?AbpShippingpoint $depart): self
    {
        $this->depart = $depart;

        return $this;
    }


}
