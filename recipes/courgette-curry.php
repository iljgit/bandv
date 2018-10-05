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

    <title>Burnside and Vinery: Courgette Curry</title>

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
                    <h1>Very simple (home cooking style) courgette curry<h1>
                    <h4><i>Smita - Burnside</i></h4><br>
                    <p>
                    Anyone who was at the Society's summer BBQ will probably have enjoyed Smita's aromatic courgette curry. For those of you who were there, here's a chance 
                    to relive the flavours.  For those of you who weren't there, here's a chance to find out what you missed.</p><p>
                    <i>Preparation time</i>: 5 minutes<br>
<i>Cooking time</i>: 12 to 15 minutes<br>
<i>Serves</i>: 1 or 2 (Use one small/medium courgette per person)<br>
                    </p>
                    <p>
                        <img src="/recipes/images/courgette-curry2.jpg" class="pull-right img-responsive img-thumbnail margin" style="width: 40%;">
                        <h2>Ingredients</h2>
                        <p>
                            Courgettes: 2 medium diced<br>
                            Tomato 1 medium chopped or half cooking apple diced<br>
                            1 chopped onion<br>
                            1 tsp chopped ginger and/or garlic<br>
                            ¼ tsp mustard seeds<br>
                            ¼ tsp turmeric powder<br>
                            ½ tsp red chilli powder<br>
                            1 tsp garam masala<br>
                            1 tbsp oil  <br>
                            Salt to taste<br>
                            Chopped coriander leaves: 1 tbsp<br><br>
                            Optional: 1 tbsp crushed peanuts/ dash of cream or tahini or coconut milk (anything that you prefer to add to the texture or taste)
                        </p>
                    </p>
                    <p>
                        <h2>Method</h2>
                        <ol>
                            <li>Heat the oil in pan, add mustard seeds and wait till they crackle then quickly add chopped onion, ginger and garlic.</li>
                            <li>Add red chilli powder, turmeric powder and stir for couple of minutes on a medium low heat.</li>
                            <li>Add cut courgettes and apple/tomato plus garam masala and put the lid on and cook on a medium heat for six to eight minutes.</li>
                            <li>Towards the end of cooking you can add a handful of crushed peanuts if you like it nutty. If you like it creamy then add a dash of cream or coconut milk and leave it to simmer with the lid on for three to five minutes.</li>
                            <li>Garnish it with the chopped coriander leaves and it is ready to eat.</li>
                        </ol>
                        <p>
                            At stage 3, you can also add a handful of peas or some other similar consistency veg from your plot. I avoid allotment spinach style greens as they need a shorter cooking time and tend to get bitter if added to the above recipe. 
                        </p>
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
