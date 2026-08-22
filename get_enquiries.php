<?php
// get_enquiries.php - Securely retrieves all customer enquiries for Admin
session_start();

header('Content-Type: application/json');

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    echo json_encode([
        'success' => false,
        'message' => 'Unauthorized access'
    ]);
    exit;
}

$file = 'enquiries.json';
$enquiries = [];

if (file_exists($file)) {
    $content = @file_get_contents($file);
    $enquiries = json_decode($content, true) ?: [];
}

echo json_encode($enquiries);
