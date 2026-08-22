<?php
// delete_booking.php - Securely deletes a booking record by ID
session_start();

header('Content-Type: application/json');

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    echo json_encode([
        'success' => false,
        'message' => 'Unauthorized access'
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if ($data && !empty($data['id'])) {
        $file = 'bookings.json';
        
        if (file_exists($file)) {
            $content = file_get_contents($file);
            $bookings = json_decode($content, true) ?: [];
            
            $filtered = [];
            $found = false;
            
            foreach ($bookings as $b) {
                if ($b['id'] === $data['id']) {
                    $found = true;
                    continue; // Skip deleting this booking
                }
                $filtered[] = $b;
            }

            if ($found) {
                if (file_put_contents($file, json_encode($filtered, JSON_PRETTY_PRINT))) {
                    echo json_encode([
                        'success' => true,
                        'message' => 'Booking deleted successfully'
                    ]);
                    exit;
                }
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'Booking record not found'
                ]);
                exit;
            }
        }
    }
}

echo json_encode([
    'success' => false,
    'message' => 'Invalid request parameters'
]);
