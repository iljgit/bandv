<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A flavoursome soup using allotment ingredients with minimal prepartion and cooking time.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>Curried parsnip soup – Burnside & Vinery</title>

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
                <h1>Curried Parsnip Soup<h1>
                <h4><i> Anne Pammenter - Burnside</i></h4>
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
                    A flavoursome soup with a kick - serves 6
                    </p>
                    <p>
                        <img src="/recipes/images/curriedparsnipsoup.jpg" class="pull-right img-responsive margin;" style="height: 250px;">
                        <h2>Ingredients</h2>
                        <p>
<ul>                        
<li>40g (1 1/2 oz) butter</li>
<li>1 medium onion, chopped</li>
<li>700 g  (1 1/2 lb) parsnips, peeled and finely diced</li>
<li>5 ml (1 level tsp) curry powder</li>
<li>1.4 litres  (2 1/2  pints) chicken stock</li>
<li>2.5 ml (1/2  level tsp) ground cumin</li>
<li>salt &amp; pepper, to taste</li>
<li>150 ml (5 fl oz) fresh single cream</li>
<li>paprika to garnish
</ul>
                        </p>                        
                    </p>
                    <p>
                        <h2>Method</h2>
<ol>
<li>Heat the butter in the base of a large pan and fry the onion and parsnip together for about 3 minutes.</li>
<li>Stir in the curry powder and cumin and fry for a further 2 minutes.</li>
<li>Add the stock and bring to the boil.</li>
<li>Reduce heat and simmer covered for about 45 minutes, until the vegetables are tender.</li>
<li>Leave to  cool slightly, then using a perforated draining spoon place the vegetables in a blender, add a little stock and puree until smooth.</li>
<li>Return puree to the pan. Adjust seasoning, add the fresh cream and reheat to serving temperature but do not boil.</li>
<li>Serve sprinkled with paprika.</li>
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
