<?php
/**
 * Created by PhpStorm.
 * User: anjatomovska
 * Date: 12/16/16
 * Time: 12:50 PM
 */

namespace BikeRentBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 *
 */
class BikeCategory
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $key;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $price;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Bike", mappedBy="bikeCategory")
     */
    private $bikes;



    public function __construct() {
        $this->bikes = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return BikeCategory
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
     * Set price
     *
     * @param string $price
     *
     * @return BikeCategory
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Add bike
     *
     * @param \BikeRentBundle\Entity\Bike $bike
     *
     * @return BikeCategory
     */
    public function addBike(\BikeRentBundle\Entity\Bike $bike)
    {
        $this->bikes[] = $bike;

        return $this;
    }

    /**
     * Remove bike
     *
     * @param \BikeRentBundle\Entity\Bike $bike
     */
    public function removeBike(\BikeRentBundle\Entity\Bike $bike)
    {
        $this->bikes->removeElement($bike);
    }

    /**
     * Get bikes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBikes()
    {
        return $this->bikes;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return BikeCategory
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
}
