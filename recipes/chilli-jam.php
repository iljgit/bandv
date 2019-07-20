<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tomato and chiili jam is a great way of using up some of your glut of tomatoes (and chllis).  It is a great accompaniment for cheese, meat and fish.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>Tomato and chilli jam recipe – Burnside & Vinery</title>

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
            <h1>TOMATO AND CHILLI JAM<h1>
            <h4><i>Joan - Burnside</i></h4>
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
                    <p>
Summer 2018 finds me with an early glut of tomatoes, so I’ve put some of them to good use by making tomato and chilli jam, a nice accompaniment for cheese, meat, and fish. 
Or just slap it on your sarnies. The tomatoes I’ve used are Red Alert from Kings, which I sowed towards the end of January. 
Kings describe them as ‘a very early outdoor cropper: one of the very best for flavour. Masses of small fruits are produced on bushy plants with no need for side-shooting’. 
</p>
<p>
I would agree with most of this, although I think the flavour of Red Alert is less than stunning (even more reason to convert them into something with more of a kick). 
They are also relatively thick skinned: perhaps they would fare better in a greenhouse instead of the minimal outdoor protection provided by my slightly 
ramshackle upright cold frame. However, I have been harvesting them since the end of June, around 1lb a day from 10 plants, and the flavour does seem to be improving with time.
</p>

<p>
    <img src="/recipes/images/chillijam.jpg" class="pull-right img-responsive img-thumbnail margin">
    <h2>Ingredients</h2>
<ul>                        
<li>1kg tomatoes</li>
<li>460g red peppers</li>
<li>70g chillies</li>
<li>300g redcurrants</li>
<li>12g fresh ginger</li>
<li>150ml red wine vinegar</li>
<li>2tsp caraway seeds</li>
<li>2sp paprika</li>
<li>600g sugar</li>
</ul>
</p>
<p>
<h4>Notes on ingredients</h4>
I didn’t actually include the redcurrants, but it would make for an interesting variation. I used a very mild chilli but I still find the resulting jam relatively hot, 
so I might reduce the quantity another time. I have also seen recipes which include onion, garlic, cumin, coriander and fish sauce: 
I think I would be happy to experiment with any of these except the fish sauce!
</p>

<p>
    <h2>Method</h2>
<ol>
<li>Cook all the roughly chopped ingredients (except the sugar) until soft</li>
<li>Blend roughly then return to the heat and add the sugar</li>
<li>Boil for quite a long time to reduce the sauce to a thick paste / jam (it won’t set like a jam, of course, as it doesn’t contain pectin)</li>
<li>Pour into jars and seal</li>
</ol>
</p>
<p>
<h4>Notes on method</h4>
As you will see, the method in the recipe I found isn’t particularly detailed! I simmered the ingredients initially for around half an hour. It then took me about an hour of gentle boiling to get it to a reasonable consistency.
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
