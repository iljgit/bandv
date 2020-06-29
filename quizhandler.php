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

// do we have a name - stops crawlers activating the script
$name = geturi('name');
if (!$name || strlen($name) === 0) {
    exit();
}

// build the results
$results = (object) [];

$results->name = $name;
$results->answer1 = geturi('answer1');
$results->answer2 = geturi('answer2');
$results->answer3 = geturi('answer3');
$results->answer4 = geturi('answer4');
$results->answer5 = geturi('answer5');
$results->answer6 = geturi('answer6');
$results->answer7 = geturi('answer7');
$results->answer8 = geturi('answer8');
$results->answer9 = geturi('answer9');
$results->answer10 = geturi('answer10');
$results->answer11 = geturi('answer11');
$results->answer12 = geturi('answer12');
$results->answer13 = geturi('answer13');
$results->answer14 = geturi('answer14');

// create the file name
$quizid = geturi('quizid');
$filename = 'quiz/' . $quizid .'/answers/' . uniqid() . '.json';

// convert the results
$content = json_encode($results);

// write it out
if(!file_exists(dirname($filename))) {
    mkdir(dirname($filename), 0777, true);
}

file_put_contents($filename, $content)
?>