<?php
require_once('src/DemoSeeder.php');
require_once('src/OST.php');

// Debugging statements
var_dump($_GET['ost_id']);
var_dump(DemoSeeder::seed());

// Error checking for ost_id parameter
$ostId = isset($_GET['ost_id']) ? htmlspecialchars($_GET['ost_id']) : null;

$demos = DemoSeeder::seed();

// Debugging statement
var_dump($demos);

// Filter demos based on the ost_id parameter
$selectedDemo = null;
if ($ostId !== null && array_key_exists($ostId, $demos)) {
    $selectedDemo = $demos[$ostId];
}

// Output JSON for the selected OST or an error message if not found
if ($selectedDemo !== null) {
    echo json_encode($selectedDemo);
} else {
    echo json_encode(['error' => 'OST not found']);
}
?>
