<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $name = $_POST['name'];


    $to = "jasonmbezele10@gmail.com";
    $subject = "Question - Remarque - Appréciation";
    $headers = "Name: $name " . "\r\n" .
        "From: $email";

    mail($to, $subject, $message, $headers);

    header("Location: contact.php");
    exit();

}
