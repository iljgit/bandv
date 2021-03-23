<?php

$vinery_username = "vinery";
$vinery_password = "cheese.football";
$burnside_username = "burnside";
$burnside_password = "coffee.sneeze";

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

// do we have an email address - stops crawlers activating the script
$username = geturi('username');
if (!$username || strlen($username) === 0) {
    exit();
}

$site = "";
$password = geturi('password');

if ($username === $vinery_username && $password === $vinery_password) {
    $site = "vinery";
}
else if ($username === $burnside_username && $password === $burnside_password) {
    $site = "burnside";
}

if ($site === "") {
    echo "Username / password not recognised";
    exit();
}

$date = date('Y-m-d');
$dateStr = date('j M Y');
$contents = array(
    'date' => $date, 
    'dateStr' => $dateStr,
    'waitinglist' => geturi('waitinglist'),
    'pendingplots' => geturi('pendingplots'),
    'planned' => geturi('planned'),
    'past' => geturi('past'),
    'issues' => geturi('issues')
);

$fp = fopen($site . '.json', 'w');
fwrite($fp, json_encode($contents));
fclose($fp);

// echo json_encode( $data );

echo('OK');

?>