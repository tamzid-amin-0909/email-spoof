<?php
header('Content-Type: application/json');

$from = $_GET['from'];
$to = $_GET['to'];
$subject = $_GET['sub'];
$message = $_GET['msg'];

$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

// Send mail
if (mail($to, $subject, $message, $headers)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'fail', 'mail_response' => 'Mail function failed.']);
}
?>