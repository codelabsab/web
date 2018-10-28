<?php

$subject = 'New message from codelabs contact form';
$fields = array('firstname' => 'Name', 'surname' => 'Surname', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in the email
$okMessage = 'Your message has been successfully submitted.';
$errorMessage = 'There was an error while submitting the form. Please try again.';

try
{
    $emailText = "You have a new message from codelabs contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    $from = 'Contact form <contact@codelabs.se>';
    $sendTo = 'Code Labs AB <contact@codelabs.se>';


    $headers = array('Content-Type: text/plain; charset=UTF-8',
        'MIME-Version: 1.0',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from
    );
    
    mail($sendTo, $subject, $emailText, implode("\r\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    echo $responseArray['message'];
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    header('Content-Type: application/json');
    echo $encoded;
}
else {
    echo $responseArray['message'];
}
