<?php
// get_bookings.php - Returns all saved bookings from JSON database

header('Content-Type: application/json');

$file = 'bookings.json';
$bookings = [];

if (file_exists($file)) {
    $content = file_get_contents($file);
    $bookings = json_decode($content, true) ?: [];
}

echo json_encode($bookings);
