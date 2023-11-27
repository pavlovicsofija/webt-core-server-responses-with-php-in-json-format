<?php
require_once ('src/DemoSeeder.php');
require_once ('src/OST.php');

header("Content-Type: application/json");

$demos = DemoSeeder::seed();

//var_dump($demos);

//echo $demos[0]->getId();


//echo htmlspecialchars($_GET['ost_id']);
$gesuchteOst = ($_GET['ost_id']);
//echo $gesuchteOst;



for ($i = 0; $i < count($demos); $i++) {
    if ($gesuchteOst == $demos[$i]-> getId()){
        echo json_encode($demos[$i]);
         //var_dump($demos[$i]);
    }
}

