<?php
class DemoSeeder{
    public static function seed(){
        $demos = array();

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $tracks[] = new Song($j, "Song $j", "Artist $j", $j, rand(120, 240));
           }
            $demos[$i] = new OST($i, "ost $i", "vgname0 $i", 2000 + $i, $tracks);
        }
        return $demos;
    }
}




