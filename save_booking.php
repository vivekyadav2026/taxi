<?php
// save_booking.php - Saves booking requests to local JSON database file

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get JSON data
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if ($data) {
        $file = 'bookings.json';
        
        // Read existing bookings
        $bookings = [];
        if (file_exists($file)) {
            $content = file_get_contents($file);
            $bookings = json_decode($content, true) ?: [];
        }

        // Add unique ID and timestamp if not present
        if (empty($data['id'])) {
            $data['id'] = 'RT-' . rand(100000, 999999);
        }
        $data['timestamp'] = time();

        // Add to the beginning of the list
        array_unshift($bookings, $data);

        // Save back to file
        if (file_put_contents($file, json_encode($bookings, JSON_PRETTY_PRINT))) {
            echo json_encode([
                'success' => true,
                'message' => 'Booking saved successfully',
                'booking' => $data
            ]);
            exit;
        }
    }
}

echo json_encode([
    'success' => false,
    'message' => 'Invalid request or data'
]);
