<?php

namespace Cms\ContentManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 */
class Countries
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $countryName;

    /**
     * @var string
     */
    private $isoCode3;

    /**
     * @var string
     */
    private $isoCode2;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $zones;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set countryName
     *
     * @param string $countryName
     * @return Countries
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryName
     *
     * @return string 
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set isoCode3
     *
     * @param string $isoCode3
     * @return Countries
     */
    public function setIsoCode3($isoCode3)
    {
        $this->isoCode3 = $isoCode3;

        return $this;
    }

    /**
     * Get isoCode3
     *
     * @return string 
     */
    public function getIsoCode3()
    {
        return $this->isoCode3;
    }

    /**
     * Set isoCode2
     *
     * @param string $isoCode2
     * @return Countries
     */
    public function setIsoCode2($isoCode2)
    {
        $this->isoCode2 = $isoCode2;

        return $this;
    }

    /**
     * Get isoCode2
     *
     * @return string 
     */
    public function getIsoCode2()
    {
        return $this->isoCode2;
    }

    /**
     * Add zones
     *
     * @param \Cms\ContentManagerBundle\Entity\Zones $zones
     * @return Countries
     */
    public function addZone(\Cms\ContentManagerBundle\Entity\Zones $zones)
    {
        $this->zones[] = $zones;

        return $this;
    }

    /**
     * Remove zones
     *
     * @param \Cms\ContentManagerBundle\Entity\Zones $zones
     */
    public function removeZone(\Cms\ContentManagerBundle\Entity\Zones $zones)
    {
        $this->zones->removeElement($zones);
    }

    /**
     * Get zones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getZones()
    {
        return $this->zones;
    }
}
