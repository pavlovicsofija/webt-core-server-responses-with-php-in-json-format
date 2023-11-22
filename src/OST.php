<?php
class OST implements JsonSerializable
{
    private $id;
    private $name;
    private $vgname;
    private $year;
    private $tracklist;

    /**
     * @param $id
     * @param $name
     * @param $vgname
     * @param $year
     * @param $tracklist
     */
    public function __construct($id, $name, $vgname, $year, $tracklist)
    {
        $this->id = $id;
        $this->name = $name;
        $this->vgname = $vgname;
        $this->year = $year;
        $this->tracklist = $tracklist;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getVgname()
    {
        return $this->vgname;
    }

    /**
     * @param mixed $vgname
     */
    public function setVgname($vgname)
    {
        $this->vgname = $vgname;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getTracklist()
    {
        return $this->tracklist;
    }

    /**
     * @param mixed $tracklist
     */
    public function setTracklist($tracklist)
    {
        $this->tracklist = $tracklist;
    }

    public function jsonSerialize(): mixed
    {
        return array(
            "id" => $this->getId(),
            "name" => $this->getName(),
            "videogame name" => $this->getVgname(),
            "release year" => $this->getYear(),
            "tracklist" => $this->getTracklist(),

        );
    }

}