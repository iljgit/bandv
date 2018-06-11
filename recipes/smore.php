<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>Burnside and Vinery: Smores</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    
    <link rel="stylesheet" href="/assets/css/blueimp-gallery.min.css">

    <!-- Custom styles for this template -->
    <style>
        <?php
            $page = file_get_contents('../assets/css/style.css');
            echo $page;
        ?>
    </style>
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">


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

  <body>

    <!-- Fixed navbar -->
    <?php include "../menu_snippet.html" ?>
    
	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>WEEDER'S DIGEST</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 CONTACT WRAP
	 ***************************************************************************************************************** -->

	 <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                        <div class="slides"></div>
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="close">×</a>
                        <a class="play-pause"></a>
                        <ol class="indicator"></ol>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12"><br>
                    <h1>Smores<h1>
                    <h4><i>Andy Kurdynowski (well - almost) - Burnside</i></h4>
                    <p>
                    <b>Smore</b> <i>n. A sweet treat.</i>
                    </p>
                    <p>
                    The origin of smores is unclear but the first recorded reference is in Shakespeare's Henry V<br>
                    <b>One smore unto the breach, dear friends, one smore</b><br>
                    and is believed to refer to the need to fill that little tummy gap before slaughtering your enemies.
                    </p>
                    <p>
                        <img src="/recipes/images/smore.jpg" class="pull-right img-responsive img-thumbnail margin">
                        <h2>Ingredients</h2>
                        <p>
<ul>                        
<li>1 burn bin</li>
<li>1 packet of marshmallows</li>
<li>1 packet of digestives</li>
<li>1 long stick</li>
</ul>
                        </p>                        
                    </p>
                    <p>
                        <h2>Method</h2>
<ol>
<li>Fire up the burn-bin until the hair on your right kneecap singes.</li>
<li>Delicately place a marshmallow on the end of your long, pointy stick.</li>
<li>Holding the non-marshmallow end of the stick, place the marshmallow in the searing heat.</li>  
<li>Shout "$*#!£%" as the marshmallow slips off the stick.</li>
<li>Put another marshmallow on the stick and apply to the heat, while the hair on your left kneecap singes.</li>
<li>When the marshmallow melts or catches fire, remove from the flame and then, using more hands than you possess, 
sandwich the marshmallow (minus the stick - very important) between two digestives.</li>
<li>Cram the resulting sandwich into your mouth.  If you do it too soon, the roof of your mouth will ignite.  If you leave it too long, the marshmallow turns to glue and your insides may never recover.</li>
<li>Repeat until you never want to see a digestive again.</li>
<li>Buy a matching pair of kneecap toupees.</li>
</ol>
                    </p>
                </div>
            </div>
            
        </div>
	 
	
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "../footer_snippet.html" ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/retina-1.1.0.js"></script>
        <script src="/assets/js/blueimp-gallery.min.js"></script>

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
  </body>
</html>
