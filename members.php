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

	 <div class="container">            
            <div class="row">
                <div class="col-xs-12">
                    <p class="large-text">Too busy to check the rest of the site?  Bookmark this page and come back regularly for all the latest news, views and information.</p>
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <p class="large-text">Got something on your mind? Need some help? Got some advice? Want to share your experience?</p>
                    <p class="large-text">Contact us at <a href="mailto:webmaster@burnsideandvineryallotments.org">webmaster@burnsideandvineryallotments.org</a> with your thoughts. And don't forget to visit the <b>Digest</b> and <b>Information</b> pages.</p>
                    <hr>
                </div>
            </div>
            
            <!--div class="row">
                <div class="col-xs-12">
                    <p class="large-text">The Society always welcomes volunteers and right now there are vacancies on the Committee for members from Vinery Road.</p>
                    <p class="large-text">The two sites only function through the help and support of a small number of members. Please don't leave it up to someone else: 
                    contact Mark at <a href="mailto:chair@burnsideandvineryallotments.org">chair@burnsideandvineryallotments.org</a></p>
                    <hr>
                </div>
            </div-->
            
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="large-text">Bored?</h3>
                    <p class="large-text">You've done all the no-digging you can take.  The tomatoes are so plentiful they are harvesting themselves.  So, what better way to spend a couple of minutes than completing the Society's summer quiz?</p>
                    <p class="large-text">No, don't answer that - instead go to the <a href="quiz2.php"><i>Digest</i>'s <i>Quiz</i></a> page.  There is even a miniscule prize...</p>
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12"><h2>At a glance</h2></div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default" style="border: none; box-shadow: 0px 0px 0px;">
                        <div class="panel-heading" style="background: none; border: none;"><h3>Featured Article</h3></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/feature_cartoon.jpg" style="width: 100%;" class="img-responsive img-thumbnail"/>
                                </div>
                                <div class="col-xs-9">
                                    <p class="large-text">
                                        <img src="/assets/img/Phil/2.jpg" style="width: 30%;" class="img-responsive img-thumbnail pull-right margin"/>
                                        Starting out with a new plot can be daunting, especially if you are having an allotment for the first time.  
                                        Stella, Les and Phil at Burnside faced just that in 2016.
                                    </p>
                                    <p class="large-text">Click <a href="digest/newbie.php"><button class="btn btn-info">here</button></a> for the story of their first year.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default" style="border: none; box-shadow: 0px 0px 0px;">
                        <div class="panel-heading" style="background: none; border: none;"><h3>What's new in the last 2 weeks</h3></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/new_cartoon.jpg" style="width: 100%;" class="img-responsive img-thumbnail"/>
                                </div>
                                <div class="col-xs-9">
                                    <ul id="whatsnew" class="search large-text"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default" style="border: none; box-shadow: 0px 0px 0px;">
                    <div class="panel-heading" style="background: none; border: none;"><h3>Dates for your diary</h3></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/time_cartoon.jpg" style="width: 100%;" class="img-responsive img-thumbnail"/>
                                </div>
                                <div class="col-xs-9">
                                    <ul class="calendar large-text">
                                        <li>Burnside Volunteering Day - Sunday 2<sup>nd</sup> September<br>
                                            <i>Start at 10:00. Tidy and seed the orchard, clear some historically overgrown plots for re-letting, 
                                            spruce up and prep for party day. Drinks available all day, lunch time BBQ, bring a cake if you can.</i>
                                        </li>
                                        <li>Vinery Road summer party - Sunday 9<sup>th</sup> September. <span style="color:red;">NEW DATE</span><br><i><u>All</u> society members welcome.</i></li>
                                        <li>Burnside Flag Week - 8th to 15th September<br>
                                            <i>Get your flag flying ready for Party Day. Fly your country flag. Fly your team flag. 
                                            Design and make your own flag. 3ft x 5ft country flags are available on eBay for less than £3.00. Let’s add a mass of colour to the site for the 15<sup>th</sup>!</i>
                                        </li>
                                        <li>Burnside summer party - Saturday 15<sup>th</sup> September.<br>
                                            <i><u>All</u> society members welcome. 
                                            All the usual fun & more, plus music, games, raffle, BBQ, shared food.</i>
                                        </li>
                                        <li>Burnside Children's Get-together - Sunday 23<sup>rd</sup> September<br>
                                            <i>The first, children & family socialising event. Come and make new friends so that attending site with 
                                            parents is less boring.  Details to follow.</i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default" style="border: none; box-shadow: 0px 0px 0px;">
                    <div class="panel-heading" style="background: none; border: none;"><h3>About us</h3></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/about_cartoon.jpg" style="width: 100%;" class="img-responsive img-thumbnail"/>    
                                </div>
                                <div class="col-xs-9"> 
                                <ul class="search large-text">                              
                                        <li><a href="twitter.php">
                                            See what we are saying on Twitter <i>@burnvine</i> ...
                                        </a></li>
                                        
                                        <li><a href="documents.php"><span>
                                            Current Allotment Rules and Regulations ...
                                        </span></a></li>
                                    </ul>
                                </div>
                            </div>
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

                                        <li><a href="recipes/chillijam.php">
                                            <span  style="color: #404040;">
                                                A recipe for tomato and chilli jam - guaranteed to warm the cockles of your heart<i class="fa fa-star fa-glow"></i>
                                            </span>
                                        </a></li>

                                        <br>
                                    
                                        <li><a href="community.php">
                                            <span  style="color: #404040;">
                                                Soil, waste and an MSc student who needs our help<i class="fa fa-star fa-glow"></i>
                                            </span>
                                        </a></li>

                                        <br>
                                    
                                        <li><a href="https://www.baracambridge.org/" target="bara">
                                            <span  style="color: #404040;">
                                                We welcome members of Birdwood Area Residents Association to our web site <i class="fa fa-star fa-glow"></i>
                                            </span>
                                        </a></li>
                                        
                                        <br>
                                        
                                        <li><a href="community/diabetesuk.php"  style="color: #404040;">
                                            <span>
                                                Tina from Burnside has been doing her bit for Diabetes UK.  Read how she has been getting on...
                                            </span>
                                        </a></li>
                                        
                                        <br>
                                        
                                        <li><a href="tips/tomato-blight.php" style="color: #404040;">
                                            Tomato blight and what one fed up plot holder is doing about it...
                                        </a></li>
                                        
                                        <br>
                                        
                                        <li><a href="links.php" style="color: #404040;">
                                            A reminder of a popular item last year about Blight Watch.
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
