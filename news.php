<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="All the latest news about what is going on in and around the Burnside and Vinery Rd sites. Reports of events, gatherings and general chit-chat.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="Expires" CONTENT="-100000">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Latest news – Burnside & Vinery</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    
    <!-- Include files -->
    <script>
        <?php
            function endsWith( $str, $sub ) {
                return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
            }

            $op = 'let newsImages = {';
            $garray = array(
                array(
                    'dir' => '/assets/img/bquiz2019',
                    'id' => '44'
                ),
                array(
                    'dir' => '/assets/img/bvdayapr2019',
                    'id' => '41'
                )/*,
                array(
                    'dir' => '/assets/img/plant-swap-2019',
                    'id' => '43'
                )*/
            );

            $delim1 = "";
            foreach ($garray as $g) {
                $id = $g['id'];
                $op .= "$delim1'$id': [";

                $path = getcwd() . $g['dir'] . '/';
                $files = array_diff(scandir($path), array('.', '..'));
                $delim2 = "";

                foreach ($files as $f) {
                    $file = $path . $f;

                    if (is_file($file) && endsWith($file, '.jpg') && strpos($file, '_tn.jpg') == false) {
                        $file = $g['dir'] .'/' . $f;
                        $file = str_replace('.jpg', '', $file);
                        $op .= $delim2 . "{prefix: '$file', src: ''}";
                        $delim2 = ",";
                    }
                }

                $op .= "]";
                $delim1 = ",";
            }

            $op .= "};";

            echo($op);

        ?>

    </script>


    <script>
        <?php
            $page = file_get_contents('assets/js/news2.js');
            echo $page;
        ?>
    </script>

    <!-- Custom styles for this template -->
    <!--link href="assets/css/style.css" rel="stylesheet"-->
    <style>
        <?php
            $page = file_get_contents('assets/css/style.css');
            echo $page;
        ?>
    </style>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css">
    
    <?php
        $url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}/{$_SERVER['REQUEST_URI']}";
        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $params);
        
        $op = '<script>var urlparams = {';
        foreach ($params as $key => $value) {
            $op .= '"' . $key . '": "' . $value . '", ';
        }
        $op .= '};</script>';
        
        echo($op);
    ?>

    <script>
        function select() {
            var $tgt, $cur;
            
            // do we want to select something
            if (urlparams.select) {
                // does it exist
                $tgt = $('#collapse' + urlparams.select);
                if ($tgt) {
                    // find the current expanded element
                    $cur = $('.collapse.in');
                    
                    if ($cur) {
                        $cur.removeClass('in');
                    }
                    
                    $tgt.addClass('in');
                }
            }
        }
    </script>
    
  </head>

  <body onload="news.getAll(); select();" type="news">

    <!-- Fixed navbar -->
    <?php include "menu_snippet.html" ?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h1>NEWS</h1>
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
                    <p class="large-text">If you have anything you would like to have added as news, send an email to <a href="mailto:webmaster@burnsideandvineryallotments.org">webmaster@burnsideandvineryallotments.org</a><br><br></p>
                </div>
            </div>
                
            <div class="row">
                <div class="col-xs-12">
                    
<div class="panel-group" id="accordion">

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
	<script src="assets/js/blueimp-gallery.min.js"></script>


  </body>
</html>
