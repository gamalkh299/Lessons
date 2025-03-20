<?php

namespace Solid\SRP;
class Bus
{

    /**
     * @var int
     */
    private $NumberOfPassengers;
    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $maxSpeed;

    /**
     * @var string
     */
    private $driveName;

    /**
     * @var
     */
    private $driverAge;
    private mixed $doors;
    /**
     * @var array
     */
    private $routes=[];


    public function __construct()
    {
        var_dump('this is a bus');
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param mixed $doors
     */
    public function setDoors($doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @return mixed
     */
    public function getDriverAge()
    {
        return $this->driverAge;
    }

    /**
     * @param mixed $driverAge
     */
    public function setDriverAge($driverAge): void
    {
        $this->driverAge = $driverAge;
    }
}