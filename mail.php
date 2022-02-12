<?php

function geturi($n) {
    // get the parameters
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ret = $_POST[$n];
    }
    else {
        $ret = $_GET[$n];
    }
    
    $ret = $ret . "";
    
    $ret = str_replace("\n", "<br>", $ret);
    
    return urldecode($ret . "");
}

function params($m) {
    $ret = $m;
    
    $ret = str_replace("{name}", geturi('name'), $ret);
    $ret = str_replace("{email}", geturi('email'), $ret);
    $ret = str_replace("{site}", geturi('site'), $ret);
    $ret = str_replace("{details}", geturi('details'), $ret);
    $ret = str_replace("{experience}", geturi('experience'), $ret);
    $ret = str_replace("{tel}", geturi('tel'), $ret);
    $ret = str_replace("{tel2}", geturi('tel2'), $ret);
    $ret = str_replace("{address}", geturi('address'), $ret);
    $ret = str_replace("{postcode}", geturi('postcode'), $ret);
    
    return $ret;
}

// do we have an email address - stops crawlers activating the script
$email = geturi('email');
if (!$email || strlen($email) === 0) {
    echo 'No email';
    exit();
}

// build the emails
$templateConf = "Dear {name}<br><br>";
$templateConf .= "Thank you for your application for a plot at the {site} site.  One of the committee will be back in touch shortly.<br><br>";
$templateConf .= "For your information, you sent us the following details<br><br>";
$templateConf .= "<b>Name:</b> {name}<br><br>";
$templateConf .= "<b>Email:</b> {email}<br><br>";
$templateConf .= "<b>Address:</b> {address}<br><br>";
$templateConf .= "<b>Postcode:</b> {postcode}<br><br>";
$templateConf .= "<b>Tel:</b> {tel}<br><br>";
$templateConf .= "<b>Alternative tel:</b> {tel2}<br><br>";
$templateConf .= "<b>Site:</b> {site}<br><br>";
$templateConf .= "<b>Experience:</b><br>{experience}<br><br>";
$templateConf .= "<b>Other details:</b><br>{details}<br><br>";

$templateApp = "We have had an application.<br><br>";
$templateApp .= "<b>Logged at:</b> " . date("D d-m-Y H:i") ."<br><br>";
$templateApp .= "<b>Name:</b> {name}<br><br>";
$templateApp .= "<b>Email:</b> {email}<br><br>";
$templateApp .= "<b>Address:</b> {address}<br><br>";
$templateApp .= "<b>Postcode:</b> {postcode}<br><br>";
$templateApp .= "<b>Tel:</b> {tel}<br><br>";
$templateApp .= "<b>Alternative tel:</b> {tel2}<br><br>";
$templateApp .= "<b>Site:</b> {site}<br><br>";
$templateApp .= "<b>Experience:</b><br>{experience}<br><br>";
$templateApp .= "<b>Other details:</b><br>{details}<br><br>";

$footer = "Thank you from Burnside and Vinery Road Allotments";
$footer .= "<br><br>=========================================================<br>";
$footer .= "This email does not form any contract, implied or actual.<br>This email address is not monitored.<br><br>";
$footer .= "You can follow us at http://burnsideandvineryallotments.org";

$headers = 'From: bandvinery@gmail.com' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' ;
$subject = 'Burnside and  Vinery Road Allotments Application';

// send  confirmation to the applicant
$message = $templateConf;

$message .= $footer;
$message = params($message);

try {
    $ret = mail ( $email , $subject , $message, $headers );
    echo 'Message1 sent';
}
//catch exception
catch(Exception $e) {
    echo 'Message error1: ' .$e->getMessage();
}

// send an email to the site manager
$message = $templateApp;

$message .= $footer;
$message = params($message);
$email = 'matthew.whitelegg@ntlworld.com';

try {
    $ret = mail ( $email , $subject , $message, $headers );
    echo ' Message2 sent';
}
catch(Exception $e) {
    echo ' Message error2: ' .$e->getMessage();
}

$email = 'allocation@burnsideandvineryallotments.org';
try {
    $ret = mail ( $email , $subject , $message, $headers );
    echo ' Message3 sent';
}
catch(Exception $e) {
    echo ' Message error3: ' .$e->getMessage();
}

echo ' All Messages sent';
?>