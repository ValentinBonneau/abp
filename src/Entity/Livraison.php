<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="depart", columns={"depart"}), @ORM\Index(name="commercial", columns={"commercial"}), @ORM\Index(name="arivee", columns={"arivee"}), @ORM\Index(name="responsable", columns={"responsable"}), @ORM\Index(name="contenue", columns={"contenue"}), @ORM\Index(name="client", columns={"client"})})
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


}
