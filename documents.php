<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Useful documents Burnside and Vinery Road Allotment Society">
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
				<h3>DOCUMENTS</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 BODY
	 ***************************************************************************************************************** -->

	 <div class="container">            
            <div class="row">
                <div id="gdpr" class="col-xs-12 mtop">
                    <table style="border-spacing: 10px; border-collapse: separate;">
                        <tr>
                            <td>
                                <span id="gdpr">GDPR</span>
                            </td>
                            <td>
                                <a href="assets/docs/Burnside and Vinery Allotments GDPR.pdf" target="doc">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                            </td>
                        </tr>
                        
                        <tr style="padding-top:20px;">
                            <td>
                                Rules
                            </td>
                            <td>
                                <a href="assets/docs/Allotment Rules.pdf" target="doc">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                Constitution
                            </td>
                            <td>
                                <a href="assets/docs/Constitution_15-10-2015.pdf" target="doc">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                Burnside Burn-bin
                            </td>
                            <td>
                                <a href="assets/docs/BurnBin.pdf" target="doc">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                AGM Minutes
                            </td>
                            <td>
                                <select class="form-control inline" id="agm" style="width: auto; display: inline-block;">
                                    <option value="assets/docs/2018 AGM.pdf" selected>2018</option>
                                    <option value="assets/docs/2017 AGM.pdf">2017</option>
                                    <option value="assets/docs/2016 AGM.pdf">2016</option>
                                </select>&nbsp;
                                <button class="btn btn-xs btn-primary inline" onclick="showAGM();">PDF</button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                TJ Kids @ Vinery 
                            </td>
                            <td>
                                <a href="assets/docs/TJKids.pdf" target="doc">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                            </td>
                        </tr>
                    </table>
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
