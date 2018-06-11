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
    $ret = str_replace("{type}", geturi('type'), $ret);
    $ret = str_replace("{notice}", geturi('notice'), $ret);
    $ret = str_replace("{contact}", geturi('contact'), $ret);
    
    return $ret;
}

$contact = geturi('contact');

$templateConf = "Dear {name}<br><br>";
$templateConf .= "Thank you for your request to post a notice on the web site. We will contact you to confirm the details.<br><br>";
$templateConf .= "For your information, you sent us the following<br><br>";
$templateConf .= "<b>Your name:</b> {name}<br><br>";
$templateConf .= "<b>Email:</b> {email}<br><br>";
$templateConf .= "<b>Site:</b> {site}<br><br>";
$templateConf .= "<b>Type of notice:</b> {type}<br><br>";
$templateConf .= "<b>Notice:</b> {notice}<br><br>";
if (strlen($contact)> 0) {
    $templateConf .= "<b>Contact:</b> {contact}<br><br>";
}


$templateApp = "We have had a request to post a notice on the web site.<br><br>";
$templateApp .= "<b>Logged at:</b> " . date("D d-m-Y H:i") ."<br><br>";
$templateApp .= "<b>Name:</b> {name}<br><br>";
$templateApp .= "<b>Email:</b> {email}<br><br>";
$templateApp .= "<b>Site:</b> {site}<br><br>";
$templateApp .= "<b>Type of notice:</b> {type}<br><br>";
$templateApp .= "<b>Notice:</b> {notice}<br><br>";
if (strlen($contact)> 0) {
    $templateApp .= "<b>Contact:</b> {contact}<br><br>";
}
else {
    $templateApp .= "<b>Contact:</b> No additional contact information<br><br>";
}

$footer = "Thank you from Burnside and Vinery Road Allotments";
$footer .= "<br><br>=========================================================<br>";
$footer .= "This email does not form any contract, implied or actual.<br>This email address is not monitored.<br><br>";
$footer .= "You can follow us at http://burnsideandvineryallotments.org";

$headers = 'From: bandvinery@gmail.com' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' ;
$subject = 'Burnside and  Vinery Road Allotments Noticeboard';

// send  confirmation to the applicant
$message = $templateConf;

$message .= $footer;
$message = params($message);
$email = geturi('email');

$ret = mail ( $email , $subject , $message, $headers );

// send an email to the site manager
$message = $templateApp;

$message .= $footer;
$message = params($message);
//$email = 'burnsidesitemanager@burnsideandvineryallotments.org';
$email = 'jb-a@ntlworld.com';

$ret = mail ( $email , $subject , $message, $headers );
?>
