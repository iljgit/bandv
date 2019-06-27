<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Picture galleries from the last year for Burnside and Vinery Road Allotments.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>Gallery: Burnside and Vinery Road Allotments, South Cambridge</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/assets/css/blueimp-gallery.min.css">

    <!-- Custom styles for this template -->
    <style>
        <?php
            $page = file_get_contents('assets/css/style.css');
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

    <script>
        <?php
            function endsWith( $str, $sub ) {
                return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
            }

            $op = '';
            $garray = array(
                array(
                    'dir' => '/assets/img/gallery/orchardsummer2019',
                    'title' => 'Burnside Orchard, Summer 2019'
                ),

                array(
                    'dir' => '/assets/img/gallery/summer01062019',
                    'title' => '1<sup>st</sup> Day of Summer 2019'
                ),

                array(
                    'dir' => '/assets/img/plant-swap-2019',
                    'title' => 'Society Plant Swap 2019'
                ),

                array(
                    'dir' => '/assets/img/burnsideorchard19',
                    'title' => 'Burnside Orchard 2019'
                ),

                array(
                    'dir' => '/assets/img/bvdayapr2019',
                    'title' => 'Burnside Volunteering Day - April 2019'
                ),

                array(
                    'dir' => '/assets/img/trevor-taylor-dedication',
                    'title' => 'Trevor Taylor Pavilion Re-dedication - March 2019'
                ),

                array(
                    'dir' => '/assets/img/vineryburnnov18',
                    'title' => 'Vinery Burnbin 2018 - November 2018'
                ),

                array(
                    'dir' => '/assets/img/bvdoct18',
                    'title' => 'Burnside Volunteering Day - October 2018'
                ),

                array(
                    'dir' => '/assets/img/bvdaysep2018',
                    'title' => 'Burnside Volunteering Day - September 2018'
                ),

                array(
                    'dir' => '/assets/img/flytheflag',
                    'title' => 'Burnside "Fly the Flag" - September 2018'
                ),

                array(
                    'dir' => '/assets/img/vinery2018',
                    'title' => 'Vinery Summer Party - 2018'
                ),

                array(
                    'dir' => '/assets/img/bparty2018',
                    'title' => 'Burnside Summer Party - 2018'
                ),

                array(
                    'dir' => '/assets/img/bvd201803',
                    'title' => 'Burnside Volunteering Day - March 2018'
                ),

                array(
                    'dir' => '/assets/img/tday',
                    'title' => 'Burnside Toilet Official Opening - 2017'
                ),

                array(
                    'dir' => '/assets/img/toilet',
                    'title' => 'Burnside Toilet Building Works - 2017'
                ),

                array(
                    'dir' => '/assets/img/burnbin201711',
                    'title' => 'Burnside Burn Bin - November 2017'
                ),

                array(
                    'dir' => '/assets/img/burnsideleak',
                    'title' => 'Burnside Water Leak'
                ),

                array(
                    'dir' => '/assets/img/gallery/burnsideaug17',
                    'title' => 'Burnside Volunteering Day - August 2017'
                ),

                array(
                    'dir' => '/assets/img/compost2017',
                    'title' => 'Burnside Compost Delivery - 2017'
                ),

                array(
                    'dir' => '/assets/img/BBQ2017',
                    'title' => 'Society Summer Party - 2017'
                ),

                array(
                    'dir' => '/assets/img/bvdapr2017',
                    'title' => 'Burnside Volunteering Day - April 2017'
                ),

                array(
                    'dir' => '/assets/img/vdaymar17',
                    'title' => 'Burnside Volunteering Day - March 2017'
                ),

                array(
                    'dir' => '/assets/img/gallery/sp2016',
                    'title' => 'Society Summer Party - 2016'
                ),

                array(
                    'dir' => '/assets/img/gallery/vd2016',
                    'title' => 'Burnside Volunteering Day - 2016'
                )
            );

            $count = 0;
            foreach ($garray as $g) {
                $count += 1;
                $op .= "<div class='panel panel-default'>
                            <div class='panel-heading'>
                                <h4 class='panel-title'>
                                    <a data-toggle='collapse' data-parent='#accordion' href='#collapse$count'>
                                    ${g['title']}</a>
                                </h4>
                            </div>
                            <div id='collapse$count' class='panel-collapse collapse'>
                                <div class='panel-body'>
                                    <div id='links' name='links'>";

                $path = getcwd() . $g['dir'] . '/';
                $files = array_diff(scandir($path), array('.', '..'));

                foreach ($files as $f) {
                    $file = $path . $f;
                    
                    if (is_file($file) && endsWith($file, '.jpg') && strpos($file, '_tn.jpg') == false) {
                        $file = $g['dir'] .'/' . $f;
                        $t = $g['dir'] . '/' . str_replace('.jpg', '_tn.jpg', $f);
                        $op .= "<a href='$file'>
                                    <img class='gallery-thumbnail img-responsive img-thumbnail' src='$t' alt=''>
                                </a>";
                    }
                }

                $op .= "            </div>
                                </div>
                            </div>
                        </div>";
            }

        ?>

    </script>
    
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php include "menu_snippet.html" ?>
    
	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>GALLERY</h3>
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
                    <div class="panel-group" id="accordion">

                        <?php echo($op); ?>
                    
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
	 
	
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "footer_snippet.html" ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<!--script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script-->
        <script src="assets/js/blueimp-gallery.min.js"></script>

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
