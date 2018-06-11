<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Useful information about Burnside and Vinery Road allotments, South Cambridge.  Rules, regulations, minutes, news, tips.">
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
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
   
        <script>
            function showAGM() {
                var s = document.getElementById('agm').value;
                window.open(s, 'agm');
            }
        </script>
  </head>

  <body onload="">

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
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12"><h3>At a glance</h3></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default" style="border: none; box-shadow: 0px 0px 0px;">
                        <div class="panel-heading text-center"><h4><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;News</h4></div>
                        <div class="panel-body">
                            <ul>
                            
                                <li><span style="color: black; font-weight: bold;">
                                    Burnside Burn Bin, Saturday 02 June 2018 - 10:00 to 14:00
                                </span></li>
                                
                                <br>
                                
                                <li><a href="community/diabetesuk.php">
                                    <span style="color: darkred">
                                        Tina from Burnside has been doing her bit for Diabetes UK and now she would like your help...
                                    </span>
                                </a></li>
                                
                                <br>
                                
                                <li><span onclick="document.querySelector('#gdpr').scrollIntoView({ behavior: 'smooth'});" style="cursor: pointer; color: #404040;">
                                    GDPR - what it's all about
                                </span></li>
                                
                                <br>
                                
                                <li><a href="tips/tomato-blight.php" style="color: #404040;">
                                    Tomato blight and what one fed up plot holder is doing about it...
                                </a></li>
                                
                                <br>
                                
                                <li><a href="links.php" style="color: #404040;">
                                    A reminder of a popular item last year about Blight Watch.
                                </a></li>
                            </ul>
                        </div>
                    </div>                    
                </div>
                
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default" style="border: none; box-shadow: 0px 0px 0px;">
                        <div class="panel-heading text-center"><h4>About us</h4></div>
                        <div class="panel-body">
                            <ul>

                                <li><a href="store.php" style="color: #404040;">
                                    The Society's store is open for 2018. Drop by for a bargain, a cuppa and a chat.
                                </a></li>
                            
                                <br>
                                
                                <li><a href="notices.php" style="color: #404040;">
                                    Take a look at our new noticeboard.<br><b>1 offer</b>
                                </a></li>
                                
                                <br>
                                
                                <li><a href="links.php" style="color: #404040;">
                                    Visit our links page for a new site with lots of exciting ideas for getting children involved in gardening.  A new beginner's guide has been added recently.
                                </a></li>
                                
                                <br>
                                
                                <li><a href="twitter.php" style="color: #404040;">
                                    See what we are saying on Twitter <i>@burnvine</i>
                                </a></li>
                                
                                <br>
                                
                                <li><span onclick="document.querySelector('#rules').scrollIntoView({ behavior: 'smooth'});" style="cursor: pointer; color: #404040;">
                                    Current Allotment Rules
                                </span></li>
                            </ul>
                        </div>
                    </div>  
                </div>

            </div>
            
            <div class="row">
                <div class="col-xs-12"><hr></div>
            </div>            
            
            <div class="row">
                <div class="col-xs-12"><h3>Documents</h3></div>
            </div>
            <div class="row">
                <div id="gdpr" class="col-xs-3 mtop">GDPR<br>
                    <button class="btn btn-xs btn-primary"><a href="assets/docs/Burnside and Vinery Allotments GDPR.pdf" target="doc">PDF</a></button>
                </div>
                <div id="rules" class="col-xs-3 mtop">Rules<br>
                    <button class="btn btn-xs btn-primary"><a href="assets/docs/Allotment Rules.pdf" target="doc">PDF</a></button>
                </div>
                <div class="col-xs-3 mtop">Constitution<br>
                    <button class="btn btn-xs btn-primary"><a href="assets/docs/Constitution_15-10-2015.pdf" target="doc">PDF</a></button>
                </div>
                <div class="col-xs-3 mtop">Burnside Burn-bin<br>
                    <button class="btn btn-xs btn-primary"><a href="assets/docs/BurnBin.pdf" target="doc">PDF</a></button>
                </div>
                <div class="col-xs-3 mtop">AGM Minutes<br>
                    <select class="form-control inline" id="agm" style="width: auto; display: inline-block;">
                        <option value="assets/docs/2017 AGM.pdf" selected>2017</option>
                        <option value="assets/docs/2016 AGM.pdf">2016</option>
                    </select>&nbsp;
                    <button class="btn btn-xs btn-primary inline" onclick="showAGM();">PDF</button>
                </div>

                <div class="col-xs-3 mtop">TJ Kids @ Vinery<br>
                    <button class="btn btn-xs btn-primary"><a href="assets/docs/TJKids.pdf" target="doc">PDF</a></button>
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
