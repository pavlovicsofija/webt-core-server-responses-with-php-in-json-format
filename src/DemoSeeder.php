<?php

class DemoSeeder
{
    public static function seed()
    {
        $demos = array();

        //erste Schleife, die für die einzelnen OSTs zuständig ist
        for ($i = 1; $i < 4; $i++) {
            //array an tracks wird erstellt, das nach jedem Schleifendurchlauf erneurt wird für jeden einzelnen OST
            $tracks = array();
            //Schleife, die 4 Mal läuft, um 4 SOngs für jeden OST zu erstellen
            for ($j = 1; $j < 5; $j++) {
                //Song wird erstellt und zu dem track array hinzugefügt (array_puush fügt ein element immer ans Ende des arrays hinzu )
                $song = new Song($j, "Song $j", "Artist $j", $j, rand(120, 240));
                array_push($tracks, $song);
            }
            //Nach der inneren Schleife (4 Songs wurden erstellt) wird ein OST gefüllt mit dem gefüllten track array am letzten Platz
            $demos[$i] = new OST($i, "ost $i", "vgname $i", 2000 + $i, $tracks);
        }
        return $demos;
    }
}