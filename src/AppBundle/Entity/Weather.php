<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Weather
 *
 * @ORM\Table(name="weather")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WeatherRepository")
 */
class Weather
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
     * @ORM\Column(name="season", type="string", length=15, unique=true)
     * @Assert\NotBlank()
     */
    private $season;


    /**
     * @var int
     *
     * @ORM\Column(name="temperature", type="string")
      * @Assert\NotBlank()
     */
    private $temperature;
    /**
     * @ORM\ManyToMany(targetEntity="Cloth", mappedBy="weathers")
     */
    private $clothes;
    /**
     * @ORM\ManyToMany(targetEntity="Outfit", mappedBy="weathers")
     */
    private $outfits;

    public function __construct()
    {
        $this->clothes = new ArrayCollection();
        $this->outfits = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getSeason();
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
     * Set season
     *
     * @param string $season
     *
     * @return Weather
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
     * @return Weather
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
        $this->clothes[] = $clothes;

        return $this;
    }

    /**
     * Get the value of Outfits
     *
     * @return mixed
     */
    public function getOutfits()
    {
        return $this->outfits;
    }

    /**
     * Set the value of Outfits
     *
     * @param mixed outfits
     *
     * @return self
     */
    public function addOutfit($outfit)
    {
        $this->outfits[] = $outfits;

        return $this;
    }

}
