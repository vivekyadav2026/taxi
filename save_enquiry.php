<?php
// save_enquiry.php - Saves client contact enquiries to JSON database

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read POST parameters
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : 'General Inquiry';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if (!empty($name) && !empty($phone) && !empty($message)) {
        $file = 'enquiries.json';
        $enquiries = [];

        if (file_exists($file)) {
            $content = @file_get_contents($file);
            $enquiries = json_decode($content, true) ?: [];
        }

        // Generate clean unique Enquiry ID
        $id = 'ENQ-' . str_pad(rand(100000, 999999), 6, '0', STR_PAD_LEFT);

        // Date and Time in India Timezone
        date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d');
        $time = date('h:i A');

        $newEnquiry = [
            'id' => $id,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'date' => $date,
            'time' => $time,
            'status' => 'New'
        ];

        // Prepend to show newest first
        array_unshift($enquiries, $newEnquiry);

        if (file_put_contents($file, json_encode($enquiries, JSON_PRETTY_PRINT))) {
            echo json_encode([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully.',
                'id' => $id
            ]);
            exit;
        }
    }
}

echo json_encode([
    'success' => false,
    'message' => 'Failed to save message. Please fill in all required fields.'
]);
