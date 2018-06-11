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

    <title>Burnside and Vinery: Post a notice</title>

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
            var doIt = true, mfields = ['name', 'email', 'type', 'site', 'notice'], fields = ['contact'], field, i, 
                msg = document.getElementById('message'), url = 'noticemail.php', delim = '?', fname, button = document.getElementById('submitbutton');
            
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
                console.log(url);
                $.ajax({
                    type: "GET",
                    url: url,
                    data: ''
                });
                
                $(msg).html('Thank you for your notice.  You will receive an email shortly confirming the details.');
            }
            else {
                $(msg).addClass('text-danger');
                $(msg).html('Please make sure you have completed all mandatory fields.');
            }
        };
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
				<h3>Notice</h3>
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
	 			<h4>Offers and Needs</h4>
	 			<div class="hline"></div>
		 			<p>If you would like to post a notice to our noticeboard, please complete the form below and click <b>Send</b>.</p>
		 			<p>You can offer something, ask for something you want, or just post a general notice of interest to the Society. 
		 			We will let you know when your notice is going to appear.  Notices will stay on the noticeboard for 1 month, unless you email 
		 			the <a href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a>.  Please let us know as soon as a notice is no longer valid.</p>
		 			<p><b>NB</b> The Society does not take any responsibility for any agreements entered into.</p>
		 			<p>Fields highlighed with <span style="color: red">*</span> are mandatory.</p>
		 			<span role="form">
					  <div class="form-group required">
					    <label for="name">Your Name</label>
					    <input type="text" class="form-control" id="name" placeholder="Your name">
					  </div>
					  <div class="form-group required">
					    <label for="email">Your registered email address</label>
					    <input type="email" class="form-control" id="email" placeholder="The email address you have registered with the society">
					  </div>
					  <div class="form-group required">
					    <label for="type">Type of notice</label>
					    <select id="type" class="form-control">
                                                <option value="">Choose the type of notice</option>
                                                <option value="Offered">Offered</option>
                                                <option value="Wanted">Wanted</option>
                                                <option value="General">General</option>
					    </select>
					  </div>
					  <div class="form-group required">
					    <label for="site">Site</label>
					    <select id="site" class="form-control">
                                                <option value="">Choose which site the notice applies to</option>
                                                <option value="Burnside">Burnside</option>
                                                <option value="Vinery Road">Vinery Road</option>
                                                <option value="Both sites">Both</option>
					    </select>
					  </div>
					  <div class="form-group required">
					  	<label for="experience">Your notice</label>
					  	<textarea class="form-control" id="notice" rows="3" placeholder="Your notice"></textarea>
					  </div>
					  <div class="form-group">
					  	<label for="details">Contact details - if appropriate</label>
					  	<textarea class="form-control" id="contact" rows="3" placeholder="How should people contact you"></textarea>
					  </div>
					  <button id="submitbutton" onclick="mail();" class="btn btn-theme">Send</button>
					  <br>
					  <br>
					  <h4 id="message"></h4>
					  <br>
					</span>
			</div><! --/col-lg-8 -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->
	 
	 

	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "footer_snippet.html" ?>

  </body>
</html>
