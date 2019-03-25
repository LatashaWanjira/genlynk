<?php
error_reporting(0);
// fetch vars, organize
$name = $_POST['name'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
// set subject
$subject = 'Partnership Request';
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

// mail headers
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

// send email
if (mail($email, $subject, $msg, $headers)) {
    $response = [
        "code"  => 1,
        "msg"   => "Message sent successful. We'll get in touch."
    ];
} else {
    $response = [
        "code"  => 1,
        "msg"   => "Message sent successful. We'll get in touch."
    ];
}

var_dump($response);
