<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Weeder's Digest provides allotment relevant recipes.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Weeders Digest: Recipes</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css">

    <!-- Custom styles for this template -->
    <!--link href="assets/css/style.css?<?php echo(rand()); ?>" rel="stylesheet"-->
    <style>
        <?php
            $page = file_get_contents('assets/css/style.css');
            echo $page;
        ?>
    </style>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--script src="assets/js/modernizr.js"></script-->
    <!--script src="http://www.w3schools.com/lib/w3data.js"></script-->
    
  </head>

  <body class="digest">

    <!-- Fixed navbar -->
    <?php include "menu_snippet.html" ?>
    
	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>WEEDER'S DIGEST - From Plot to Pot</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 CONTACT WRAP
	 ***************************************************************************************************************** -->

	 <div class="container">
            
            <div class="row">
                <div class="col-xs-12">
                    <h3>Tried and trusted recipes using your fresh produce</h3><br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4" style="padding-bottom: 30px;">
                    <a href="recipes/smore.php">
                        <span class="blog-title">Smores</span><br>
                        <span class="blog-subtitle">A sweet treat you can eat between meals...</span><br>
                        <span class="blog-author">Andy K - Burnside</span>
                    </a>
                </div>
                <div class="col-xs-6 col-md-4" style="padding-bottom: 30px;">
                    <a href="recipes/courgette-curry.php">
                        <span class="blog-title">Courgette Curry</span><br>
                        <span class="blog-subtitle">Glut-busting courgette curry...</span><br>
                        <span class="blog-author">Smita - Burnside</span>
                    </a>
                </div>
                <div class="col-xs-6 col-md-4" style="padding-bottom: 30px;">
                    <a href="recipes/parsnip-soup.php">
                        <span class="blog-title">Curried Parsnip Soup</span><br>
                        <span class="blog-subtitle">Curry and parsnips in one bowl...</span><br>
                        <span class="blog-author">Anne P - Burnside</span>
                    </a>
                </div>
                <div class="col-xs-6 col-md-4" style="padding-bottom: 30px;">
                    <a href="recipes/squash-soup.php">
                        <span class="blog-title">Allotment Squash Soup</span><br>
                        <span class="blog-subtitle">A hearty soup for any time of the year...</span><br>
                        <span class="blog-author">Andy K - Burnside</span>
                    </a>
                </div>
            </div>
                        
        </div>
	 
	
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "footer_snippet.html" ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
        <script src="assets/js/blueimp-gallery.min.js"></script>

  <script>
    var i, el, els;
    els = document.getElementsByName('links');
    for (i = 0; i < els.length; i++) {
        el = els[i];
        el.onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    }
    </script>  
    <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
  </body>
</html>
