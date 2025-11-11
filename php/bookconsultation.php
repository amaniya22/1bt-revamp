<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    header('Content-Type: application/json');

    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $country = htmlspecialchars($_POST['country']);
    $purpose = htmlspecialchars($_POST['purpose']);
    $otherPurpose = isset($_POST['otherPurpose']) ? htmlspecialchars($_POST['otherPurpose']) : '';
    $datetime = htmlspecialchars($_POST['datetime']);
    $notes = htmlspecialchars($_POST['notes']);
    $consent = isset($_POST['consent']) ? "Agreed" : "Not Agreed";

    $to = "contact@1billiontech.com";
    $subject = "New Consultation Booking from $fullName";

    $message = "
    <html>
    <head><title>New Consultation Request</title></head>
    <body>
        <h2>Consultation Request Details</h2>
        <p><strong>Full Name:</strong> {$fullName}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone Number:</strong> {$phone}</p>
        <p><strong>Company:</strong> {$company}</p>
        <p><strong>Country:</strong> {$country}</p>
        <p><strong>Purpose / Demo Type:</strong> {$purpose}</p>";

    if ($purpose === "Other" && !empty($otherPurpose)) {
        $message .= "<p><strong>Specified Purpose:</strong> {$otherPurpose}</p>";
    }

    $message .= "
        <p><strong>Preferred Date & Time:</strong> {$datetime}</p>
        <p><strong>Additional Notes:</strong> {$notes}</p>
        <p><strong>Consent:</strong> {$consent}</p>
    </body>
    </html>";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: Website <no-reply@yourdomain.com>\r\n";
    $headers .= "Reply-To: {$email}\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(["status" => "success", "message" => "✅ Your consultation request has been sent successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "❌ Sorry, something went wrong while sending your message."]);
    }
    exit;
}
?>
