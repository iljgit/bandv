<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Useful information about Burnside and Vinery Road Allotments Society, South Cambridge.  Rules, regulations, minutes, news, tips.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Members info: Burnside and Vinery Road allotments</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css">

    <!-- Custom styles for this template -->
    <style>
        <?php
            $page = file_get_contents('assets/css/style.css');
            echo $page;
        ?>
    </style>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <script>
            <?php
                $page = file_get_contents('assets/js/whatsnew.js');
                echo $page;
            ?>
        </script>

        <style type="text/css">
xiframe[id^='twitter-widget-']{ width:100% !important; min-width: 100% !important;}
</style>

        <script>
            window.twttr = (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
                if (d.getElementById(id)) return t;
                js = d.createElement(s);
                js.id = id;
                js.src = "https://platform.twitter.com/widgets.js";
                //js.setAttribute('onload', "twttr.events.bind('rendered',function(e) {responsiveTwitterWidget()});");
                fjs.parentNode.insertBefore(js, fjs);
            
                t._e = [];
                t.ready = function(f) {
                t._e.push(f);
                };
            
                return t;
            }(document, "script", "twitter-wjs"));

            function responsiveTwitterWidget(){
                var widget = $("#twitter-widget-0");
                var frame_style = widget.attr('style');
                widget.attr('style', frame_style + ' max-width:none !important; width:100%');
                return;
                if(widget) {
                    var head = widget.contents().find("head")
                    if (head.length) {
                        head.append('<style>.timeline { max-width: 100% !important; width: 100% !important; } .timeline .stream { max-width: none !important; width: 100% !important; }</style>');
                    }
                    widget.append($('<div class=timeline>'));
                }
            }
        </script>
        <script>
            function enlarge(src) {
                let d = document.createElement('div');
                d.setAttribute('name', 'ilj');
                d.style.width = '100%';
                d.style.height = '100%';
                d.style.backgroundColor = 'rgba(64, 64, 64, 0.4)';
                d.style.backgroundImage = `url(${src})`;
                d.style.backgroundSize = 'contain';
                d.style.backgroundRepeat = 'no-repeat';
                d.style.backgroundPosition = 'center center';
                d.style.cursor = 'pointer';
                d.style.position = 'fixed';
                d.style.top = '0px';
                d.style.left = '0px';
                d.style.zIndex = '9999';

                let c = document.createElement('div');
                c.style.position = 'absolute';
                c.style.right = '10px';
                c.style.top = '10px';
                c.style.height = 'auto';
                c.style.width = 'auto';
                c.innerHTML = '<i class="fa fa-times" aria-hidden="true" style="color: darkred; font-size: 36px;"></i>';
                d.appendChild(c);

                document.body.style.overflow = 'hidden';
                
                document.body.appendChild(d);

                d.onclick = () => {
                    document.body.style.overflow = 'auto';
                    document.body.removeChild(d);
                }
            }
        </script>
  </head>

  <body onload="WNew.display();">

    <!-- Fixed navbar -->
   <?php include "menu_snippet.html" ?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>MEMBERS</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 BODY
	 ***************************************************************************************************************** -->

     <div class="container-fluid parallax" style="background-image: url(/assets/img/trevor-taylor-dedication/D71_6848.jpg);"></div>
     <br>

	 <div class="container">            
            <div class="row">
                <div class="col-xs-12">
                    <p class="large-text">Too busy to check the rest of the site?  Bookmark this page and come back regularly for all the latest news, views and information.</p>
                    <p class="large-text">Got something on your mind? Need some help? Got some advice? Want to share your experience? 
                    Contact us by emailing the <a href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a> with your thoughts. 
                    And don't forget to visit the <b>Digest</b> and <b>Information</b> pages.</p>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12" style="padding: 10px; margin-bottom: 30px;">
                    <h3 style="color: darkblue;" class="text-center">Vinery Volunteering Day</h3>
                    <h4 style="color: darkblue;" class="text-center">Saturday 29<sup>th</sup> June, from 1pm</h4>
                    <p class="large-text" style="color: blue;">
                        Certain areas of the site could do with some maintenance and we need your help! 
                        On Saturday 29th June, from 1pm, we will be meeting collectively to tidy and organise the Communal Compost.
                    </p>
                </div>
            </div>

            <!--div class="row">
                <div class="col-xs-12" style="padding: 10px;">                
