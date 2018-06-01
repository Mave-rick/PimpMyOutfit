<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cloth
 *
 * @ORM\Table(name="cloth")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClothRepository")
 */
class Cloth
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
     * @ORM\Column(name="color", type="string", length=30)
     * @Assert\NotBlank()
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30)
     * @Assert\NotBlank()
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
     * @Assert\NotBlank()
     * @Assert\Type("int")
     *
     */
    private $temperature;

    /**
     * @ORM\ManyToOne(targetEntity="Part", inversedBy="clothes", cascade={"persist"})
     * @Assert\NotBlank()

     */
     private $part;
    /**
     * @ORM\Column(name="image", type="text")
     * @Assert\NotBlank()

     */
    private $image;
    /**
     * @ORM\ManyToMany(targetEntity="Weather", inversedBy="clothes", cascade={"persist"})
     */
    private $weathers;
    /**
     * @ORM\ManyToMany(targetEntity="Outfit", mappedBy="clothes")
     */
    private $outfits;

    public function __construct()
    {
        $this->weathers = new ArrayCollection();
        // $this->$outfits = new ArrayCollection();
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
     * Set color
     *
     * @param string $color
     *
     * @return Cloth
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Cloth
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
     * @return Cloth
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
     * @return Cloth
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
     * Set part
     *
     * @param string $part
     *
     * @return Cloth
     */
    public function setPart($part)
    {
        $this->part = $part;

        return $this;
    }

    /**
     * Get part
     *
     * @return string
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
 * Set image
 *
 * @param string $image
 *
 * @return Cloth
 */
public function setImage($image)
{
    $this->image = $image;

    return $this;
}

/**
 * Get image
 *
 * @return string
 */
public function getImage()
{
    return $this->image;
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
        $weather->addCloth($this);
        $this->weathers[] = $weather;

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
        $this->outfits[] = $outfit;

        return $this;
    }

}
