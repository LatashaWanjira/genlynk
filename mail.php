<?php
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

// send email
mail("chrismuga94@gmail.com", $subject, $msg);
