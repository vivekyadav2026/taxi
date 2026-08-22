<?php
// update_booking.php - Updates booking status and driver details
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'Unauthorized access. Please log in as admin.'
    ]);
    exit;
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if ($data && !empty($data['id'])) {
        $file = 'bookings.json';
        
        if (file_exists($file)) {
            $content = file_get_contents($file);
            $bookings = json_decode($content, true) ?: [];
            
            $updated = false;
            foreach ($bookings as &$b) {
                if ($b['id'] === $data['id']) {
                    if (isset($data['status'])) $b['status'] = $data['status'];
                    if (isset($data['driverName'])) $b['driverName'] = $data['driverName'];
                    if (isset($data['driverPhone'])) $b['driverPhone'] = $data['driverPhone'];
                    if (isset($data['carNo'])) $b['carNo'] = $data['carNo'];
                    $updated = true;
                    break;
                }
            }

            if ($updated) {
                if (file_put_contents($file, json_encode($bookings, JSON_PRETTY_PRINT))) {
                    echo json_encode([
                        'success' => true,
                        'message' => 'Booking updated successfully'
                    ]);
                    exit;
                }
            }
        }
    }
}

echo json_encode([
    'success' => false,
    'message' => 'Invalid data or booking not found'
]);
