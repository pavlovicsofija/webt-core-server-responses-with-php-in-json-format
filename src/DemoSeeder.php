<?php
class DemoSeeder{
    public static function seed(){
        $demos = array();

        for ($i = 1; $i < 4; $i++) {
            $tracks = array();
            for ($j = 1; $j < 5; $j++) {
                $song = new Song($j, "Song $j", "Artist $j", $j, rand(120, 240));
                    array_push($tracks, $song);
                }
            $demos[$i] = new OST($i, "ost $i", "vgname $i", 2000 + $i, $tracks);
        }
        return $demos;
    }
}