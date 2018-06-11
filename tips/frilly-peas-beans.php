<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ever been confronted by the Pea and Bean Weevil – Sitona lineatus">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Burnside and Vinery: Frilly Peans and Beans</title>

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
                <div class="col-xs-12 large-text">
                    <h1>"Frilly" Peas and Beans<h1>
                    <h4><i>Barry South - Vinery Road</i></h4><br>
                    <center><p class="large-text">
                    Ever wondered what causes this?<br><br>
                    <img src="/tips/images/bs_plant1.jpg" class="img-responsive img-thumbnail margin" style="width:40%">
                    </p></center><br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 large-text">
                    <p class="large-text">
                    <img src="/tips/images/bs_plant2.jpg" class="pull-left img-responsive img-thumbnail margin" style="width:25%">
                    It’s the Pea and Bean Weevil – Sitona lineatus.
                    It’s about 3mm to 4mm long and you will find it on peas and beans in the spring, probably hiding where the leaf folds as it joins the leaf stalk.  They are pretty good at disappearing when disturbed and drop to the ground where they are well camouflaged. They feed at the leaf margin and are responsible for the notched effect around the edges of the leaves.
                    </p>
                    <p class="large-text">
                    Although it looks alarming the plants will probably outgrow the damage. Apart from the cosmetic effect it doesn’t seem to affect the crop, although if you were a purist you could argue that the small reduction in leaf area index must have an effect on yield! No need to race for the pesticides as this is a pest we can tolerate. The adults overwinter in leaf litter and soil and become active as the weather warms. They lay eggs in the soil in late spring and the larvae feed on the nitrogen fixing root nodules. They pupate over the summer and emerge in late summer.
                    </p>
                    <p class="large-text">
                    Chemical controls are of little benefit as they can never be specifically applied to the target species and will involve some “collateral” damage of natural predators. Organic controls would be “search and squash” in spring, to prevent egg laying, and crop rotation. The latter is not too effective as the adults can fly and the former isn’t too effective either as each adult lays multiple eggs. Unless you can kill them all the overall population numbers won’t change much. The only controls are cold weather and soil predation, neither of which you can control. Luckily the damage is mostly cosmetic so toleration is the best option. 
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
