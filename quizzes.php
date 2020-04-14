<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
    </head>
    <body onload="BandV.onload();">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/quiz/header.jpg);">
            <h1 id="title"><span class="title-background">Quizzically Yours</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <p>
                        If you fancy a few minutes doing something a little diverting, why not try one of our quizzes?  They are just for fun, not necessarily 
                        anything to do with allotmenting, and friends and family can join in.  We will put up a new quiz every couple of weeks, and give you 
                        the answers to the last one.
                    </p>
                    <p>
                        If you want you can send us your answers.  We will choose a winner at random and put you on our wall of fame.
                </div>

            </div>

            <div class='row mb justify-content-md-center'><div class='col-12 col-md-4'><hr/></div></div>

            <div class="row mb  justify-content-md-center">
                <div class="col-12">
                    <h2 class="text-center">Current</h2>
                </div>
            </div>

            <div class="row mb justify-content-md-center">

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/quiz/family-fortune.jpg)'>Family Fortunes</div>
                        <div class="card-body">
                            <p>The ever-popular (?) Family Fortunes</p>
                            <p>&nbsp;</p>
                            <p>Answers on 19<sup>th</sup> April 2020</p>
                        </div> 
                        <div class="card-footer"><a href="quiz3.php" title="Quiz #3" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/quiz/childrensheader.jpg)'>Children's Quiz</div>
                        <div class="card-body">
                            <p>Children's TV programmes</p>
                            <p>&nbsp;</p>
                            <p>Answers on 19<sup>th</sup> April 2020</p>
                        </div> 
                        <div class="card-footer"><a href="childrens-quiz1.php" title="Children's Quiz #1" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

            </div>

            <div class='row mb justify-content-md-center'><div class='col-12 col-md-4'><hr/></div></div>

            <div class="row mb">
                <div class="col-12">
                    <h2 class="text-center">Past quizzes</h2>
                    <p class="text-center">You can still have a go at the quizzes - you can see the answers by pressing the <i>Reveal</i> button on the quiz page.</p>
                </div>
            </div>

            <div class="row mb justify-content-md-center">

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/quiz/music.jpg)'>Music<br>Closing date 12<sup>th</sup> April 2020</div>
                        <div class="card-body">
                            <p>How well do you know your music?</p>
                            <p>&nbsp;</p>
                            <p>Well done to <b>Debbie Whitfield, Seamus and Niamh Doherty</b> - this week's winners</p>
                        </div> 
                        <div class="card-footer"><a href="quiz2.php" title="Quiz #2" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/quiz/film.jpg)'>Films<br>Closing date 5<sup>th</sup> April 2020</div>
                        <div class="card-body">
                            <p>Test your knowledge of popular films.</p>
                            <p>&nbsp;</p>
                            <p>Well done to <b>Andy K et al</b> - this week's winners.</p>
                        </div> 
                        <div class="card-footer"><a href="quiz1.php" title="Quiz #1" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

            </div>

        </div>     

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php" ?>
     </body>
 </html>