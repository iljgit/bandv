<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Weeder's Digest provides useful allotment and gardening tips.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Weeders Digest: Tips</title>

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
				<h3>WEEDER'S DIGEST - Tips</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 CONTACT WRAP
	 ***************************************************************************************************************** -->

	 <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <p>
                        <a href="tips/slug-control.php">
                            <span class="blog-title">Slugs</span><br>
                            <span class="blog-subtitle">Keeping them at bay</span><br>
                            <span class="blog-author">Penny - Burnside</span>
                        </a>
                    </p>

                    <p>
                        <a href="tips/weeds.php">
                            <span class="blog-title">Weeds - an alternative view</span><br>
                            <span class="blog-subtitle">Learning to live with weeds</span><br>
                            <span class="blog-author">Joan - Burnside</span>
                        </a>
                    </p>

                    <p>
                        <a href="tips/weed-block.php">
                            <span class="blog-title">Making your plot weed-free</span><br>
                            <span class="blog-subtitle">Getting rid of weeds - a step-by-step guide</span><br>
                            <span class="blog-author">Andy K - Burnside</span>
                        </a>
                    </p>

                    <p>
                        <a href="tips/tomato-blight.php">
                            <span class="blog-title">Tomato blight</span><br>
                            <span class="blog-subtitle">Pink 6 and Blue 13 10, Principe Borghese 0 ...</span><br>
                            <span class="blog-author">Barry South - Vinery Road</span>
                        </a>
                    </p>
                    
                    <p>
                        <a href="tips/leaf-miner.php">
                            <span class="blog-title">Cover <i>Allium sp</i> with Enviromesh to prevent Leaf Miner.</span><br>
                            <span class="blog-subtitle">Act now to stop your <i>Alliums</i> meeting a grizzly end ...</span><br>
                            <span class="blog-author">Barry South - Vinery Road</span>
                        </a>
                    </p>
                    
                    <p>
                        <a href="tips/frilly-peas-beans.php">
                            <span class="blog-title">"Frilly" peas and beans</span><br>
                            <span class="blog-subtitle">The Pea and Bean Weevil - definitely the lesser of several weevils ...</span><br>
                            <span class="blog-author">Barry South - Vinery Road</span>
                        </a>
                    </p>
                    
                    <p>
                        <a href="tips/slugs-pests.php">
                            <span class="blog-title">Slugs and Pests</span><br>
                            <span class="blog-subtitle">There are several things that can dampen a plot holder’s enthusiasm...</span><br>
                            <span class="blog-author">John McGill - Burnside</span>
                        </a>
                    </p>
                    
                    <p>
                        <a href="http://www.nsalg.org.uk/growing-advice/crops-and-produce/#prettyPhoto/29/" target="tips">
                            <span class="blog-title">Growing potatoes</span><br>
                            <span class="blog-subtitle">Tips on growing potatoes (clicking takes you outside this site)</span><br>
                            <span class="blog-author">The National Allotment Society</span>
                        </a>
                    </p>

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
