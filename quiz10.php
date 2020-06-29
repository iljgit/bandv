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
                let mfields = ['name', 'answer1', 'answer2', 'answer3', 'answer4', 'answer5', 'answer6', 'answer7', 'answer8', 'answer9', 'answer10',
                                'answer11', 'answer12', 'answer13', 'answer14'];
                let fields = [];
                let field;
                let i; 
                let msg = document.getElementById('message');
                let url = 'quizhandler.php';
                let delim = '&';
                let fname;
                let button = document.getElementById('submitbutton');
                let quizid = "quiz10";

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
                    PFModal.showStaticPopup({type: 'quizok', date: '12 Jul 2020'});
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
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/quiz/cambridgeheader.jpg); background-position: top center;">
            <h1 id="title"><span class="title-background">Quiz #10</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <h2>How well do you know Cambridge?</h2>
                    <p>You have probably passed these bits of Cambridge 101 times - but can you remember where they are?</p>
          <p>Two points per question.</p>
                    <p class="current-quiz">You can send us your answers (fill in your name, and press <i>Submit</i>) if you would like to be included in our wall of fame / shame.</p>
                    <p class="current-quiz">The closing date is the 12<sup>th</sup> July.</p>
                    <p class="past-quiz">The closing date, 10<sup>th</sup> Jul, has now passed.  If you would like to see the answers, press&nbsp;&nbsp;<button class="btn btn-info" onclick="reveal();">Reveal</button></p>
                    <p class="past-quiz">Well done to <b></b> - this week's winners and the team currently to beat.</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 1.</h5>
                    <p>
                    There are several of these Dinky Doors around Cambridge.  Which street is this one on, and which University site is it attached to?                    
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/1.jpg" alt="Question 1" title="Question 1"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer1" placeholder="Answer to question 1" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 2.</h5>
                    <p>
                    Maybe a little tricky this one.  Which road is this almost on, and which multinational inhabits the building this statue goes with?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/2.jpg" alt="Question 2" title="Question 2"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer2" placeholder="Answer to question 2" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 3.</h5>
                    <p>
                    This is the top of a larger monument.  Where and what is it?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/3.jpg" alt="Question 3" title="Question 3"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer3" placeholder="Answer to question 3" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 4.</h5>
                    <p>
                    Where is this pineapple and which Cambridge institution occupied the building opposite originally?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/4.jpg" alt="Question 4" title="Question 4"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer4" placeholder="Answer to question 4" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 5.</h5>
                    <p>
                    The late 1700s wasn't a good period for the Hunnybuns.  Which church is now home to the family, and which large shop is nearby?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/5.jpg" alt="Question 5" title="Question 5"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer5" placeholder="Answer to question 5" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 6.</h5>
                    <p>
                    What's the name of this building, and which new piece of transport infrastructure is being built nearby?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/6.jpg" alt="Question 6" title="Question 6"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer6" placeholder="Answer to question 6" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 7.</h5>
                    <p>
                    Where can you find this memorial to a team of dogs, and what does it commemorate?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/7.jpg" alt="Question 7" title="Question 7"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer7" placeholder="Answer to question 7" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 8.</h5>
                    <p>
                    This famous if sadly neglected gate was once a major portal to one of the Colleges.  Which College does it open into, and who was reputed to have used it?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/8.jpg" alt="Question 8" title="Question 8"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer8" placeholder="Answer to question 8" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 9.</h5>
                    <p>
                    There aren't that many hills in Cambridge.  What is this one called and why is called that?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/9.jpg" alt="Question 9" title="Question 9"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer9" placeholder="Answer to question 9" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 10.</h5>
                    <p>
                    A slighly unusual and certainly less attractive view of one of the older Colleges?  Which College and from which street was the shot taken?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/10.jpg" alt="Question 10" title="Question 10"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer10" placeholder="Answer to question 10" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 11.</h5>
                    <p>
                    Which church is in the background and which modern art venue is in the foreground?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/11.jpg" alt="Question 10" title="Question 11"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer11" placeholder="Answer to question 11" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 12.</h5>
                    <p>
                    From one of the older parts of Cambridge to one of the newer.  Where is this building and what is its official name?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/12.jpg" alt="Question 12" title="Question 12"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer12" placeholder="Answer to question 12" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 13.</h5>
                    <p>
                    This is certainly a worrying advert.  Which street is it on and name one of the two shops either side of it?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/13.jpg" alt="Question 13" title="Question 13"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer13" placeholder="Answer to question 13" rows="2" required></textarea>
                    <p class="answer"></p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 14.</h5>
                    <p>
                    Where can you see this large art installation, and what is it called?
                    <br><img class="img img-responsive" style="max-width: 100%;" src="/assets/img/quiz/quiz10/14.jpg" alt="Question 14" title="Question 14"/>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer14" placeholder="Answer to question 14" rows="2" required></textarea>
                    <p class="answer"></p>
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