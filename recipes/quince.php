<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Burnside and Vinery Road Allotment Society - home grown quince paste recipe">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>Burnside and Vinery: Quince paste</title>

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

	 <div class="container" style="font-size: 1.2em;">
          
            <div class="row">
                <div class="col-xs-12">
                    <h1>Quince Paste<h1>
                    <h4><i>Joan - Burnside</i></h4>
                    <p>
For anyone unfamiliar with quince, it’s a hard fruit related to the pear. You can’t eat it raw, but it cooks up very nicely into a jelly or a paste 
(the latter is especially popular in Spain, where it is known as membrillo and often paired with their sheep’s milk cheese, Manchego). 
I like its aromatic smell and the beautiful orangey colour it takes on when cooked.
</p><p>
I don’t have a quince tree, but I first started making quince paste when I saw one of those nice ‘Please help yourself’ buckets outside 
someone’s house a couple of years ago. You can even eat some of the ornamental varieties – Chaenomeles Japonica - although they have 
two major drawbacks: 1) they have less flavour 2) they are a nightmare to peel, being much smaller! My quince paste seemed to go down 
well at the Burnside summer party in September 2018, so here’s the recipe.
                    </p>

<p>&nbsp;</p>
<p>
    <img src="/recipes/images/quince.jpg" class="pull-right img-responsive img-thumbnail margin" style="width: 30%;">
    <h2>Ingredients</h2>
<ul>                        
<li>4lbs (1.8Kg) of quinces, peeled, cored and chopped</li>
<li>Sugar (I don’t think it much matters whether it’s granulated or caster, and the amount is worked out during cooking)</li>
<li>Vanilla – pod or essence (optional: I don’t usually bother with vanilla, I think the quince has enough flavour of its own).</li>
</ul>
</p>

<p>
    <h2>Method</h2>
<ol>
<li>Put the quince pieces in a large pan and add enough water to cover. Add a vanilla pod or a drop of essence if you like. 
Simmer for 30-40 minutes with a lid on, or until the quince is soft.</li>
<li>Drain the liquid and weigh the fruit: note the weight, this is the weight of sugar you need.</li>
<li>Blend the fruit till smooth.</li>
<li>Return to pan, add the sugar and cook over low heat till sugar dissolved.</li>
<li>Continue to cook over low heat, stirring occasionally, for 1 to 1.5 hours, or until the paste has thickened and has a deep orange colour – 
watch out: it gets very hot at this point and bubbles and splashes up!</li>
<li>Pour into a greased / lined 20cm x 20cm baking tray and smooth out.</li>
<li>Put in oven, preheated to 50<sup>o</sup>C (120<sup>o</sup>F), to speed up the setting process, for about an hour.</li>
<li>Slice into manageable portions.</li>
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
