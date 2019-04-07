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

	 <div class="container">            
            <div class="row">
                <div class="col-xs-12">
                    <p class="large-text">Too busy to check the rest of the site?  Bookmark this page and come back regularly for all the latest news, views and information.</p>
                    <p class="large-text">Got something on your mind? Need some help? Got some advice? Want to share your experience? 
                    Contact us by emailing the <a href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a> with your thoughts. And don't forget to visit the <b>Digest</b> and <b>Information</b> pages.</p>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12" style="padding: 10px; margin-bottom: 30px; background-size: cover;">
                    <h2 style="color: darkblue;" class="text-center">Society AGM</h2>
                    <h3 class="text-center">Wednesday April 10<sup>th</sup> at 7:30pm, St Martin's Hall, Suez Road</h3>
                    <p class="large-text">
                        A reminder that this year's AGM is happening soon.  Everyone is welcome (tenants, family, friends).  
                        Please note that tenants will be asked to ‘sign in’ at the door, simply by ticking a members list, so that we have a 
                        record of who is there and who takes part in any voting on the night.
                    </p>
                </div>
            </div>

            <!--div class="row">
                <div class="col-xs-12" style="padding: 10px; margin-bottom: 30px; background-size: cover; background-image: url(/assets/img/celebrate.png)">
                    <h3 style="color: darkblue;" class="text-center">BURNSIDE CHILDREN’S GET TOGETHER</h3>
                    <p class="large-text">
                    A children’s gathering is planned for Saturday 30th March, meeting at the picnic area at 2pm. 
                    This is a chance for children and their guardians to meet, once a season, to socialise and grow some allotment friendships. 
                    This will be the winter time gathering as it falls on the day before spring time officially starts! 
</p>
<p class="large-text">
There will be materials to make a spring time craft or Mother’s Day present. 
If you would like to bring a craft, game or snack to share that would be great. 
Thanks to everyone showing up and joining in we had a good time last time (remember the ride in the dustbin...), so let’s do it again!
</p>
<p class="large-text">
We will be trying out our new HUGE gazebo, so even if the weather on the day is not as kind as we hope, crafting activities should not be a problem. 
                    </p>
                </div>
            </div-->

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
                    <p class="large-text"><img src="/assets/img/crisps.jpg" style="width: 100%;" class="img img-responsive img-thumbnail"/>
                </div>
                <div class="col-xs-9">
                    <h2 style="margin-top: 0px; padding-top: 0px;">Seed Potatoes</h2>
                    <p class="large-text">
                    Seed potato orders will be available to be picked up from the <b>Burnside Store</b> on Sunday 27<sup>th</sup> January between 10 and 12.
                    </p>
                    <p class="large-text">
                    Please make every effort to collect your order on Sunday morning, either in person or by asking a friend. Every order not collected makes extra work for the volunteers 
                    who have sorted the orders and who will spend Sunday morning handing those orders out.
                    </p>
                    <hr>
                </div>
            </div-->
            
            <!--div class="row">
                <div class="col-xs-12">
                    <h3 class="large-text">Bored?</h3>
                    <p class="large-text">You've done all the no-digging you can take.  The tomatoes are so plentiful they are harvesting themselves.  So, what better way to spend a couple of minutes than completing the Society's summer quiz?</p>
                    <p class="large-text">No, don't answer that - instead go to the <a href="quiz2.php"><i>Digest</i>'s <i>Quiz</i></a> page.  There is even a miniscule prize...</p>
                    <hr>
                </div>
            </div-->
            
            <div class="row">
                <div class="col-xs-12"><h2>At a glance</h2></div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default" style="border: none; box-shadow: 0px 0px 0px;">
                        <div class="panel-heading" style="background: none; border: none;"><h3>Featured</h3></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/feature_cartoon.jpg" style="width: 100%;" class="img-responsive img-thumbnail"/>
                                </div>
                                <div class="col-xs-9">
                                    <p class="large-text">
                                        The <b>Trevor Taylor Pavilion</b> re-dedication took place on Sunday 31<sup>st</sup> March 2019
                                    </p>
                                    <p class="large-text">Click <a href="/news.php"><button class="btn btn-info">here</button></a> 
                                    for more details and pictures of the event.</p>

                                    <p><hr></p>

                                    <p class="large-text">
                                        Penny from Burnside had a vision for a community orchard.  She wanted to help preserve local varieties of apples, while making a 
                                        positive contribution to our local environment.
                                    </p>
                                    <p class="large-text">Click <a href="/burnsideorchard.php"><button class="btn btn-info">here</button></a> 
                                    for the full story</p>
                                    
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
                                        <!-- PUT NEWS HERE -->

                                        <li>Burnsiders - if you have been waiting for your annual bath, good news!  The troughs were refilled  on 6<sup>th</sup> April
                                                                                
                                        <a href="calendar.php?select=10 Apr 2019"><li>
                                            Society AGM - 10th April 2019, St Martin's Hall, 7:30pm
                                        </li></a>

                                        <a href="calendar.php?select=28 Apr 2019"><li>
                                            Society store grand re-opening for 2019, Sunday 28<sup>th</sup> April, start at 10am.
                                        </li></a>
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

                                        <li><a href="recipes/quince.php">
                                            <span  style="color: #404040;">
                                                A recipe for quince paste (a little bit more than "take one quince and beat it to a pulp").</i>
                                            </span>
                                        </a></li>

                                        <br>
                                    
                                        <li><a href="https://www.baracambridge.org/" target="bara">
                                            <span  style="color: #404040;">
                                                We welcome members of Birdwood Area Residents Association to our web site <!--i class="fa fa-star fa-glow"--></i>
                                            </span>
                                        </a></li>
                                        
                                        <!--br>
                                        
                                        <li><a href="tips/tomato-blight.php" style="color: #404040;">
                                            Tomato blight and what one fed up plot holder is doing about it...
                                        </a></li>
                                        
                                        <br>
                                        
                                        <li><a href="links.php" style="color: #404040;">
                                            A reminder of a popular item last year about Blight Watch.
                                        </a></li-->

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
