<?php

namespace Cms\ContentManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zones
 */
class Zones
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $zoneName;

    /**
     * @var string
     */
    private $zoneType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $countries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->countries = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set zoneName
     *
     * @param string $zoneName
     * @return Zones
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;

        return $this;
    }

    /**
     * Get zoneName
     *
     * @return string 
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * Set zoneType
     *
     * @param string $zoneType
     * @return Zones
     */
    public function setZoneType($zoneType)
    {
        $this->zoneType = $zoneType;

        return $this;
    }

    /**
     * Get zoneType
     *
     * @return string 
     */
    public function getZoneType()
    {
        return $this->zoneType;
    }

    /**
     * Add countries
     *
     * @param \Cms\ContentManagerBundle\Entity\Countries $countries
     * @return Zones
     */
    public function addCountry(\Cms\ContentManagerBundle\Entity\Countries $countries)
    {
        $this->countries[] = $countries;

        return $this;
    }

    /**
     * Remove countries
     *
     * @param \Cms\ContentManagerBundle\Entity\Countries $countries
     */
    public function removeCountry(\Cms\ContentManagerBundle\Entity\Countries $countries)
    {
        $this->countries->removeElement($countries);
    }

    /**
     * Get countries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCountries()
    {
        return $this->countries;
    }
}
