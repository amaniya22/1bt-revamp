<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
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

    // Prepare email
    $to = "yourname@example.com"; // 🔹 Replace with your email
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

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: {$fullName} <{$email}>" . "\r\n";
    $headers .= "Reply-To: {$email}" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>✅ Your consultation request has been sent successfully!</h2>";
        echo "<p>We’ll get back to you soon, {$fullName}.</p>";
    } else {
        echo "<h2>❌ Sorry, something went wrong while sending your message.</h2>";
        echo "<p>Please try again later or contact us directly.</p>";
    }

    exit;
}
?>
