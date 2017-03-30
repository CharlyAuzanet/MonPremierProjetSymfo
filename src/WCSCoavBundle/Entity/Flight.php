<?php

namespace WCSCoavBundle\Entity;

/**
 * Flight
 */
class Flight
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var integer
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $takeofTime;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $flight;

    /**
     * @var \WCSCoavBundle\Entity\Terrain
     */
    private $departure;

    /**
     * @var \WCSCoavBundle\Entity\Terrain
     */
    private $arrival;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flight = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set pilot
     *
     * @param string $pilot
     *
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     *
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return integer
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeofTime
     *
     * @param \DateTime $takeofTime
     *
     * @return Flight
     */
    public function setTakeofTime($takeofTime)
    {
        $this->takeofTime = $takeofTime;

        return $this;
    }

    /**
     * Get takeofTime
     *
     * @return \DateTime
     */
    public function getTakeofTime()
    {
        return $this->takeofTime;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Flight
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add flight
     *
     * @param \WCSCoavBundle\Entity\Flight $flight
     *
     * @return Flight
     */
    public function addFlight(\WCSCoavBundle\Entity\Flight $flight)
    {
        $this->flight[] = $flight;

        return $this;
    }

    /**
     * Remove flight
     *
     * @param \WCSCoavBundle\Entity\Flight $flight
     */
    public function removeFlight(\WCSCoavBundle\Entity\Flight $flight)
    {
        $this->flight->removeElement($flight);
    }

    /**
     * Get flight
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Set departure
     *
     * @param \WCSCoavBundle\Entity\Terrain $departure
     *
     * @return Flight
     */
    public function setDeparture(\WCSCoavBundle\Entity\Terrain $departure = null)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \WCSCoavBundle\Entity\Terrain
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param \WCSCoavBundle\Entity\Terrain $arrival
     *
     * @return Flight
     */
    public function setArrival(\WCSCoavBundle\Entity\Terrain $arrival = null)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \WCSCoavBundle\Entity\Terrain
     */
    public function getArrival()
    {
        return $this->arrival;
    }
    /**
     * @var \WCSCoavBundle\Entity\Flight
     */
    private $planemodel;


    /**
     * Set planemodel
     *
     * @param \WCSCoavBundle\Entity\Flight $planemodel
     *
     * @return Flight
     */
    public function setPlanemodel(\WCSCoavBundle\Entity\Flight $planemodel = null)
    {
        $this->planemodel = $planemodel;

        return $this;
    }

    /**
     * Get planemodel
     *
     * @return \WCSCoavBundle\Entity\Flight
     */
    public function getPlanemodel()
    {
        return $this->planemodel;
    }
}
