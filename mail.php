<?php
error_reporting(0);
// fetch vars, organize
$name = $_POST['name'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
// set subject
$subject = $_POST['subject'];
// the message
$msg =    "
            <h1>$subject</h1>
            <hr>
            <h2>$name</h2>
            <h3>$email</h3>
            <p>
                <p>Company Name: <b>$company_name</b></p>
                <p>Phone Number: <b>$phone_number</b></p>
                <p>Address: <b>$address</b></p>
            <p>
        ";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.genlynk.com.ng';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@genlynk.com.ng';                     // SMTP username
    $mail->Password   = 't29mcR88pZ';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('info@genlynk.com.ng', 'GenLynk');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $msg;
    $mail->AltBody = $msg;

    $mail->send();
    // echo 'Message has been sent';
    $_SESSION['response']=[
        'code'=>1,
    ];
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $_SESSION['response']=[
        'code'=>0,
    ];
}
 header('Location: ' . $_SERVER['HTTP_REFERER']);
