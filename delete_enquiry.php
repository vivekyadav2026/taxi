<?php
// delete_enquiry.php - Securely deletes an enquiry record by ID
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
        $file = 'enquiries.json';
        $action = isset($data['action']) ? $data['action'] : 'delete';
        
        if (file_exists($file)) {
            $content = file_get_contents($file);
            $enquiries = json_decode($content, true) ?: [];
            
            $filtered = [];
            $found = false;
            
            foreach ($enquiries as $e) {
                if ($e['id'] === $data['id']) {
                    $found = true;
                    if ($action === 'mark_read') {
                        $e['status'] = 'Read';
                        $filtered[] = $e;
                    }
                    continue; // Skip default delete append
                }
                $filtered[] = $e;
            }

            if ($found) {
                if (file_put_contents($file, json_encode($filtered, JSON_PRETTY_PRINT))) {
                    echo json_encode([
                        'success' => true,
                        'message' => $action === 'mark_read' ? 'Enquiry marked as read' : 'Enquiry deleted successfully'
                    ]);
                    exit;
                }
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'Enquiry record not found'
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
