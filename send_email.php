<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

try {
    // Get POST data
    $rawInput = file_get_contents('php://input');
    $data = json_decode($rawInput, true);
    
    // Debug: Log received data
    error_log('Raw input: ' . $rawInput);
    error_log('Decoded data: ' . print_r($data, true));
    
    if (!$data) {
        throw new Exception('No data received or invalid JSON');
    }
    
    $name = isset($data['name']) ? trim($data['name']) : '';
    $email = isset($data['email']) ? trim($data['email']) : '';
    $message = isset($data['message']) ? trim($data['message']) : '';
    $businessName = isset($data['businessName']) ? trim($data['businessName']) : '';
    $businessType = isset($data['businessType']) ? trim($data['businessType']) : '';
    $phone = isset($data['phone']) ? trim($data['phone']) : '';
    
    // Debug: Log extracted values
    error_log('Name: "' . $name . '"');
    error_log('Email: "' . $email . '"');
    
    // Validate required fields
    if (empty($name) || empty($email)) {
        throw new Exception('Name and email are required. Name: "' . $name . '", Email: "' . $email . '"');
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email format');
    }
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp-relay.brevo.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sajedul0101@gmail.com';
    $mail->Password = 'zNKtSjRP3IvgsfTO';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Recipients
    $mail->setFrom('info@nidustime.com', 'NidusTime Early Access Notification');
    $mail->addAddress('quaziakash@gmail.com');
    // $mail->addCC('info@niduslab.com');
    $mail->addReplyTo($email, $name);
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = 'NidusTime New Early Access Request (Vendor)';
    $mail->Body = "<h2>New Early Access Request for NidusTime (Vendor)</h2>
                   <p><strong>Business Name:</strong> " . htmlspecialchars($businessName) . "</p>
                   <p><strong>Business Type:</strong> " . htmlspecialchars($businessType) . "</p>
                   <p><strong>Contact Name:</strong> " . htmlspecialchars($name) . "</p>
                   <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
                   <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>"
                   . (!empty($message) ? "<p><strong>Message:</strong> " . nl2br(htmlspecialchars($message)) . "</p>" : '');
    
    $mail->send();
    
    echo json_encode(['success' => true, 'message' => 'Email sent successfully']);
    
} catch (Exception $e) {
    // Log the error
    error_log('Email sending error: ' . $e->getMessage());
    
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}