<p class="large-text">
<h3>Sad news about one of Burnside’s longstanding tenants: Giuseppe (Joe) Cordaro passed away suddenly on February 6th.</h3>
</p>
<p class="large-text">
Giuseppe was a popular character who loved spending time on his plots near the store and being part of the Burnside community. 
Over recent years he had gradually given up allotment space, allowing new people to have a chance at working a plot. 
</p>
<p class="large-text">
He was well known for helping new tenants with advice and lending them tools to get started. He will be sadly missed on the site. 
A number of plotholders have been in touch with the Society to share memories of his generosity, his cheerful encouragement to fellow tenants and his invaluable gardening advice. 
</p>
<p class="large-text">
His funeral will be held at the City Cemetery, Newmarket Road, on Wednesday 6 March at 2.30pm.
</p>
                </div>
            </div-->
            
            <!--div class="row">
                <div class="col-xs-3">
                    <p class="large-text"><img src="/assets/img/engineering-cartoon.jpg" style="width: 100%;" class="img img-responsive img-thumbnail"/>
                </div>
                <div class="col-xs-9">
                    <h2 style="margin-top: 0px; padding-top: 0px;">DING DING, Any old Iron, any old iron, any any any old iron!</h2>
                    <p class="large-text">
                    During a recent site survey at Burnside, it was noted that there is a significant amount of scrap metal on site, 
                    dotted about on various plots. Often, this is old stuff from earlier tenants, 
                    but there also things that have been collected, with all the best intentions of using them on the plot, 
                    but they haven’t been used and probably never will be. This is your chance to dispose of this scrap with the minimum of fuss, 
                    AND at the same time allow the society to add to its funds for future projects and to keep rent payments down etc
                    </p>
                    <p class="large-text">
                    So if you’d like to take advantage of this, please place any scrap metal in the collection area in front of the Store before June 10th. We will endeavour to segregate aluminium as that fetches a better scrap price than steel.
                    </p>
                    <p class="large-text">
If you are some distance from the Store and are unable to move it that far, simply place it on the track nearest to your plot and let one of the site managers 
know it is there – email <a href="mailto:burnsidesitemanager@burnsideandvineryallotments.org">burnsidesitemanager@burnsideandvineryallotments.org</a>  - 
and it will then be collected for you.
                    </p>
                    <hr>
                </div>
            </div-->
            
            <!--div class="row">
                <div class="col-xs-12" style="border-radius: 20px; border: 2px solid darkred; background: rgba(255, 200, 200, 0.05);">
                    <h2 class="text-center">Plant Swap, 11<sup>th</sup> and 12<sup>th</sup> May</h2>
                    <img src="/assets/img/plant-swap.jpg" class="hidden-sm hidden-xs img img-responsive img-thumbnail" style="float: left; width: 20%; margin-right: 20px; margin-bottom: 20px;">
                    <p class="large-text">
There will be a Plant Swap at the Burnside Store the weekend of the 11th and 12th of May during normal Store opening hours of 10-12. 
                    </p>
                    <p class="large-text">
