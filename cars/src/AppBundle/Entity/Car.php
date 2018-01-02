<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="cars")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarRepository")
 */
class Car
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
     * @ORM\Column(name="make", type="string", length=255)
     */
    private $make;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var int
     *
     * @ORM\Column(name="travelledDistance", type="bigint")
     */
    private $travelledDistance;

    /**
     * Many Car have Many Part.
     * @ORM\ManyToMany(targetEntity="Part", inversedBy="car")
     * @ORM\JoinTable(name="parts_cars")
     */
    private $part;

    public function __construct() {
        $this->part = new ArrayCollection();
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
     * Set make
     *
     * @param string $make
     *
     * @return Car
     */
    public function setMake($make)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Car
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
     * Set travelledDistance
     *
     * @param integer $travelledDistance
     *
     * @return Car
     */
    public function setTravelledDistance($travelledDistance)
    {
        $this->travelledDistance = $travelledDistance;

        return $this;
    }

    /**
     * Get travelledDistance
     *
     * @return int
     */
    public function getTravelledDistance()
    {
        return $this->travelledDistance;
    }

    /**
     * @return mixed
     */
    public function getPart()
    {
        return $this->part;
    }


}

