<?php
/**
 * Created by PhpStorm.
 * User: anjatomovska
 * Date: 12/16/16
 * Time: 12:48 PM
 */

namespace BikeRentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 *
 */
class Bike
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
    private $model;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $image;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="BikeCategory", inversedBy="bike")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;


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
     * Set model
     *
     * @param string $model
     *
     * @return Bike
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Bike
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
     * Set category
     *
     * @param \BikeRentBundle\Entity\BikeCategory $category
     *
     * @return Bike
     */
    public function setCategory(\BikeRentBundle\Entity\BikeCategory $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \BikeRentBundle\Entity\BikeCategory
     */
    public function getCategory()
    {
        return $this->category;
    }
}
