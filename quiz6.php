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
                let quizid = "quiz6";

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
                    PFModal.showStaticPopup({type: 'quizok', date: '10 May 2020'});
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
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/quiz/bottomheader.jpg);">
            <h1 id="title"><span class="title-background">Quiz #6</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <h2>Famous bottoms</h2>
                    <p>We all have one, but do we really appreciate it?  How well do we know it?  This quiz doesn't answer either of those two questions.</p>
          <p>Two points per question.  
                    Please don't look the answers up on the internet - pretty please.</p>
                    <p class="current-quiz">You can send us your answers (fill in your name, and press <i>Submit</i>) if you would like to be included in our wall of fame / shame.</p>
                    <p class="current-quiz">The closing date is the 10<sup>th</sup> May.</p>
                    <p class="past-quiz">The closing date has now passed.  If you would like to see the answers, press&nbsp;&nbsp;<button class="btn btn-info" onclick="reveal();">Reveal</button></p>
                    <p class="past-quiz">Well done to <b></b> - this week's winner.</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 1.</h5>
                    <p>
                    We all know that this is Andy Murray.  But what does he have to do specifically with bottoms and when?                    
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/1.jpg" alt="Question 1" title="Question 1"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer1" placeholder="Answer to question 1" rows="2" required></textarea>
                    <p class="answer">Answer 1</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 2.</h5>
                    <p>
                    These two actors were the main characters in “Bottom”.  Give the <b>character</b> names.
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/2.jpg" alt="Question 2" title="Question 2"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer2" placeholder="Answer to question 2" rows="2" required></textarea>
                    <p class="answer">Answer 2</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 3.</h5>
                    <p>
                    Name the Shakespearean play and the <b>actor</b>.
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/3.jpg" alt="Question 3" title="Question 3"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer3" placeholder="Answer to question 3" rows="2" required></textarea>
                    <p class="answer">Answer 3</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 4.</h5>
                    <p>
                    This is the bottom of which Famous Italian building and where is it?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/4.jpg" alt="Question 4" title="Question 4"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer4" placeholder="Answer to question 4" rows="2" required></textarea>
                    <p class="answer">Answer 4</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 5.</h5>
                    <p>
                    Name the Father Ted <b>actor</b> and what was his bottom-related catchphrase?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/5.jpg" alt="Question 5" title="Question 5"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer5" placeholder="Answer to question 5" rows="2" required></textarea>
                    <p class="answer">Answer 5</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 6.</h5>
                    <p>
                    Name two of the main three muscles of the bottom.
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/6.jpg" alt="Question 6" title="Question 6"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer6" placeholder="Answer to question 6" rows="2" required></textarea>
                    <p class="answer">Answer 6</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 7.</h5>
                    <p>
                    Give the birth name of the singer and the song that was on the A side of Fat Bottomed Girls.
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/7.jpg" alt="Question 7" title="Question 7"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer7" placeholder="Answer to question 7" rows="2" required></textarea>
                    <p class="answer">Answer 7</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 8.</h5>
                    <p>
                    In the 2005 – 2006 season, this Premier League football club finished  bottom with a total of just 15 points.  Name the club and manager.
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/8.jpg" alt="Question 8" title="Question 8"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer8" placeholder="Answer to question 8" rows="2" required></textarea>
                    <p class="answer">Answer 8</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 9.</h5>
                    <p>
                    Name this famous venue just a little way outside Cambridge.  And why is the village it is in called what it is?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/9.jpg" alt="Question 9" title="Question 9"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer9" placeholder="Answer to question 9" rows="2" required></textarea>
                    <p class="answer">Answer 9</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 10.</h5>
                    <p>
                    No-one of a certain age can have grown up without at least seeing this poster, even if they didn't own a copy.  Name the poster company and the woman.
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz6/10.jpg" alt="Question 10" title="Question 10"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer10" placeholder="Answer to question 10" rows="2" required></textarea>
                    <p class="answer">Answer 10</p>
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