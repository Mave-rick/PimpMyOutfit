<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Outfit
 *
 * @ORM\Table(name="outfit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OutfitRepository")
 */
class Outfit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="season", type="string", length=15)
     */
    private $season;

    /**
     * @var int
     *
     * @ORM\Column(name="temperature", type="smallint")
     */
    private $temperature;
    /**
     * @ORM\ManyToMany(targetEntity="Cloth", inversedBy="outfits", cascade={"persist"})
     */
    private $clothes;
    /**
     * @ORM\ManyToMany(targetEntity="Weather", inversedBy="outfits", cascade={"persist"})
     */
    private $weathers;

    public function __construct()
    {
        $this->clothes = new ArrayCollection();
        $this->weathers = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getName();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Outfit
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set season
     *
     * @param string $season
     *
     * @return Outfit
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set temperature
     *
     * @param integer $temperature
     *
     * @return Outfit
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return int
     */
    public function getTemperature()
    {
        return $this->temperature;
    }



    /**
     * Get the value of Clothes
     *
     * @return mixed
     */
    public function getClothes()
    {
        return $this->clothes;
    }

    /**
     * Set the value of Clothes
     *
     * @param mixed clothes
     *
     * @return self
     */
    public function addCloth($cloth)
    {
        $cloth->addOutfit($this);
        $this->clothes[] = $cloth;

        return $this;
    }

    /**
     * Get the value of Weathers
     *
     * @return mixed
     */
    public function getWeathers()
    {
        return $this->weathers;
    }

    /**
     * Set the value of Weathers
     *
     * @param mixed weathers
     *
     * @return self
     */
    public function addWeather($weather)
    {
        $weather->addOutfit($this);
        $this->weathers[] = $weather;

        return $this;
    }

}
