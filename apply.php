<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rent a quarter, half or full-sized plot on the Burnside or Vinery plots in South Cambridgeshire.  Contact us for more information.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Apply for an allotment - Burnside & Vinery</title>

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
            var doIt = true, mfields = ['name', 'email', 'tel', 'experience', 'postcode'], fields = ['site', 'details', 'tel2', 'address'], field, i, 
                msg = document.getElementById('message'), url = 'mail.php', delim = '?', fname, button = document.getElementById('submitbutton');
            
            if ($(button).hasClass('disabled')) {
                return;
            }
            
            // check for any missing fields
            for (i = 0; i < mfields.length; i++) {
                field = '#' + mfields[i];
                fname = mfields[i];
                if ($(field).val().trim().length === 0) {
                    $(field).parent().addClass('has-error');
                    doIt = false;
                }
                else {
                    $(field).parent().removeClass('has-error');
                    url += delim + fname + '=' + encodeURIComponent($(field).val().trim());
                    delim = '&';
                }
            }
            
            // can we send it
            if (doIt) {
                // add in the other fields
                for (i = 0; i < fields.length; i++) {
                    field = '#' + fields[i];
                    fname = fields[i];
                    $(field).parent().removeClass('has-error');
                    url += delim + fname + '=' + encodeURIComponent($(field).val().trim());
                    delim = '&';
                }
                
                $(button).addClass('disabled');
                PFModal.showStaticPopup({type: 'applicationok'});
                $.ajax({
                    type: "GET",
                    url: url,
                    data: ''
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
				<h1>APPLY FOR A PLOT</h1>
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
	 			<h4>Contact us if you would like to know more about renting</h4>
	 			<div class="hline"></div>
         <div class="large-text" style="margin-top: 10px; margin-bottom: 10px; width: 100%; border: 1px solid blue; border-radius: 5px; background: rgba(0, 0, 255, 0.2); padding:10px;">
         Both sites, Vinery Road and Burnside, are currently fully let. You are welcome to apply and join either or both sites' waiting list. 
         However, new applicants are very unlikely to be offered a plot within the next 12 months. 
         </div>
         <br>
		 			<p class="large-text">If you are interested in renting a plot please complete the following form and we will be in touch as soon as we can.</p>
		 			<p class="large-text">Fields highlighed with <span style="color: red">*</span> are mandatory.</p>
		 			<span role="form">
					  <div class="form-group required">
					    <label for="name">Your Name</label>
					    <input type="text" class="form-control" id="name" placeholder="Your name">
					  </div>
					  <div class="form-group required">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" id="email" placeholder="Your email address">
					  </div>
					  <div class="form-group">
					    <label for="address">Address</label>
					    <textarea class="form-control" id="address" placeholder="Your address" rows="5"></textarea>
					  </div>
					  <div class="form-group required">
					    <label for="postcode">Postcode</label>
					    <input type="postcode" class="form-control" id="postcode" placeholder="Your postcode">
					  </div>
					  <div class="form-group required">
					    <label for="tel">Telephone</label>
					    <input type="telephone" class="form-control" id="tel" placeholder="Your telephone number">
					  </div>
					  <div class="form-group">
					    <label for="tel2">Alternative telephone</label>
					    <input type="telephone" class="form-control" id="tel2" placeholder="Alternative telephone number">
					  </div>
					  <div class="form-group required">
					    <label for="site">Site</label>
					    <select id="site" class="form-control">
                                                <option value="Burnside">Burnside</option>
                                                <option value="Vinery Road">Vinery Road</option>
                                                <option value="Either site">Either site</option>
					    </select>
					  </div>
					  <div class="form-group required">
					  	<label for="experience">Brief description of your allotment experience</label>
					  	<textarea class="form-control" id="experience" rows="3" placeholder="Your previous experience"></textarea>
					  </div>
					  <div class="form-group">
					  	<label for="details">Other details</label>
					  	<textarea class="form-control" id="details" rows="3" placeholder="Any other details"></textarea>
					  </div>
					  <button id="submitbutton" onclick="mail();" class="btn btn-theme">Submit</button>
					  <br>
					  <br>
					  <h4 id="message"></h4>
					  <br>
					</span>
			</div><! --/col-lg-8 -->
	 		
	 		<div class="col-xs-12 col-md-4">
		 		<h4>Our registered address</h4>
		 		<div class="hline"></div>
		 			<p class="large-text">
                            The Vinery Road Permanent Allotment Society<br>
92 Coleridge Road<br>Cambridge<br>CB1 3PJ
                            </
	 		</div>
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
			  <p class="large-text">Some text in the modal.</p>
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
