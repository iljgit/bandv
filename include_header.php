<?php

function context() {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = explode('/', $path);
    $path = $path[sizeof($path) - 1];

    if ($path === '') {
        $path = 'index';
    }
    else {
        $path = str_ireplace('.php', '', $path);
    }

    return $path;
}

echo '<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon-->
<link rel="shortcut icon" href="img/fav.png">
<!-- Author Meta -->
<meta name="author" content="Colorlib">
<!-- meta character set -->
<meta charset="UTF-8">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/allotment.css">';

?>