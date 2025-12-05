<?php
/**
 * Contact Form Handler
 * Portfolio Contact Form Processing with PHP
 * 
 * This file handles form submissions from the portfolio contact form.
 * Place this file in the same directory as index.html
 */

// Set headers for JSON response (for AJAX requests)
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Configuration
$config = [
    'recipient_email' => 'alsheramontano@gmail.com',
    'recipient_name' => 'Alshera Seravanez Montano',
    'subject_prefix' => '[Portfolio Contact]',
    'save_to_file' => true,
    'messages_folder' => 'messages'
];

// Initialize response
$response = [
    'success' => false,
    'message' => '',
    'errors' => []
];

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method. Please use the contact form.';
    echo json_encode($response);
    exit;
}

// Get and sanitize form data
$name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : '';
$email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
$phone = isset($_POST['phone']) ? trim(htmlspecialchars($_POST['phone'])) : '';
$subject = isset($_POST['subject']) ? trim(htmlspecialchars($_POST['subject'])) : 'General Inquiry';
$message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';

// Validation
$errors = [];

if (empty($name)) {
    $errors['name'] = 'Name is required.';
} elseif (strlen($name) < 2 || strlen($name) > 100) {
    $errors['name'] = 'Name must be between 2 and 100 characters.';
}

if (empty($email)) {
    $errors['email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}

if (!empty($phone)) {
    $cleanPhone = preg_replace('/[^0-9+]/', '', $phone);
    if (strlen($cleanPhone) < 10 || strlen($cleanPhone) > 15) {
        $errors['phone'] = 'Please enter a valid phone number.';
    }
}

if (empty($message)) {
    $errors['message'] = 'Message is required.';
} elseif (strlen($message) < 10 || strlen($message) > 1000) {
    $errors['message'] = 'Message must be between 10 and 1000 characters.';
}

// If validation errors exist, return them
if (!empty($errors)) {
    $response['errors'] = $errors;
    $response['message'] = 'Please correct the errors in the form.';
    echo json_encode($response);
    exit;
}

// Process the form
$timestamp = date('Y-m-d H:i:s');
$dateForFile = date('Y-m-d_H-i-s');

// Format message content
$formattedMessage = "=" . str_repeat("=", 50) . "\n";
$formattedMessage .= "CONTACT FORM SUBMISSION\n";
$formattedMessage .= "=" . str_repeat("=", 50) . "\n\n";
$formattedMessage .= "Date/Time: " . date('F j, Y, g:i a') . "\n\n";
$formattedMessage .= "SENDER INFORMATION:\n";
$formattedMessage .= str_repeat("-", 20) . "\n";
$formattedMessage .= "Name: $name\n";
$formattedMessage .= "Email: $email\n";
if (!empty($phone)) {
    $formattedMessage .= "Phone: $phone\n";
}
$formattedMessage .= "\nSUBJECT: $subject\n\n";
$formattedMessage .= "MESSAGE:\n";
$formattedMessage .= str_repeat("-", 20) . "\n";
$formattedMessage .= "$message\n\n";
$formattedMessage .= "=" . str_repeat("=", 50) . "\n";

// Save to file if enabled
if ($config['save_to_file']) {
    $folder = $config['messages_folder'];
    if (!is_dir($folder)) {
        mkdir($folder, 0755, true);
    }
    
    $filename = $folder . '/message_' . $dateForFile . '_' . uniqid() . '.txt';
    @file_put_contents($filename, $formattedMessage);
    
    // Also log to submissions file
    $logEntry = "$timestamp | $name | $email | $subject\n";
    @file_put_contents($folder . '/submissions.log', $logEntry, FILE_APPEND);
}

// Try to send email (optional - works if mail() is configured)
$emailSent = false;
if (!empty($config['recipient_email']) && $config['recipient_email'] !== 'your-email@example.com') {
    $emailHeaders = "From: $name <$email>\r\n";
    $emailHeaders .= "Reply-To: $email\r\n";
    $emailHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $emailSubject = $config['subject_prefix'] . ' ' . $subject;
    $emailBody = "Name: $name\nEmail: $email\n";
    if (!empty($phone)) {
        $emailBody .= "Phone: $phone\n";
    }
    $emailBody .= "\nMessage:\n$message";
    
    $emailSent = @mail($config['recipient_email'], $emailSubject, $emailBody, $emailHeaders);
}

// Return success response
$response['success'] = true;
$response['message'] = "Thank you, $name! Your message has been received. ";
$response['message'] .= $emailSent ? "We'll get back to you soon!" : "We'll review it and respond shortly.";

echo json_encode($response);
?>