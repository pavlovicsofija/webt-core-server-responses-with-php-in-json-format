<?php
class OST{
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

class Song{
    private $uid;
    private $sname;
    private $artist;
    private $tracknum;
    private $duration;

    /**
     * @param $uid
     * @param $sname
     * @param $artist
     * @param $tracknum
     * @param $duration
     */
    public function __construct($uid, $sname, $artist, $tracknum, $duration)
    {
        $this->uid = $uid;
        $this->sname = $sname;
        $this->artist = $artist;
        $this->tracknum = $tracknum;
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getSname()
    {
        return $this->sname;
    }

    /**
     * @param mixed $sname
     */
    public function setSname($sname)
    {
        $this->sname = $sname;
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param mixed $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * @return mixed
     */
    public function getTracknum()
    {
        return $this->tracknum;
    }

    /**
     * @param mixed $tracknum
     */
    public function setTracknum($tracknum)
    {
        $this->tracknum = $tracknum;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
}