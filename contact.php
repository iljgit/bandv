<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
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
    <body onload="BandV.onload(); PFModal.init();">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/contact/header.jpg);">
            <h1 id="title"><span class="title-background">Contact Us</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

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
					  <button id="submitbutton" onclick="mail();" class="btn btn-success">Submit</button>
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
92 Coleridge Road<br>Cambridge<br>CB1 3PJ<br><br>Email: webmaster @ burnsideandvineryallotments.org
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
            <h4 class="modal-title" id="popupheadercontent">Modal Header</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body" id="popupbody">
            <p class="large-text">Some text in the modal.</p>
          </div>
          <div class="modal-footer" id="popupfooter">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      
      </div>
	  </div>
	</div>
	
	<div class="modal-backdrop fade in" style="display: none;"></div>

	     

         <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php" ?>
     </body>
 </html>