<?php
require_once ('src/DemoSeeder.php');
require_once ('src/OST.php');

$demos = DemoSeeder::seed();

//var_dump($demos);

//echo $demos[0]->getId();


echo htmlspecialchars($_GET['ost_id']);

echo json_encode($demos);