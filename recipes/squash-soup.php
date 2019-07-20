<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This recipe uses squash but can be easily adapted for other crops such as carrot.  It is a tasty, hearty, warming soup, just right for a cold or gloomy day.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>Squash soup: a hearty meal – Burnside & Vinery</title>

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
                <h1>Allotment Squash Soup<h1>
                 <h4><i>Andy Kurdynowski - Burnside</i></h4>
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
                    
                    <p>
                    This soup recipe is a starting point guide: you could use other types of squash and add other crops such as carrot (we do). Also you can use the quantities that you have harvested. It will always be a tasty warming soup, BUT sometimes it will turn out especially delicious, so enjoy!
                    </p>
                    <p>
                        <img src="/recipes/images/squashsoup.jpg" class="pull-right img-responsive img-thumbnail margin">
                        <h2>Ingredients</h2>
                        <p>
<ul>                        
<li>1 tbsp olive oil</li>
<li>1 large onion, peeled and finely chopped</li>
<li>1-2 red chillies, deseeded and chopped, or a big pinch of chilli powder.</li>
<li>2 tsp coriander seeds, crushed</li>
<li>1 butternut squash, about 750g (1lb 10oz), peeled, deseeded and roughly chopped</li>
<li>2 medium potatoes, peeled, roughly chopped</li>
<li>2 tomatoes skinned and sliced</li>
<li>1.7 litres (3 pints) hot vegetable stock</li>
<li>Salt and pepper</li>
</ul>
                        </p>                        
                    </p>
                    <p>
                        <h2>Method</h2>
<ol>
<li>Heat the olive oil in a large pan, add the onion and fry until soft. Add the chillies (or chilli powder) and coriander seeds and fry for 1-2 minutes.</li>
<li>Add the squash, potatoes and tomatoes and cook gently on a low heat for about 20 minutes. Add the hot stock then cover the pan and bring to the boil. Simmer gently for 15 minutes, the vegetables should then be nice and soft.</li>
<li>Whizz the soup in the pan with a hand blender (let it cool a bit first!), or you could use a food processor. Add the seasoning and reheat to serve.</li>  
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
