<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Burnside and Vinery Road Allotments Society, South Cambridge, is run by a single committee.  The two, thriving sites provide a friendly, well-run environment for new allotment holders and seasoned hands alike.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    
    <link rel="shortcut icon" href="favicon.ico"> 

    <title>Burnside and Vinery Allotments: Cambridge UK</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    
    <script src="assets/js/bootstrap.min.js"></script>
    <!--script src="assets/js/events.js?rnd=<?php echo(rand()); ?>"></script>
    <script src="assets/js/news2.js?rnd=<?php echo(rand()); ?>"></script-->
    <script>
        <?php
            $page = file_get_contents('assets/js/events.js');
            echo $page;
        ?>
    </script>
    <script>
        <?php
            $page = file_get_contents('assets/js/news2.js');
            echo $page;
        ?>
    </script>

    <!-- Custom styles for this template -->
    <!--link href="assets/css/style.css?rnd=<?php echo(rand()); ?>" rel="stylesheet"-->
    <style>
        <?php
            $page = file_get_contents('assets/css/style.css');
            echo $page;
        ?>
    </style>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body class="index-page" onload="">

    <!-- Fixed navbar -->
    <?php include "menu_snippet.html" ?>


	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->

	<div id="blueish">
	    <div class="container">
			<div class="row">
				<!--h3>HOME</h3-->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 ***************************************************************************************************************** -->
	 <div id="service">
	 	<div class="container large-text">
                                
                    <div class="row">
                        <div class="col-xs-12">
                                <h2>Welcome to our web site</h2>
                                <h7>
                                    <i>
                                        Society members might want to jump straight to the <a href="members.php"><b>Members</b></a> page to see what is going on in our Society.
                                    </i>
                                </h7>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            &nbsp;
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img src="assets/img/cake.jpg" class="img-responsive img-rounded" style="width: 100%;"/>
                            <p class="text-right"><i>Joan - Burnside</i></p>
                        </div>
                        <div class="col-sm-12 col-md-6">
                                <p>Our two allotment sites, Burnside and Vinery Road, are both in the Romsey Town area of south Cambridge. They are run jointly by a single committee. Both sites have full and half plots, although new tenants are now only allotted half plots in the first instance. There are also some quarter plots at Vinery Road.</p>
                                <p>
                                Both sites are actively managed and boast facilities including running water and toilets on-site.  There is a store which provides 
                                discounted allotment goods from spring to autumn. The allotment holders are a genuinely friendly bunch (what else would you expect from garden enthusiasts?) and you can always find someone ready to offer advice or help.
                                </p>
                                <p>
                                The Society supports a variety of community causes through the provision of plots and facilities.
                                </p>
                                <p>See the separate <a href="burnside.php">Burnside</a> and <a href="vinery.php">Vinery</a> pages for further details about the two sites.</p>                                
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            &nbsp;
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Plots</h2>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img src="assets/img/blossom19.jpg" class="img-responsive img-rounded" style="width: 100%"/>
                            <p class="text-right"><i>Joan - Burnside</i></p>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <p>A full plot is approximately 50 metres by 5 metres; a half plot is approximately 25 metres by 5 metres.</p>
                            <p>Annual rents are as follows: 
                            <ul><li>Full plot: £30</li><li>Half plot: £15.</li></ul> There is also an annual fee of £5 payable for membership of the Society. </p>
                            <p>If you would like to apply for a plot, click on the <b>Apply</b> button below.</p>
                            <p><a href="apply.php" class="btn btn-success">Apply</a></p>
                        </div>
                    </div>
                </div>
	 		
                            
	 	</div><!--/container -->
	 </div><!--/service -->
	 
	
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "footer_snippet.html" ?>
	 
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
	<!--script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/custom.js"></script-->


  </body>
</html>
