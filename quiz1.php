<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
        <script>
            // REMEMBER to change the quizid and closing date
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
                let quizid = "quiz1";

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
                    PFModal.showStaticPopup({type: 'quizok', date: '5<sup>th</sup> April 2020'});
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
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/quiz/header.jpg);">
            <h1 id="title"><span class="title-background">Quiz</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <p>We are facing uncertain times, with lots to concern us.  There is nothing like a good quiz to take your mind off things, 
                        and this is nothing like a good quiz.  It's just for fun and the results will be published on 5<sup>th</sup> April 2020, along with a randomly drawn winner.
                    </p>
                </div>

            </div>

            <div class="row mb">
                <div class="col-12">
                    <h2>Famous Lines from Films</h2>
                    <p>Here are 10 questions about famous films. In each case there is an excerpt from the dialogue.  Answer all the questions, then 
                        send us your answers (fill in your name, and press <i>Submit</i> if you would like to be included in our wall of fame / shame.
                    </p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 1.</h5>
                    <p>
                        <blockquote>
                            "Play Misty for me."
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the male lead.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer1" placeholder="Answer to question 1" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 2.</h5>
                    <p>
                        <blockquote>
                            "He’s not the Messiah.  He’s a very naughty boy."
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the actor.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer2" placeholder="Answer to question 2" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 3.</h5>
                    <p>
                        <blockquote>
                            "I’m gonna make him an offer he can’t refuse."
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the actor.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer3" placeholder="Answer to question 3" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 4.</h5>
                    <p>
                        <blockquote>
                            "You ever been in a cockpit before?"<br>
                            - "No, sir. I've never been up in a plane before?"<br>
                            - "You ever seen a grown man naked?"
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the adult actor.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer4" placeholder="Answer to question 4" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 5.</h5>
                    <p>
                        <blockquote>
                            "Oh... Oh god... Ooo Oh God... Oh... Oh... Oh... Oh God... Oh yeah, right there... Oh! Oh... Yes Yes Yes Yes Yes Yes... Oh... Oh... Yes Yes Yes.... Oh... Yes Yes Yes Yes Yes Yes... Oh... Oh... Oh... Oh God Oh... Oh... Huh..."
                            <br>"I'll have what she's having." 
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the female lead.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer5" placeholder="Answer to question 5" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 6.</h5>
                    <p>
                        <blockquote>
                        "A census taker once tried to test me. I ate his liver with some fava beans and a nice Chianti."
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the actor playing the baddy.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer6" placeholder="Answer to question 6" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 7.</h5>
                    <p>
                        <blockquote>
                            “Hasta La vista baby”
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the male lead.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer7" placeholder="Answer to question 7" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 8.</h5>
                    <p>
                        <blockquote>
                            "Carpe diem. Seize the day, boys. Make your lives extraordinary."
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the male lead.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer8" placeholder="Answer to question 8" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 9.</h5>
                    <p>
                        <blockquote>
                            "Mama always said life was like a box of chocolates. You never know what you're gonna get." 
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the male lead.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer9" placeholder="Answer to question 9" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 10.</h5>
                    <p>
                        <blockquote>
                            “Mrs. Robinson, you're trying to seduce me."
                        </blockquote>
                    </p>
                    <p>
                        Name the film and the male lead.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer10" placeholder="Answer to question 10" rows="2" required></textarea>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Your name</h5>
                </div>

                <div class="col-sm-12 col-md-6">
                    <input type="text" class="form-control" id="name" placeholder="Your name" required>
                </div>
            </div>

            <div class="row mb">
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