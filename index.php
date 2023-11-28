<?php
require_once('src/DemoSeeder.php');
require_once('src/Song.php');
require_once('src/OST.php');

header("Content-Type: application/json");

$demos = DemoSeeder::seed();

//var_dump($demos);
//echo $demos[0]->getId();
//echo htmlspecialchars($_GET['ost_id']);


//intval, damit sichergestellt wird, dass es eine Ganzzahl ist, so würde es auch gehen -> $gesuchteOst = ($_GET['ost_id']);
$gesuchteOst = intval($_GET['ost_id']);

//echo $gesuchteOst;


//Schleife, die jede OST ID durchgeht und mit $gesuchteOst vergleicht, wenn es matched wird es ausgegeben
for ($i = 1; $i < count($demos); $i++) {
    if ($gesuchteOst == $demos[$i]->getId()) {
        echo json_encode($demos[$i], JSON_PRETTY_PRINT);
        //var_dump($demos[$i]);
    }
}

//Schleife, die alle OSTs durchgeht und ausgibt
for ($i = 1; $i < count($demos); $i++) {
    echo json_encode($demos[$i], JSON_PRETTY_PRINT);
}
