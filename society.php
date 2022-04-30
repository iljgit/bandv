<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
    </head>
    <body onload="BandV.onload();">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/society/header.jpg); bacground-position: center top;">
            <h1 id="title"><span class="title-background">The Society</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <p>
                    The Burnside and Vinery Road Allotment Society comprises every single allotment holder and associate member.  The Committee is made up of 
                    a dedicated team of volunters who put in a lot of time to make sure the Society runs smoothly and everyone can enjoy facilities which are the 
                    envy of many other associations.  If you feel you could contribute in any way, please don't hesitate to contact a member of the committee.
                    </p>
                </div>

            </div>
            
        </div>

        <div class="container">
            <div class="row mb">
                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/society/documents.jpg)'>Important Documents</div>
                        <div class="card-body">There aren't all that many documents to read, but there are some very important ones.  Please make sure you keep up to date.</div> 
                        <div class="card-footer"><a title="Click for important documents" href="#documents" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/society/committee.jpg)'>The Committee</div>
                        <div class="card-body">Find out who is helping organise and run things on your behalf.</div> 
                        <div class="card-footer"><a title="Click for more about the committee" href="#committee" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

            </div>
        </div>

        <div id="documents" class="container-fluid parallax banner" style="background-image: url(/assets/img/society/documents.jpg); margin-top: 60px;">
            <h2 id="title"><span class="title-background">Important Documents</span></h2>
        </div>

        <div class="container">
            <div class="row mb">

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>Society Rules</div>
                        <div class="card-body simple">
                            <p>The Society Rules replace the Constitution</p>
                            <p><i>Released April 2022</i></p>
                        </div> 
                        <div class="card-footer simple">
                            <a title="Click for latest Society Rules" href="assets/docs/Rules 04_2022.pdf" target="_blank" class='btn btn-primary'>Society Rules...</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>Tenancy Agreements</div>
                        <div class="card-body simple">
                            <p>There is now a single Tenancy Agreement covering both sites</p>
                            <p><i>Released April 2022</i></p>
                        </div> 
                        <div class="card-footer simple">
                            <a title="Click for Vinery" href="assets/docs/2022-04 Tenancy Agreement.pdf" target="_blank" class='btn btn-primary'>Tenancy Agreement...</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>Site Rules</div>
                        <div class="card-body simple">
                            <p>Please ensure you are up to date with the small number of rules.</p>
                            <p><i>Updated 23<sup>rd</sup> April 2022</i></p>
                        </div> 
                        <div class="card-footer simple">
                            <a title="Click for April 2022 update" href="assets/docs/Site-Rules-April-2022.pdf" target="_blank" class='btn btn-primary'>Rules...</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>AGM</div>
                        <div class="card-body simple">
                            <p>AGM Minutes since 2016</p>
                            <p>2021 Minutes posted on 13<sup>th</sup> January 2022</p>
                        </div> 
                        <div class="card-footer simple">
                            <select class="form-control inline" id="agm" style="width: auto; display: inline-block;">
                                <option value="assets/docs/2021 AGM.pdf" selected>2021</option>
                                <option value="assets/docs/2020 AGM.pdf">2020</option>
                                <option value="assets/docs/2019 AGM.pdf">2019</option>
                                <option value="assets/docs/2018 AGM.pdf">2018</option>
                                <option value="assets/docs/2017 AGM.pdf">2017</option>
                                <option value="assets/docs/2016 AGM.pdf">2016</option>
                            </select>&nbsp;
                            <button title="Click for a copy of the AGM minutes" class="btn btn-primary inline" onclick="BandV.showFromSelect('agm');">Minutes...</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>Accounts</div>
                        <div class="card-body simple">
                            <p>The Society publishes its accounts annually.</p>
                        </div> 
                        <div class="card-footer simple">
                            <select class="form-control inline" id="accounts" style="width: auto; display: inline-block;">
                                <option value="assets/docs/Accounts 2018 - 2019.pdf" selected>2018-19</option>
                                <option value="assets/docs/accounts2017.pdf">2017-18</option>
                            </select>&nbsp;
                            <button title="Click for a copy of the Society's accounts" class="btn btn-primary inline" onclick="BandV.showFromSelect('accounts');">Accounts...</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>GDPR</div>
                        <div class="card-body simple">
                            <p>GDPR (General Data Protection Regulation)</p>
                            <p>This document details what personal data is held and our obligations.</p>
                            <p><i>Updated 6<sup>th</sup> March 2022</i></p>
                        </div> 
                        <div class="card-footer simple">
                            <a title="Click for GDPR" href="assets/docs/Burnside and Vinery Allotments GDPR.pdf" target="_blank" class='btn btn-primary'>GDPR...</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>Grievance Procedure</div>
                        <div class="card-body simple">
                            <p>How to raise a formal complaint</p>
                            <p><i>Released April 2022</i></p>
                        </div> 
                        <div class="card-footer simple">
                            <a title="Click for Grievance Procedure" href="assets/docs/Grievance procedure.pdf" target="_blank" class='btn btn-primary'>Grievance Procedure...</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>Behaviour Policy</div>
                        <div class="card-body simple">
                            <p>What the Society deems to be unacceptable behaviour</p>
                            <p><i>Released April 2022</i></p>
                        </div> 
                        <div class="card-footer simple">
                            <a title="Click for Behaviour Policy" href="assets/docs/Behaviour policy.pdf" target="_blank" class='btn btn-primary'>Behaviour Policy...</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>City Council Update</div>
                        <div class="card-body simple">
                            <p>Periodically, we keep the City Council up-to-date with what has been happening on our two sites.</p>
                            <p>Penny sent an update in 2019 detailing the major highlights of the previous ten years.</p>
                        </div> 
                        <div class="card-footer simple">
                            <a title="Click for 2019 update" href="assets/docs/council-2019.pdf" target="_blank" class='btn btn-primary'>Update...</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>Burnside Burn-bin</div>
                        <div class="card-body simple">
                            <p>Burnside Burn-bin Regulations.</p>
                            <p>Please ensure you know the regulations for everyone's safety and comfort.</p>
                        </div> 
                        <div class="card-footer simple">
                            <a title="Click for Burnside Burn-bin regulations" href="assets/docs/BurnBin.pdf" target="_blank" class='btn btn-primary'>Regulations...</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header simple'>Council Lease</div>
                        <div class="card-body simple">
                            <p>The City Council periodically updates the lease agreement for the Society.</p>
                            <p><i>Updated in May 2020.</i></p>
                        </div> 
                        <div class="card-footer simple">
                            <a title="Click for current Council lease agreement" href="assets/docs/Lease agreement final VINERY ROAD PERMANENT ALLOTMENT SOCIETY LIMITED.pdf" target="_blank" class='btn btn-primary'>Lease...</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="committee" class="container-fluid parallax banner" style="background-image: url(/assets/img/society/committee.jpg); margin-top: 60px;">
            <h2 id="title"><span class="title-background">Your Committee</span></h2>
        </div>

        <div class="container">
        <div class="row mb">
                <!-- <div class="col-xs-12  col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Chair - currently vacant</h4></p>
                    <blockquote class="blockquote">
                        <img title="Penny - Chair" class="img img-responsive img-rounded img-thumbnail pull-right margin" style="max-width: 40%;" src="/assets/img/society/committee/penny.jpg"/>
                        I took on my plot in 2012, 
                            I think, as a complete novice vegetable grower, and through regular and intensive effort, it is quite productive.<br>
                            I joined the committee in 2013.
                    </blockquote>
                    <p class="large-text text-center">
                        <a id="chairemail" title="chair@burnsideandvineryallotments.org" href="mailto:chair@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;chair</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'chairemail');"></i>
                    </p>
                    <p class="large-text">Awaiting the election of a new chair</p>
                </div> -->

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Secretary</h4><i>Hamish Symington</i></p>
                    <blockquote class="blockquote">
                    <img title="Hamish Symington - Secretary and Burnside Committe Member" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/hamish-symington.jpg"/> 
                    My wife and I have had a half plot for about six years, and I've kept bees in an apiary on the site for nine. 
                    We’re aiming to work on our vegetables in the next few years, after decent success with currants, tayberries, strawberries and greengages. 
                    Like most others, I think we always hope to spend more time on our plot than we actually do! 
                    </blockquote>
                    <p class="large-text text-center">
                        <a id="secretaryemail" title="secretary@burnsideandvineryallotments.org" href="mailto:secretary@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;secretary</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'secretaryemail');"></i>
                    </p>
                </div>

                <div class="col-xs-12 col-md-6"  style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Treasurer and Burnside site co-manager</h4><i>Andy Kurdynowski - Burnside</i></p> 
                    <blockquote class="blockquote">
                        <img title="Andy - Treasurer, Store Manager, and Burnside Site Manager" class="img margin img-responsive img-rounded thumbnail-lg pull-right" style="max-width: 40%;" src="/assets/img/society/committee/andy.jpg"/>
                        I’ve had my plot on Burnside for about 15 years, starting as a complete allotment novice, and have been a member of the committee for much of that time. I am one of the two Burnside site managers, often spending too much time maintaining the site and not enough working my plot, but I do get enjoyment from both.
                    </blockquote>
                    <p class="large-text text-center">
                        <a id="treasureremail" title="treasurer@burnsideandvineryallotments.org" href="mailto:treasurer@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;treasurer</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'treasureremail');"></i>
                    </p>
                    <p class="large-text text-center">
                        <a id="viceemail" title="burnsidesitemanager@burnsideandvineryallotments.org" href="mailto:burnsidesitemanager@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;burnsidesitemanager</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'viceemail');"></i>
                    </p>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Vinery site chair and manager</h4><i>Barry South - Vinery</i></p>
                    <blockquote class="blockquote">
                        <img title="Barry - Vinery Manager" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/barry.jpg"/> 
                        I’ve had a plot on the Vinery site since 2004 growing mostly fruit and veg that you can’t find easily in the supermarkets or that are just better eaten fresh. 
                        I’m keen to both reclaim the real definition of fresh and minimise food miles. 
                        Along with Alex and Suzy, I’m responsible for the management of the Vinery site.
                    </blockquote>
                    <p class="large-text text-center">
                        <a id="vineryemail" title="vinery@burnsideandvineryallotments.org" href="mailto:vinery@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;vinery</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'vineryemail');"></i>
                    </p>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Burnside site chair</h4><i>Olivia Bull</i></p>
                    <blockquote class="blockquote">
                    <img title="Olivia Bull - Burnside site chair" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/olivia-bull.jpg"/> 
                    My partner and I gratefully received a half plot at Burnside in May 2020 and it has been an incredible adventure since. 
                    I must admit I was more of a houseplant person then an outdoor gardener, but having the allotment has definitely changed that! 
                    You will often find us pottering around the plot or sometimes enjoying a drink in the sunshine. 
                    I am always up for a chat, so do come say hello if you see me. I look forward to being able to further support the society as a member of the committee. 
                    </blockquote>
                </div>

                <div class="col-xs-12 col-md-6">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Burnside site co-manager</h4><i>Matthew Whitelegg - Burnside</i></p>
                    <blockquote class="blockquote">
                        <img title="Matthew - Burnside Site Manager" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/mattheww.jpg"/> 
                        I started on the allotment in the Spring of 2009. Since then we have enjoyed abundant crops of bindweed and mare’s tail. As well as tending the plot I have the role of Burnside site manager along with Andy K. Over the years this has involved letting out plots to new tenants and generally working on the site as a whole.
                    </blockquote>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Burnside committee member</h4><i>John McGill</i></p>
                    <blockquote class="blockquote">
                        <img title="John - Burnside Committee Member" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/johnmcgill.jpg"/>
                    I've had a plot at Burnside since about 2010 and have been on the committee since 2014. I've always found it a very friendly environment, with great collaboration among all other lot-holders.
                    </blockquote>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Vinery committee member</h4><i>Peter Harrison</i></p>
                    <blockquote class="blockquote">
                    <img title="Peter Harrison - Vinery Committe Member" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/gardener.jpg"/> 
                    Bio coming...
                    </blockquote>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Burnside committee member</h4><i>Emma Lacy</i></p>
                    <blockquote class="blockquote">
                    <img title="Emma Lacy - Burnside Committe Member" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/emma-lacy.jpg"/> 
                    I got my plot at Burnside right at the start of the pandemic in 2020. It's my little Eden and a place away from the hustle and bustle. 
                    Having worked at The RSPB and at environmental organisations, before going gardener full time, it's an environment I'm really passionate about. 
                    Putting nature and the climate first by growing my own.
                    </blockquote>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Vinery committee member</h4><i>Patrick Joyce</i></p>
                    <blockquote class="blockquote">
                    <img title="Vinery Committe Member - vacant" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/gardener.jpg"/> 
                    Bio coming...
                    </blockquote>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Vinery committee member</h4><i>Position vacant</i></p>
                    <blockquote class="blockquote">
                    <img title="Vinery Committe Member - vacant" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/gardener.jpg"/> 
                    </blockquote>
                </div>

            </div>

        </div>


         <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php" ?>
     </body>
 </html>