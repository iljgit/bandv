<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
        <script>
            // REMEMBER to change the quizid and closing date
            function reveal() {
                let btn = document.getElementById('reveal-button');

                if ($('body').hasClass('reveal')) {
                    $('body').removeClass('reveal');
                    btn.innerText = 'Reveal';
                }
                else {
                    $('body').addClass('reveal');
                    btn.innerText = 'Reveal';
                }
            }

            function quiz() {
                let doIt = true; 
                let mfields = ['name', 'answer1'];//, 'answer2', 'answer3', 'answer4', 'answer5', 'answer6', 'answer7', 'answer8', 'answer9', 'answer10'];
                let fields = [];
                let field;
                let i; 
                let msg = document.getElementById('message');
                let url = 'quizhandler.php';
                let delim = '&';
                let fname;
                let button = document.getElementById('submitbutton');
                let quizid = "quiz12";

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
                    PFModal.showStaticPopup({type: 'quizok', date: '20 Dec 2020'});
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
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/quiz/intros-header.jpg);">
            <h1 id="title"><span class="title-background">Quiz #12</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <h2>Musical Intros</h2>
                    <p>Here are a nice round 16 musical intros, covering a range of genres.  All you have to do is name the tune and the artist in each case.</p>
                    <p class="current-quiz">You can send us your answers (fill in your name, and press <i>Submit</i>) if you would like to be included in our wall of fame / shame.</p>
                    <p class="current-quiz">The closing date is the 20<sup>th</sup> December.</p>
                    <p class="past-quiz">The closing date has now passed.  If you would like to see the answers, press <button id="reveal-button" class="btn btn-info" onclick="reveal();">Reveal</button></p>
                    <p class="past-quiz">Well done to the <b>Top Bottoms</b> - this week's winners.</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>All the intros</h5>
                    <p>There are 16 to identify - try to record them one per line, remembering to note the song and the artist</p>
                    <audio controls style="width: 100%; outline: none;">
                        <source src="/assets/audio/quiz12.mp3" type="audio/mpeg">
                        Your browser does not support the audio tag.
                    </audio>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer1" placeholder="Answer to question 1" rows="5" required></textarea>
                    <p class="answer">
                        1. Beethoven's 5th<br/>
                        2. Shout - Lulu<br/>
                        3. Hard Day's Night - The Beatles<br/>
                        4. Soul Limbo - Booker T and the MGs<br/>
                        5. Smoke on the Water - Deep Purple<br/>
                        6. Skyfall - Adele<br/>
                        7. Crazy in Love - Beyonce<br/>
                        8. The Birdie Song - The Tweets<br/>
                        9. Dancing Queen - ABBA<br/>
                        10. Careless Whisper - George Michael<br/>
                        11. I'm Gonna Be (500 Miles) - The Proclaimers<br/>
                        12. Jailhouse Rock - Elvis Presley<br/>
                        13. Back to Black - Amy Winehouse<br/>
                        14. Superstition - Stevie Wonder<br/>
                        15. Living Doll - Cliff Richard<br/>
                        16. Tainted Love - Soft Cell
                    </p>
                </div>
            </div>

            <!--div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 2.</h5>
                    <p>A formidable American power combo.</p>
                    <img style="width:100%;" src="assets/img/quiz/quiz11/q2.jpg"  class="img img-thumbnail" alt="Image for question 2" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer2" placeholder="Answer to question 2" rows="2" required></textarea>
                    <p class="answer">Michelle Obama and Oprah Winfrey</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 3.</h5>
                    <p>Variety is the spice of life.</p>
                    <img style="width:100%;" src="assets/img/quiz/quiz11/q3.jpg"  class="img img-thumbnail" alt="Image for question 3" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer3" placeholder="Answer to question 3" rows="2" required></textarea>
                    <p class="answer">Simon Cowell and Amanda Holden</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 4.</h5>
                    <p>Could acting get any better?</p>
                    <img style="width:100%;" src="assets/img/quiz/quiz11/q4.jpg"  class="img img-thumbnail" alt="Image for question 4" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer4" placeholder="Answer to question 4" rows="2" required></textarea>
                    <p class="answer">Will Smith and Morgan Freeman</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 5.</h5>
                    <p>A twosome you wouldn't want to come up against.</p>
                    <img style="width:100%;" src="assets/img/quiz/quiz11/q5.jpg"  class="img img-thumbnail" alt="Image for question 5" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer5" placeholder="Answer to question 5" rows="2" required></textarea>
                    <p class="answer">Dwayne "the Rock" Johnson and Arnie Schwarzenegger</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 6.</h5>
                    <p>Terrifying cookes the world over.</p>
                    <img style="width:100%;" src="assets/img/quiz/quiz11/q6.jpg"  class="img img-thumbnail" alt="Image for question 6" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer6" placeholder="Answer to question 6" rows="2" required></textarea>
                    <p class="answer">Paul Hollywood and Prue Leith</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 7.</h5>
                    <p>Everything is not quite all right in the garden.</p>
                    <img style="width:100%;" src="assets/img/quiz/quiz11/q7.jpg"  class="img img-thumbnail" alt="Image for question 7" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer7" placeholder="Answer to question 7" rows="2" required></textarea>
                    <p class="answer">Monty Don and Carol Klein</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 8.</h5>
                    <p>The "boy" band from hell?</p>
                    <img style="width:100%;" src="assets/img/quiz/quiz11/q8.jpg"  class="img img-thumbnail" alt="Image for question 8" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer8" placeholder="Answer to question 8" rows="2" required></textarea>
                    <p class="answer">Robbie Williams and Gary Barlow</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 9.</h5>
                    <p>A right royal mash up.</p>
                    <img style="width:100%;" src="assets/img/quiz/quiz11/q9.jpg"  class="img img-thumbnail" alt="Image for question 9" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer9" placeholder="Answer to question 9" rows="2" required></textarea>
                    <p class="answer">Queen Elizabeth II and Freddie Mercury</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 10.</h5>
                    <p>Would you court this person?</p>
                    <img style="width:100%;" src="assets/img/quiz/quiz11/q10.jpg"  class="img img-thumbnail" alt="Image for question 10" />
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer10" placeholder="Answer to question 10" rows="2" required></textarea>
                    <p class="answer">Serena Williams and Andy Murray</p>
                </div>
            </div-->

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