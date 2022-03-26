<?php
require_once __DIR__ . "/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Fleshgrinder\Core\Comparable;
use Fleshgrinder\Core\UncomparableException;

class Dog implements Comparable
{
    public $id;
    public $name;
    public $year;
    public $date;

    public function __construct($id, $name, $year, $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->year = $year;
        $this->date = $date;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     */
    public function setYear($year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    public function __toString()
    {
        return "$this->name ($this->year l.) przyjęty w dniu $this->date";
    }

    public function compareTo($other)
    {
        if (($other instanceof $this) === false) {
            throw new UncomparableException();
        }

        return 0;
    }
}

$uuid = Uuid::uuid4();

$dog1 = new Dog($uuid, "Burek", 9, "10-03-2022");
$dog2 = new Dog($uuid, "Clifford", 9, "05-03-2022");
$dog3 = new Dog($uuid, "Azor", 12, "15-02-2022");
$dog4 = new Dog($uuid, "Szarik", 8, "22-02-2022");
$dog5 = new Dog($uuid, "Idefix", 15, "26-01-2022");

echo "\n$dog1\n$dog2\n$dog3\n$dog4\n$dog5";
