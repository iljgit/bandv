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
                let quizid = "quiz5";

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
                    PFModal.showStaticPopup({type: 'quizok', date: '03 May 2020'});
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
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/quiz/gkxl.jpg);">
            <h1 id="title"><span class="title-background">Quiz #5</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <h2>General Knowledge</h2>
                    <p>After a more difficult quiz last week about Song Lyrics, a slightly more straightforward general knowledge quiz this week.  
                    Two points per question.  
                    Please don't look the answers up on the internet - pretty please.</p>
                    <p class="current-quiz">You can send us your answers (fill in your name, and press <i>Submit</i>) if you would like to be included in our wall of fame / shame.</p>
                    <p class="current-quiz">The closing date is the 3<sup>rd</sup> May.</p>
                    <p class="past-quiz">The closing date has now passed.  If you would like to see the answers, press&nbsp;&nbsp;<button class="btn btn-info" onclick="reveal();">Reveal</button></p>
                    <p class="past-quiz">Well done to <b></b> - this week's winner.</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 1.</h5>
                    <p>
                    Which two names are missing in the following sequence:<br>

Henry, Henry, Edward, ?, ?, Elizabeth, James, Charles                    
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer1" placeholder="Answer to question 1" rows="2" required></textarea>
                    <p class="answer">
                    Henry VII, Henry VIII, Edward VI, <b>Jane (Lady Jane Grey)</b>,  
                    <b>Mary</b>, Elizabeth I, James I / VI, Charles I

                    </p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 2.</h5>
                    <p>
                    Put the following in increasing order of northness:<br>

York, Kingston upon Hull, Leeds, Scunthorpe
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer2" placeholder="Answer to question 2" rows="2" required></textarea>
                    <p class="answer">
                    Scunthorpe (53° 34' N)<br>
Kingston upon Hull (53° 44' N)<br>
Leeds (53° 47' N)<br>
York (53° 57' N)
                    </p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 3.</h5>
                    <p>
                    What type of animal is an Alaskan Klee Kai, and what type a Derbyshire Redcap?
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer3" placeholder="Answer to question 3" rows="2" required></textarea>
                    <p class="answer">Dog, Chicken
                    </p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 4.</h5>
                    <p>
                    Who painted the Irises and who painted Yo, Picasso?
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer4" placeholder="Answer to question 4" rows="2" required></textarea>
                    <p class="answer">Vincent van Gogh, Pablo Picasso</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 5.</h5>
                    <p>
                    What sign of the Zodiac are you if you are born on 20<sup>th</sup> July, 
                    and what on the 20<sup>th</sup> January?
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer5" placeholder="Answer to question 5" rows="2" required></textarea>
                    <p class="answer">Cancer, Capricorn</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 6.</h5>
                    <p>
                    What profession might refer to a Durgo Valve, and which job might involve PHP?
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer6" placeholder="Answer to question 6" rows="2" required></textarea>
                    <p class="answer">Plumbing, Programming</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 7.</h5>
                    <p>
                    In the phonetic alphabet (used by the police amongst others) what words are used for C and Z?
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer7" placeholder="Answer to question 7" rows="2" required></textarea>
                    <p class="answer">Charley and Zulu</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 8.</h5>
                    <p>
                    What do the following musical terms mean: adagissimo and allegrissimo
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer8" placeholder="Answer to question 8" rows="2" required></textarea>
                    <p class="answer">Very, very slow<br>Very fast, though slower than presto</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 9.</h5>
                    <p>
                    Name the two alcoholic ingredients of a Manhattan Dry cocktail.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer9" placeholder="Answer to question 9" rows="2" required></textarea>
                    <p class="answer">Bourbon and Dry vermouth</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 10.</h5>
                    <p>
                    How old is the Queen and how old is Prince Charles (as of 26<sup>th</sup> April 2020)?
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer10" placeholder="Answer to question 10" rows="2" required></textarea>
                    <p class="answer">94, 71</p>
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