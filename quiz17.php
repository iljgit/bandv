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
                let quizid = "quiz17";

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
                    PFModal.showStaticPopup({type: 'quizok', date: '29 January 2022'});
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
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/quiz/quiz17/header.jpg);">
            <h1 id="title"><span class="title-background">Quiz #17</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <h2>Lists</h2>
                    <p>Here are ten sets of lists.  All you need to do is put them in the order specified.</p>
                    <p class="current-quiz">You can send us your answers (fill in your name, and press <i>Submit</i>) if you would like to be included in our wall of fame / shame.</p>
                    <p class="current-quiz">The closing date is the 29<sup>th</sup> January.</p>
                    <p class="past-quiz">The closing date has now passed.  If you would like to see the answers, press <button class="btn btn-info" onclick="reveal();">Reveal</button></p>
                    <p class="past-quiz">Well done to the <b>Top Bottoms</b> - this week's winner.  With honourable mentions to Michelle and Ingrid</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 1.</h5>
                    <p>
                        Place the following counties in increasing order of area:
                        <ul>
                            <li>Shropshire</li>
                            <li>Norfolk</li>
                            <li>Devon</li>
                            <li>Cambridgeshire</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer1" placeholder="Answer to question 1" rows="4" required></textarea>
                    <p class="answer">Cambridgeshire<br/>Shropshire<br/>Norfolk<br/>Devon</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 2.</h5>
                    <p>
                        Place the following champagne bottles in increasing order of volume:
                        <ul>
                            <li>Jereboam</li>
                            <li>Melchizedek</li>
                            <li>Sovereign</li>
                            <li>Balthazar</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer2" placeholder="Answer to question 2" rows="4" required></textarea>
                    <p class="answer">Jereboam (3L)<br/>Balthazar (12L)<br/>Sovereign (26.25L)<br/>Melchizedek (30L)
</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 3.</h5>
                    <p>
                        Place the following Ann Summers items in increasing order of price (as at December 2021):
                        <ul>
                            <li>Studded Buckle Handcuffs</li>
                            <li>Pom Pom Bunny Lounge Set</li>
                            <li>Arrest Me Officer Outfit</li>
                            <li>After Dinner Willies</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer3" placeholder="Answer to question 3" rows="4" required></textarea>
                    <p class="answer">After Dinner Willies (£4.80)<br/>Studded Buckle Handcuffs (£14)<br/>Pom Pom Bunny Lounge Set (£24.50)<br/>Arrest Me Officer Outfit (£28)
</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 4.</h5>
                    <p>
                        Place the following allotment favourites in increasing order of century of introduction to Britain:
                        <ul>
                            <li>Beetroot</li>
                            <li>Cauliflower</li>
                            <li>Cabbage</li>
                            <li>Turnip</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer4" placeholder="Answer to question 4" rows="4" required></textarea>
                    <p class="answer">Turnips (1st C)<br/>Cabbage (14th C)<br/>Cauliflower (16th C)<br/>Beetroot (17th C)
</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 5.</h5>
                    <p>
                        Place the following best-selling UK singles in increasing order of sales:
                        <ul>
                            <li>Two Tribes - Frankie Goes to Hollywood</li>
                            <li>Mull of Kintyre - Wings</li>
                            <li>Barbie Girl - Aqua</li>
                            <li>YMCA - Village People</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer5" placeholder="Answer to question 5" rows="4" required></textarea>
                    <p class="answer">YMCA – Village People (1.5M)<br/> Two Tribes – Frankie Goes to Holywood (1.6M)<br/>Barbie Girl – Aqua (1.8M)<br/>Mull of Kintyre – Wings (2M)
</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 6.</h5>
                    <p>
                        Place the following chocolate bars in increasing order of calories per gram:
                        <ul>
                            <li>Crunchie</li>
                            <li>Wispa</li>
                            <li>Picnic</li>
                            <li>Star Bar</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer6" placeholder="Answer to question 6" rows="4" required></textarea>
                    <p class="answer">Crunchie (4.7/g)<br/>Picnic (4.9/g)<br/>Star Bar (5.1/g)<br/>Wispa (5.5/g)
</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 7.</h5>
                    <p>
                        Place the following baby-boy names in increasing order of popularity (England & Wales - 2020):
                        <ul>
                            <li>Muhammed</li>
                            <li>Noah</li>
                            <li>Alfie</li>
                            <li>Logan</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer7" placeholder="Answer to question 7" rows="4" required></textarea>
                    <p class="answer">Logan (37th)<br/>Alfie (18th)<br/>Muhammad (5th)<br/>Noah(4th)
</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 8.</h5>
                    <p>
                        Place the following baby-girl names in increasing order of popularity (England & Wales - 2020):
                        <ul>
                            <li>Sienna</li>
                            <li>Olivia</li>
                            <li>Florence</li>
                            <li>Maisie</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer8" placeholder="Answer to question 8" rows="4" required></textarea>
                    <p class="answer">Maisie (41st)<br/>Sienna (22nd)<br/>Florence (14th)<br/>Olivia (1st)
</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 9.</h5>
                    <p>
                        Place the following UK TV broadcasts in increasing order of audience:
                        <ul>
                            <li>Wedding of Princess Anne and Mark Phillips</li>
                            <li>Apollo 13 Splashdown</li>
                            <li>Funeral of Diana</li>
                            <li>Boris Johnson on first Covid lockdown</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer9" placeholder="Answer to question 9" rows="4" required></textarea>
                    <p class="answer">Boris Johnson on Covid (2020 - 27.1m)<br/>Wedding of Princess Anne and Mark Phillips (1973 - 28.4m)<br/>Apollo 13 Splashdown (1970 - 28.6m)<br/>Funeral of Diana (1997 - 32.1m)
</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6">
                    <h5>Question 10.</h5>
                    <p>
                        Place the following actors in increasing order of earnings in 2020:
                        <ul>
                            <li>Mark Wahlberg</li>
                            <li>Dwayne Johnson</li>
                            <li>Sofia Veraga</li>
                            <li>Akshay Kumar</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <textarea class="form-control" id="answer10" placeholder="Answer to question 10" rows="4" required></textarea>
                    <p class="answer">Sofia Veraga ($43m)<br/>Akshay Kumar ($48.5)<br/>Mark Wahlberg ($58m)<br/>Dwayne Johnson ($87.5m)
</p>
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