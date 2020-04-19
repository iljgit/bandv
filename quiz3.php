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
                let quizid = "quiz3";

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
                    PFModal.showStaticPopup({type: 'quizok', date: '19 April 2020'});
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
    <body onload="BandV.onload(); PFModal.init();" class="past">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/quiz/header.jpg);">
            <h1 id="title"><span class="title-background">Quiz #3</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <h2>Family Fortunes</h2>
                    <p>Here are 10 questions from Family Fortunes.  If you have never played it before, groups of 100 people are asked for their answers to questions.  
                    We want one answer to each question.  If yours matches the most popular answer you get 2 points.  If it matches one of the next 3 most popular you get 1 point. </p>
                    <p class="current-quiz">You can send us your answers (fill in your name, and press <i>Submit</i>) if you would like to be included in our wall of fame / shame.</p>
                    <p class="current-quiz">The closing date is the 19<sup>th</sup> April.</p>
                    <p class="past-quiz">The closing date, 19<sup>th</sup> April, has now passed.  If you would like to see the answers, press <button class="btn btn-info" onclick="reveal();">Reveal</button></p>
                    <p class="past-quiz">Well done to <b>Ingrid</b> - this week's winner.  And an honourable mention to the Watts family who came a very close second.</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 1.</h5>
                    <p>Name a sign of affection a woman would like to get more often from her partner</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer1" placeholder="Answer to question 1" rows="2" required></textarea>
                    <p class="answer"><b>Kiss</b>, hug, flowers / gift, holding hands</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 2.</h5>
                    <p>Name something that never comes with pockets</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer2" placeholder="Answer to question 2" rows="2" required></textarea>
                    <p class="answer"><b>Underwear</b>, socks, hat, shoes</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 3.</h5>
                    <p>Name something you don’t wash as often as you should</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer3" placeholder="Answer to question 3" rows="2" required></textarea>
                    <p class="answer"><b>Car</b>, hands, hair, sheets</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 4.</h5>
                    <p>Name a place where you DON’T want front row seats</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer4" placeholder="Answer to question 4" rows="2" required></textarea>
                    <p class="answer"><b>Cinema</b>, church, concert, funeral<br><i>Best answer: Bullfight</i></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 5.</h5>
                    <p>Name something a woman puts on to look sexier</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer5" placeholder="Answer to question 5" rows="2" required></textarea>
                    <p class="answer"><b>Perfume</b>, lingerie, make-up, mini-skirt</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 6.</h5>
                    <p>Name something people shake</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer6" placeholder="Answer to question 6" rows="2" required></textarea>
                    <p class="answer"><b>Hands</b>, bottle of milk, salt and pepper, cocktails</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 7.</h5>
                    <p>Name a famous male lover (real or fictional)</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer7" placeholder="Answer to question 7" rows="2" required></textarea>
                    <p class="answer"><b>Rudolf Valetino</b>, Casanova, Romeo, Errol Flynn</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 8.</h5>
                    <p>Name something you do in bed</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer8" placeholder="Answer to question 8" rows="2" required></textarea>
                    <p class="answer"><b>Sleep</b>, make love, read, watch tv<br><i>No-one suggested "make love" - must say something</i></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 9.</h5>
                    <p>Name the first thing to touch your lips each morning</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer9" placeholder="Answer to question 9" rows="2" required></textarea>
                    <p class="answer"><b>Tea / coffee</b>, toothpaste / toothbrush, other lips, cigarette</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 10.</h5>
                    <p>Name something a man should NOT take on his honeymoon</p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer10" placeholder="Answer to question 10" rows="2" required></textarea>
                    <p class="answer"><b>Another woman</b>, mobile phone, parents, laptop<br><i>To the people who suggested "fishing rod" - you need help</p>
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