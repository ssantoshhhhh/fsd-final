<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['subject']) &&
    isset($_POST['message'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $em = "Invalid email format";
        header("Location: index.php?error=" . urlencode($em));
        exit;
    }

    // Check if all fields are filled
    if (empty($name) || empty($subject) || empty($message)) {
        $em = "Please fill out all fields";
        header("Location: index.php?error=" . urlencode($em));
        exit;
    }

    // Create an instance of PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                 // Enable SMTP authentication
        $mail->Username   = '';     // SMTP username
        $mail->Password   = '';     // Use app password, not actual password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable implicit TLS encryption
        $mail->Port       = 465;                                  // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name);                            // Set sender
        $mail->addAddress('santoshwebtechnology@gmail.com', 'Santosh'); // Add a recipient

        // Content
        $mail->isHTML(true);                                      // Set email format to HTML
        $mail->Subject = $subject;                               // Use the subject from the form
        $mail->Body    = '
            <div style="font-family: Arial, sans-serif; max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f8f9fa;">
                <h2 style="color: #007bff; text-align: center;">New Contact Form Submission</h2>
                <p style="font-size: 16px; color: #333;">
                    <strong style="color: #007bff;">From:</strong> ' . htmlspecialchars($name) . '<br>
                    <strong style="color: #007bff;">Email:</strong> ' . htmlspecialchars($email) . '<br>
                    <strong style="color: #007bff;">Subject:</strong> ' . htmlspecialchars($subject) . '<br>
                    <strong style="color: #007bff;">Message:</strong>
                </p>
                <div style="padding: 15px; background: #ffffff; border: 1px solid #ccc; border-radius: 5px; margin-top: 10px; line-height: 1.5;">
                    ' . nl2br(htmlspecialchars($message)) . '
                </div>
                <footer style="margin-top: 20px; font-size: 14px; color: #888; text-align: center;">
                    This message was sent via your website\'s contact form.
                </footer>
            </div>
        ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; // Alternate plain text body

        // Send the email
        $mail->send();
        $sm = 'Message has been sent';
        header("Location: index.php?success=" . urlencode($sm));
        exit;
    } catch (Exception $e) {
        $em = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("Location: index.php?error=" . urlencode($em));
        exit;
    }
}
?>

<!-- Add your HTML form below (index.php) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>
    <h2>Contact Us</h2>
    <?php
    // Display success or error messages
    if (isset($_GET['error'])) {
        echo '<p class="error">' . htmlspecialchars($_GET['error']) . '</p>';
    }
    if (isset($_GET['success'])) {
        echo '<p class="success">' . htmlspecialchars($_GET['success']) . '</p>';
    }
    ?>
    <form action="send_email.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" required><br>
        
        <label for="message">Message:</label><br>
        <textarea name="message" id="message" required rows="4"></textarea><br>
        
        <input type="submit" value="Send">
    </form>
</body>
</html>
