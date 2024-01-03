<?php
    header('Content-Type: application/json');

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = '$visitor_email';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

    $to = 'paesanosystem@gmail.com';

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        $response = [
            'status' => 'success',
            'message' => 'Message sent successfully!'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Failed to send message.'
        ];
    }

    echo json_encode($response);
?>
