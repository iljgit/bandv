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
    
    $ret = str_replace("{message}", geturi('message'), $ret);
    
    return $ret;
}

$templateConf = "{message}";


$footer = "<br><br>=========================================================<br>";
$footer .= "This email does not form any contract, implied or actual.<br>This email address is not monitored.<br><br>";
$footer .= "You can follow us at http://burnsideandvineryallotments.org/members.php";

$headers = 'From: no-reply@burnsideandvineryallotments.org' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' ;
$subject = 'Burnside and Vinery Road Allotments Society';

// send  the message out one email at a time
$message = $templateConf;

$message .= $footer;
$message = params($message);
$email = geturi('email');
$password = geturi('password');

if ($password === 'pl00Py99;') {
    $email = explode(',', $email);
    foreach($email as $addr) {
        if (strlen(trim($addr)) > 0) {
            $ret = mail ( trim($addr), $subject, $message, $headers );
        }
    }
}
?>
