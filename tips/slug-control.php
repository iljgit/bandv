<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Environmentally friendly ways of controlling slugs and snails.  Especially important since proprietary, unfriendly products will soon no loinger be available.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>Eco-friendly pest control – Burnside & Vinery</title>

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
            <div class="col-xs-12">

                <h1>
                <img class="img img-responsive" style="width: 25%; float: left; margin-right: 10px; margin-bottom: 10px;" src="images/monster-slug.png">
                Environmentally friendly ways of controlling slugs and snails<h1>
                <h4><i>Penny - Burnside</i></h4><br>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
            &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <p class="large-text">

                The recent wet weather has brought out the slugs and snails, which are now well and truly on the march.
                </p>
                <p class="large-text">
                To protect my courgettes and squashes, I take two different approaches:
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 large-text">
                <ul><li>
                    <img class="img img-responsive img-thumbnail" style="width: 25%; float: right; margin-left: 10px; margin-bottom: 10px;" src="images/copper-sleeve.jpg">    
                    I buy copper scourers from the hardware store on Mill Road, unravel them into loops so that one scourer can be cut into 4 or 5 collars,     
                    and tuck them around the base of the plants to protect them while the stalks are small. 
                </li> </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 large-text">
                <ul><li>
                    <img class="img img-responsive img-thumbnail" style="width: 25%; float: right; margin-left: 10px; margin-bottom: 10px;" src="images/wool-pellets.jpg">
                    Additionally, or on their own, I put ‘Slug Gone’ pellets around the plants: these are pellets of wool impregnated with fertiliser, 
                    so when they disintegrate into the soil they also improve it.
                </li></ul>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 large-text">
            These really do keep these critters off!<br><br>
            </div>
        </div>
    </div>

<!--




-->
	 
	
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
