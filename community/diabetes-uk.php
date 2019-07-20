<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tina from Burnside is doing invaluable work raising funds for a very worthwhile charity: Diabetes UK.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>Supporting Diabetes UK – Burnside & Vinery/title>

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
    
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    
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
				<h1>SUPPORTING DIABETES UK</h1>
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
                <h2>Diabetes UK Swim 22</h2>
                <p class="large-text">
                In Spring 2018, Tina set herself a challenge to raise money for Diabetes UK.  You can read about what she set out to do below.  Here she updates us on her progress:
                </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                <hr>
                <p class="text text-info large-text">
                I wanted to thank everyone from the society who has generously donated seedlings and cash, bringing the allotment total to over £40.  Thank you!  I think it is truly marvellous as well as encouraging my colleagues to have a try at growing their own!  This brings my total raised so far to <b>£1430</b> and I will continue to pull in some cash as we sell excess produce (though I have been reluctant to sell too many of our strawberries!). <br><br>
                With very best wishes and gratitude<br>Tina x<br>
                <i class="text pull-right" style="font-size:80%">12<sup>th</sup> June 2018</i><br>
                </p>
                <hr><br>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                <h3>The Challenge - March 2018</h3>
<p class="large-text">
<img class="img-thumbnail pull-left" style="width: 30%; margin-right: 20px; margin-bottom: 20px;" src="images/diabetes_swim_22.jpg" />
Three months ago I set myself a crazy challenge which stemmed from Diabetes UK Swim 22 initiative to swim 22 miles (the width of the Channel) in my local pool over a period of 3 months.  
</p>
<p class="large-text">
However, not content with that, I decided to extend the challenge to also include the distances I covered cycling and walking in the 3 months too (a protracted triathlon if you like); my aim was to reach Southern Spain.
</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
<p class="large-text">
<img class="img-thumbnail pull-right" style="margin-left: 20px; margin-bottom: 20px;" src="images/diabetes_challenge.jpg" />Three months is now up.  I'm not sure how many kms I walked on the allotment but in the Swim 22 challenge I swam 68 miles and finished 16 on the leaderboard (out of 4,600 participants).
</p>
<p class="large-text">
I am pleased to say that I covered 2,080 km in total which, as the crow flies, means that I actually reached Africa/Iceland/Sweden/Russia, depending on which way you fly!
</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
<h3>How you can help</h3>
<p class="large-text">
To add to the money I have collected, I am also selling any excess plants/produce from our Burnside allotment to colleagues so if you have any that would otherwise go to waste, I'd be really happy to take them off your hands.  My husband Bobby is often on our allotment (11, next to Ancaster Way gate) in the afternoons so feel free to leave them with him, or in front of the "summer house".  Any money raised will go direct to Diabetes UK.
</p>
<p class="large-text">
Failing that, if you'd just like to sponsor me, you can visit my <b>Justgiving</b> page at <a href="https://www.justgiving.com/fundraising/tina-bingham1" target="diabetes">https://www.justgiving.com/fundraising/tina-bingham1</a>
</p>
<p class="large-text">
Many thanks for any contributions,
</p>
<p class="large-text">
Best wishes<br><br>
<span style="font-family: 'Lobster',cursive">Tina</span>
</p>
                </div>
            </div>
        </div>
        
        <!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "../footer_snippet.html" ?>

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
