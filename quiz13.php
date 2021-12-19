<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
        <script>
            // REMEMBER to change the quizid and closing date
            function reveal() {
                if ($('body').hasClass('reveal')) {
                    $('body').removeClass('reveal');
                }
                else {
                    $('body').addClass('reveal');
                }
            }

            function quiz() {
                let doIt = true; 
                let mfields = ['name', 'answer1', 'answer2', 'answer3', 'answer4', 'answer5', 'answer6', 'answer7', 'answer8', 'answer9', 'answer10'];
                let fields = [];
                let field;
                let i; 
                let msg = document.getElementById('message');
                let url = 'quizhandler.php';
                let delim = '&';
                let fname;
                let button = document.getElementById('submitbutton');
                let quizid = "quiz13";

                url += `?quizid=${quizid}`;
                
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
                    PFModal.showStaticPopup({type: 'quizok', date: '28 Dec 2021'});
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
    <body onload="BandV.onload(); PFModal.init();" class="current">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/quiz/quiz13/pageheader.jpg);">
            <h1 id="title"><span class="title-background">Quiz #13</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <h2>Famous Chins</h2>
                    <p>Here are 10 questions about celebrities.  All you have to do is name the person in each picture.  
                        Just to make it a little more of a challenge, I'm not giving you any more help!</p>
                    <p class="current-quiz">You can send us your answers (fill in your name, and press <i>Submit</i>) if you would like to be included in our wall of fame / shame.</p>
                    <p class="current-quiz">The closing date is the 28<sup>th</sup> December.</p>
                    <p class="past-quiz">The closing date has now passed.  If you would like to see the answers, press <button class="btn btn-info" onclick="reveal();">Reveal</button></p>
                    <p class="past-quiz">Well done to the <b>Top Bottoms</b> - this week's winners.  And an honourable mention to Ingrid who was sooooo close.</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 1.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/1.png"  class="img img-thumbnail" alt="Image for question 1" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer1" placeholder="Answer to question 1" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 2.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/2.png"  class="img img-thumbnail" alt="Image for question 2" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer2" placeholder="Answer to question 2" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 3.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/3.png"  class="img img-thumbnail" alt="Image for question 3" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer3" placeholder="Answer to question 3" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 4.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/4.png"  class="img img-thumbnail" alt="Image for question 4" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer4" placeholder="Answer to question 4" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 5.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/5.png"  class="img img-thumbnail" alt="Image for question 5" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer5" placeholder="Answer to question 5" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 6.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/6.png"  class="img img-thumbnail" alt="Image for question 6" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer6" placeholder="Answer to question 6" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 7.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/7.png"  class="img img-thumbnail" alt="Image for question 7" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer7" placeholder="Answer to question 7" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 8.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/8.png"  class="img img-thumbnail" alt="Image for question 8" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer8" placeholder="Answer to question 8" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 9.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/9.png"  class="img img-thumbnail" alt="Image for question 9" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer9" placeholder="Answer to question 9" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 10.</h5>
                    <img style="width:100%;" src="assets/img/quiz/quiz13/10.png"  class="img img-thumbnail" alt="Image for question 10" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer10" placeholder="Answer to question 10" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb current-quiz">
                <div class="col-sm-12 col-md-6">
                    <h5>Your name</h5>
                </div>

                <div class="col-sm-12 col-md-6">
                    <input type="text" class="form-control" id="name" placeholder="Your name" required>
                </div>
            </div>

            <div class="row mb current-quiz">
                <div class="col-12">
                    <button title="Click to submit your answers" id="submitbutton" onclick="quiz();" class="btn btn-success">Submit</button>
                </div>
            </div>
            
        </div><!--container-->

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