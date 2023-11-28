<?php

class Song implements JsonSerializable
{
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

    //hier wird sozusagen ein eigenes Json "Format" definiert, das mixed steht für die Art des Rückgabewertes, in diesem fall kann dieser beliebig sein
    public function jsonSerialize(): mixed
    {
        return array(
            "uid" => $this->getUid(),
            "sname" => $this->getSname(),
            "artist" => $this->getArtist(),
            "tracknummer" => $this->getTracknum(),
            "duration" => $this->getDuration(),

        );
    }
}