If you’ve got any surplus veg plants you want to find a good home for, bring them along and swap them for something else you like the look of. 
No obligation to bring anything; feel free to make a small donation if you just take plants. 
Why not take a good look round the store at the same time and stop for a cup of tea?
                    </p>
                </div>
            </div>
            
            <hr-->

            <div class="row">
                <div class="col-xs-12" style="width: 100%; padding-top: 20px;"><h2 class="text-center">At a glance</h2></div>
            </div>

        </div>

        <br>

        

        <br>

        <div class="container">

            <div class="row row-eq-height">

                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 120px;">
                            <img src="assets/img/feature_cartoon.jpg" style="height: 100px; float:left; position: relative; margin-right: 20px;" class="img-responsive img-thumbnail margin"/>
                            <h3>Featured</h3>
                        </div>
                        <div class="panel-body" style="height:200px; overflow: auto;">
                        <p class="large-text">
                            From a few years ago, Glynn and Martin from Vinery produced a series of videos about all sorts of aspects of having an allotment. 
                            And Cambridge 105 came to visit Vinery to talk about keeping chickens.
                        </p>
                        <p class="large-text">Click <a href="/videos.php">here</a> 
                        to see and hear what was going on in 2016.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 120px;">
                            <img src="assets/img/time_cartoon.jpg" style="height: 100px; float:left; position: relative; margin-right: 20px;" class="img-responsive img-thumbnail margin"/>
                            <h3>Diary Dates</h3>
                        </div>
                        <div class="panel-body" style="height:200px; overflow: auto;">
                            <ul class="calendar large-text">
                                <!-- PUT NEWS HERE -->

                                <!--li>Check the calendar for forthcoming events.</li-->
                                <li>Vinery Volunteering Day - Sat 29<sup>th</sup> June, from 1pm</li>
                                <li>Don't forget the Store is open until the end of July</li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row row-eq-height">

                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 120px;">
                            <img src="assets/img/new_cartoon.jpg" style="height: 100px; float:left; position: relative; margin-right: 20px;" class="img-responsive img-thumbnail margin"/>
                            <h3>What's new</h3>
                        </div>
                        <div class="panel-body" style="height:240px; overflow: auto;">
                            <ul id="whatsnew" class="search large-text"></ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 120px;">
                            <img src="assets/img/sale-cartoon.jpg" style="height: 100px; float:left; position: relative; margin-right: 20px;" class="img-responsive img-thumbnail margin"/>
                            <h3>Noticeboard</h3>
                        </div>
                        <div class="panel-body" style="height:240px; overflow: auto;">
                            <p class="large-text">Globe artichokes - free to any sort of home</p>
                            <p class="large-text">Hand-made aprons, barrows, and a trug are available for low cost.</p>
                            <p class="large-text">Click <a href="/notices.php">here</a> for more details;</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row row-eq-height">

                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 120px;">
                            <img src="assets/img/about_cartoon.jpg" style="height: 100px; float:left; position: relative; margin-right: 20px;" class="img-responsive img-thumbnail margin"/>
                            <h3>About us</h3>
                        </div>
                        <div class="panel-body" style="height:300px; overflow: auto;">
                            <ul class="search large-text">                              
                                <li>
                                <a href="committee.php"><span>
                                    Your committee ...
                                </span></a>
                                </li>
                                
                                <li><a href="documents.php"><span>
                                    Current allotment rules and regulations ...
                                </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 120px;">
                            <img src="assets/img/blog-cartoon.jpg" style="height: 100px; float:left; position: relative; margin-right: 20px;" class="img-responsive img-thumbnail margin"/>                            
                            <h3>Latest Tweet</h3>
                            
                        </div>
                        <div class="panel-body" style="height: 300px; overflow: auto; width: 100%;">
                        <div style="float:right; text-align: right; width: 220px;"><a class="twitter-follow-button" data-show-count="false" href="https://twitter.com/BurnVine">Follow @BurnVine</a></div>
                            <a class="twitter-timeline"
                                href="https://twitter.com/BurnVine"
                                data-tweet-limit="1"
                                xdata-width="400"
                                data-height="300">
                                Tweets by @BurnVine
                            </a>
                            
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default" style="border: none; box-shadow: 0px 0px 0px;">
                        <div class="panel-heading" style="background: none; border: none;"><h3>In case you missed it the first time round</h3></div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/browse_cartoon.jpg" style="width: 100%;" class="img-responsive img-thumbnail"/>
                                </div>
                                <div class="col-xs-9">
                                    <ul class="pointer large-text">

                                        <li><a href="/burnsideorchard.php">
                                            <span  style="color: #404040;">
                                                Penny from Burnside had a vision for a community orchard.  She wanted to help preserve local varieties of apples, while making a 
                                                positive contribution to our local environment.
                                            </span>
                                        </a></li>

                                        <br>
                                    
                                        <li><a href="https://www.baracambridge.org/" target="bara">
                                            <span  style="color: #404040;">
                                                We welcome members of Birdwood Area Residents Association to our web site <!--i class="fa fa-star fa-glow"--></i>
                                            </span>
                                        </a></li>

                                        <br>
                                        
                                        <li><a href="links.php" style="color: #404040;">
                                            Visit our links page for a new site with lots of exciting ideas for getting children involved in gardening.  A new beginner's guide has been added recently.
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>


            </div>
            
            <div class="row"><div class="col-xs-12">&nbsp;</div></div>
            
         </div><!--container-->
	 
	
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "footer_snippet.html" ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
        
  </body>
</html>
