<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Burnside and Vinery Road Allotment Society Quiz - Summer 2018">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Burnside and Vinery: Quiz, Summer 2018</title>

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
      function grid() {
        var style, row, col, defs, def, coloureds, coloured, maxR = 10, maxC = 7, tr, td, root;

        root = document.getElementById('quiz2-grid');

        defs = [
          [1, 2 , 3, 4, 5, 6, 7],
          [1, 4, 7],
          [1, 2, 3, 4, 5, 7],
          [1, 4, 7],
          [1, 4, 7],
          [2, 3, 4, 5, 7],
          [4, 7],
          [2, 7],
          [2, 7],
          [1, 2, 3, 4, 5, 6, 7]
        ];

        coloureds = [
          [3, 6],
          [],
          [7],
          [4],
          [1],
          [4],
          [],
          [7],
          [],
          [3]
        ];

        for (row = 0; row < defs.length; row++) {
          def = defs[row];
          coloured = coloureds[row];

          tr = document.createElement('tr');

          for (col = 1; col <= maxC; col++) {
            td = document.createElement('td');
            td.style.height = '20px';
            td.style.width = '20px';
            td.style.padding = '3px';
            if (def.includes(col)) {
              style = coloured.includes(col) ? 'background-color: #c0c0c0; ' : '';
              style = ` style="${style}width:20px;border: 1px solid #a0a0a0; text-align: center;"`;
              td.innerHTML = `<input ${style} type="text" maxlength="1"/>`;
            }
            tr.appendChild(td);
          }

          root.appendChild(tr);
        }
      }
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

  <body onload="PFModal.init(); grid();">

    <!-- Fixed navbar -->
    <?php include "menu_snippet.html" ?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>QUIZ - Summer 2018</h3>
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
	 		<div class="col-xs-12">
	 			<h4>How to play</h4>
	 			<p>Below are 9 allotment-related questions.  You need to find the answers and then fit them 
        into the grid.  If you have done it properly, the letters in the shaded boxes can be re-arranged 
        to make the name of a well-known garden plant.</p>
        <p>When you have filled it all in, send an email to<br>
        &nbsp;&nbsp;&nbsp;<a href="mailto:webmaster@burnsideandvineryallotments.org">webmaster@burnsideandvineryallotments.org</a><br>
        with the subject <i>Summer Quiz</i> and include your name, site and the answer to the plant anagram.</p><p>On the 
        1st September we will choose one successful entrant from each site as the winner.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-5 col-lg-6"><!--questions-->
        <div class="row">
          <div class="col-xs-12">
            <h4>Questions</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p>
            <b>1.</b> This Gardener's World presenter has been off our screens this year because of illness. 
            What is their surname? (2,5)</p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <p><b>2. </b>What is the scientific name for this allotment pest? (5,5)<br>
            <img src="assets/img/quiz2/1.jpg" class="img img-responsive img-thumbnail" style="width: 50%;"/>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <p><b>3. </b>Charles Dowding is well known for this style of gardening. (2,3)</p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <p><b>4. </b>This is an example of what type of plant? (7)<br>
            <img src="assets/img/quiz2/2.jpg" class="img img-responsive img-thumbnail" style="width: 50%;"/>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <p><b>5. </b>This type of tool sounds like something a well-known fictional character might use. (3)</p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <p><b>6. </b>This is an example of what type of plant? (5)<br>
            <img src="assets/img/quiz2/3.jpg" class="img img-responsive img-thumbnail" style="width: 50%;"/>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <p><b>7. </b>A sticky waterlogged soil lacking in oxygen, typically grey to blue in colour. (4)</p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <p><b>8. </b>What is the common name of this plant? (7)<br>
            <img src="assets/img/quiz2/4.jpg" class="img img-responsive img-thumbnail" style="width: 50%;"/>
            </p>
          </div>
        </div>

      </div><!--questions-->

      <div class="col-xs-12 col-md-7 col-lg-6"><!--answers-->
        <div class="row">
          <div class="col-xs-12">
            <h4>Answers</h4>
          </div>
        </div>

        <div class="row"><!--grid-->

          <center><table id="quiz2-grid" style="max-width: 140px; width: 140px; position: relative;" class="pull-center">
            
          </table></center>
        </div><!--grid-->

        <div class="row"><br>
          <h4>Unscrambled plant name</h4><br>
          <p><input type="text" id="answer1" style="width: 90%;"/></p>
        </div>

      </div><!--answers-->
    </div>

	</div><!--container -->
	 
	 
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
