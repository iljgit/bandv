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
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Burnside and Vinery</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/pf_modal.js"></script>

    <!-- Custom styles for this template -->
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
    
    <script src="assets/js/modernizr.js"></script>
    
    <script>
        function mail() {
            var doIt = true, mfields = ['email', 'message'], fields = [], field, i, val, data = {},
                msg = document.getElementById('message'), url = 'mailout.php', delim = '?', fname, button = document.getElementById('submitbutton');
            
            if ($(button).hasClass('disabled')) {
                return;
            }

            field = '#message';
            val = $(field).val().trim();
            if (val.length === 0) {
                $(field).parent().addClass('has-error');
                doIt = false;
            }
            else {
              $(field).parent().removeClass('has-error');
              data.message = val;
            }

            field = '#password';
            val = $(field).val().trim();
            if (val.length === 0) {
                $(field).parent().addClass('has-error');
                doIt = false;
            }
            else {
              $(field).parent().removeClass('has-error');
              data.password = val;
            }

            field = '#email';
            val = $(field).val().trim();
            if (val.length === 0) {
                $(field).parent().addClass('has-error');
                doIt = false;
            }
            else {
              // make sure we get a comma-separated list
              val = val.split('\n');
              val =val.join(',');
              $(field).parent().removeClass('has-error');
              data.email = val;
            }
            
            // can we send it
            if (doIt) {
                // add in the other fields
                for (i = 0; i < fields.length; i++) {
                    field = '#' + fields[i];
                    fname = fields[i];
                    $(field).parent().removeClass('has-error');
                    data[fname] = $(field).val().trim();
                }
                
                $(button).addClass('disabled');
                //PFModal.showStaticPopup({type: 'applicationok'});
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    complete: function(xhr, text) {console.log(xhr, text); $(button).removeClass('disabled');}
                });
            }
            else {
                PFModal.showStaticPopup({type: 'applicationfail'});
                $(msg).addClass('text-danger');
            }
        };
    </script>
  </head>

  <body onload="PFModal.init();">

    <!-- Fixed navbar -->
    <?php include "menu_snippet.html" ?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>MAILSHOT</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 CONTACT WRAP
	 ***************************************************************************************************************** -->
	 
	<!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->

	 <div class="container">
	 	<div class="row">
	 		<div class="col-xs-12 col-md-8">
	 			<h4>Mailing out</h4>
	 			<div class="hline"></div>
		 			<p>Use this form to mail out to a list of addresses.  Addresses will be emailed individually.</p>
		 			<span role="form">
					  <div class="form-group required">
					    <label for="password">Password</label>
					    <input rows="20" class="form-control" id="password" placeholder="Password">
					  </div>
            <div class="form-group required">
					    <label for="email">Email addresses</label>
					    <textarea rows="20" type="email" class="form-control" id="email" placeholder="Comma-separated and / or new-line separated mail addresses"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="address">Message</label>
					    <textarea class="form-control" id="message" placeholder="Body of message" rows="20"></textarea>
					  </div>
					  
					  <button id="submitbutton" onclick="mail();" class="btn btn-success">Submit</button>
					  <br>
					  <br>
					  <h4 id="message"></h4>
					  <br>
					</span>
			</div><! --/col-lg-8 -->
	 	</div><! --/row -->
	 </div><! --/container -->
	 
	 <!-- MODAL -->
	 <div class="container">
            <div class="modal fade" id="modaldialogue" role="dialog">
                <div class="modal-dialog">		  
                    <div class="modal-content">
                            <div class="modal-header">
                                <button id="modalcross" type="button" class="close" data-dismiss="modal" style="color: red; opacity: 0.5;">×</button>
                                <h4 class="modal-title" id="modaltitle">Modal Header</h4>
                            </div>
                            <div class="modal-body" id="modalbody">
                            </div>
                            <div class="modal-footer" id="modalfooter">
                                <div class="row">
                                        <div class="col-xs-3">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="modalbutton1">Close</button>
                                        </div>
                                        <!--div class="col-xs-1">&nbsp;</div-->
                                        <div class="col-xs-3">
                                                <button type="button" class="btn btn-default center-block" data-dismiss="modal" id="modalbutton2">Close</button>
                                        </div>
                                        <!--div class="col-xs-1">&nbsp;</div-->
                                        <div class="col-xs-3">
                                                <button type="button" class="btn btn-default center-block" data-dismiss="modal" id="modalbutton3">Close</button>
                                        </div>
                                        <!--div class="col-xs-1">&nbsp;</div-->
                                        <div class="col-xs-3">
                                                <button type="button" class="btn btn-default pull-right" data-dismiss="modal" id="modalbutton4">Close</button>
                                        </div>
                                </div>
                            </div>
                    </div>			
                </div>
            </div>
	</div>
	
	<!-- MODAL POPUP -->
	<div class="container">
	  <div class="modal fade" id="popupdialogue" role="dialog">
		<div class="modal-dialog">
	  
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header" id="popupheader">
			  <button type="button" class="close" data-dismiss="modal">×</button>
			  <h4 class="modal-title" id="popupheadercontent">Modal Header</h4>
			</div>
			<div class="modal-body" id="popupbody">
			  <p>Some text in the modal.</p>
			</div>
			<div class="modal-footer" id="popupfooter">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
	  
		</div>
	  </div>
	</div>
	
	<div class="modal-backdrop fade in" style="display: none;"></div>


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "footer_snippet.html" ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script-->


  </body>
</html>
