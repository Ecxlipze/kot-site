<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../vendor/autoload.php';

header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName   = htmlspecialchars($_POST['fullName']);
    $company    = htmlspecialchars($_POST['company'] ?? '');
    $email      = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // ✅ Combine country code + phone
    $countryCode = htmlspecialchars($_POST['countryCode'] ?? '');
    $phoneNumber = htmlspecialchars($_POST['phone'] ?? '');
    // remove leading 0 if exists
    $phoneNumber = ltrim($phoneNumber, '0');
    $phone       = $countryCode . $phoneNumber;

    $purpose    = htmlspecialchars($_POST['purpose']);
    $services   = htmlspecialchars($_POST['services']);
    $message    = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'mail.kotenterprises.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'smtp@kotenterprises.com';  // Company email (SMTP)
        $mail->Password   = '95r}BtP]feKj_ZIN';                // Company email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('smtp@kotenterprises.com', 'KOT Enterprises');

        // ✅ Send only to company email
        $mail->addAddress('query@kotenterprises.com', 'KOT Enterprises');

        // Add attachment if uploaded
        if (!empty($_FILES['realUpload']['tmp_name'])) {
            $mail->addAttachment($_FILES['realUpload']['tmp_name'], $_FILES['realUpload']['name']);
        }

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
        <h3>New Contact Form Submission</h3>
        <ul>
          <li><b>Full Name:</b> $fullName</li>
          <li><b>Company:</b> $company</li>
          <li><b>Email:</b> $email</li>
          <li><b>Phone:</b> $phone</li>
          <li><b>Purpose:</b> $purpose</li>
          <li><b>Services:</b> $services</li>
          <li><b>Message:</b> $message</li>
        </ul>
        <p>Regards,<br>Website Contact Form</p>
        ";

        $mail->send();
        echo json_encode(["status" => "success", "message" => "✅ Email sent successfully!"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "❌ Mailer Error: {$mail->ErrorInfo}"]);
    }
    exit;
}
?>